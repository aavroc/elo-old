<?php

namespace App\Http\Controllers;

use App\Classroom;
use App\User;
use App\Task;
use App\Module;
use App\GitHub;
use Carbon\Carbon;

use Illuminate\Http\Request;
use App\Traits\UploadTrait;
use Illuminate\Support\Str;
use League\CommonMark\GithubFlavoredMarkdownConverter;

class AdminController extends Controller
{
    use UploadTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function dashboard(Request $request)
    {
        $github = new GitHub();

        $users = User::where(
            [
                ['role', 3],
                ['github_nickname', '!=', NULL]

            ]
        )
            ->get();
        $modules = Module::all();

        $commits = [];
        foreach ($modules as $module) {
            foreach ($users as $user) {
                $commits[$module->name][$user->firstname . ' ' .  $user->lastname] =
                    $github->list_user_commits($module->name, $user->github_nickname, $user->github_nickname, '&since=2020-03-23T00:00:00Z');
            }
        }

        // dd($commits);

        $data = [
            'users' => $users,
            'commits' => $commits,
            'modules' => $modules,
        ];
        return view('dashboards.admin', $data);
    }

    public function index()
    {
        $data = [
            'users' => User::all()

        ];
        //show all users
        return view('users.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->studentnr = $request->studentnr;
        $user->firstname = $request->firstname;
        $user->prefix = $request->prefix;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->role = $request->type_gebruiker;

        $user->save();
        return redirect()->route('users.edit', $user);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $all_modules    = Module::all();

        $github = new GitHub();

        $user_events = null;
        if ($user->github_nickname != null) {
            $user_events = $github->get_user_events($user->github_nickname);
        }



        $data = [
            'user'          => $user,
            'all_modules'   => $all_modules,
            'user_events'   => $user_events
        ];

        return view('users.show', $data);
    }

    public function show_module(User $user, Module $module, Request $request)
    {
        $github = new GitHub();

        $commits = null;
        $commit_activity = null;
        $user_events = null;
        $levels = null;
        $tasks_level_1 = null;
        $tasks_level_2 = null;
        $tasks_level_3 = null;
        if ($user->github_nickname != null) {
            $commits = $github->list_user_commits($module->name, $user->github_nickname, $user->github_nickname);
            // $commit_activity = $github->get_last_year_commit_activity($module->name, $user->github_nickname);

            $user_events = $github->get_user_events($user->github_nickname);
            $levels = $github->get_contents($module->name, '', $user->github_nickname);
            $tasks_level_1 = $github->get_contents($module->name, 'niveau1', $user->github_nickname);
            $tasks_level_2 = $github->get_contents($module->name, 'niveau2', $user->github_nickname);
            $tasks_level_3 = $github->get_contents($module->name, 'niveau3', $user->github_nickname);
        }
        // dd($tasks_level_3);
        $data = [
            'user'              => $user,
            'module'            => $module,
            'commits'           => $commits,
            'commit_activity'   => $commit_activity, //nog niet toonbaar op het scherm
            'user_events'       => $user_events,
            'levels'            => $levels,
            'tasks_level_1'     => $tasks_level_1,
            'tasks_level_2'     => $tasks_level_2,
            'tasks_level_3'     => $tasks_level_3,
        ];

        return view('users.repo', $data);
    }

    public function show_task(User $user, Module $module, Request $request)
    {
        $github = new GitHub();

        $commits = null;
        $contents = null;
        if ($user->github_nickname != null) {
            $commits = $github->list_commits_path($module->name, $user->github_nickname, $request->path);
            $contents = $github->get_contents($module->name,  $request->path, $user->github_nickname);
        }

        if ($request->path != null) {
            $readme = $github->get_specific_readme($module->name, $request->path);
        } else {
            $readme = $github->get_global_readme($module->name);

            if (isset($readme->message)) {
                if ($readme->message == "Bad credentials") {
                    die('please connect with GitHub');
                }
            }
        }
        $readme_content = base64_decode($readme->content);
        $converter = $this->converter();
        $data = [
            'user'      => $user,
            'module'    => $module,
            'commits'   => $commits,
            'contents'  => $contents,
            'readme_content' => $converter->convertToHtml($readme_content),
        ];

        return view('users.task', $data);
    }

    public function converter()
    {
        return new GithubFlavoredMarkdownConverter([
            'renderer' => [
                'block_separator' => "\n",
                'inner_separator' => "\n",
                'soft_break'      => "\n",
            ],
            'enable_em' => true,
            'enable_strong' => true,
            'use_asterisk' => true,
            'use_underscore' => true,
            'unordered_list_markers' => ['-', '*', '+'],
            'max_nesting_level' => INF,
        ]);
    }

    public function show_code(User $user, Module $module, Request $request)
    {
        $github = new GitHub();

        $commits = null;
        $contents = null;
        $code = null;
        if ($user->github_nickname != null) {
            // $commits = $github->list_commits_path($module->name, $user->github_nickname, $request->path);
            $contents = $github->get_contents($module->name,  $request->path, $user->github_nickname); //get content
            $code = $github->get_contents($module->name,  $request->path, $user->github_nickname, TRUE); //get raw content
        }

        $path_splitted = explode('/', $request->path);

        $level      =  $path_splitted[0];
        $task       =  $path_splitted[1];

        // dd($contents);

        $data = [
            'user'      => $user,
            'level'     => $level,
            'task'      => $task,
            'module'    => $module,
            'contents'  => $contents,
            'code'      => $code,
        ];

        return view('users.code', $data);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, User $user)
    {

        $data = [
            'user' => $user,
            'classrooms' => Classroom::all()
        ];
        return view('users.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([ //validate name and the image
            'firstname'   =>  'required',
            'lastname'   =>  'required',
            'email'  =>  'required',
            'status' =>  'required',
            'type_gebruiker' =>  'required',
        ]);

        $user->firstname = $request->firstname;
        $user->prefix = $request->prefix;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->classroom = $request->classroom;
        $user->status_id = $request->status;
        $user->role = $request->type_gebruiker;
        $user->save();

        $data = [
            'user' => $user
        ];

        return redirect()->route('users.edit', $user);
    }

    public function select_file()
    {
        $data = [
            'classrooms' => Classroom::all()
        ];
        return view('users.upload', $data);
    }

    public function upload_data(Request $request)
    {
        if ($request->has('file_upload')) {
            $file = $this->uploadFile($request);
            if (($handle = fopen(public_path() . '/storage/' . $file, 'r')) !== FALSE) {
                while (($data = fgetcsv($handle, 1000, ';')) !== FALSE) {
                    // dd($data);

                    $csv_data = new Csvdata();
                    $csv_data->studentnr = $data[0];
                    $csv_data->firstname = $data[1];
                    $csv_data->prefix = $data[2];
                    $csv_data->lastname = $data[3];
                    $csv_data->email = $data[4];
                    $csv_data->classroom = $request->classroom;
                    $csv_data->save();
                }
                fclose($handle);
            }
        }
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function change_password()
    {
    }

    protected function uploadFile(Request $request)
    {

        //if link is not working create a symbolik link: see documentation !!!

        // Check if a profile image has been uploaded
        if ($request->has('file_upload')) {
            // Get image file
            $file = $request->file('file_upload');
            // Make a image name based on user name and current timestamp
            $name = Str::slug($request->input('name')) . '_' . time();
            // Define folder path
            $folder = '/uploads/csv/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name . '.' . $file->getClientOriginalExtension();
            // Upload image
            $this->uploadOne($file, $folder, 'public', $name);
            // Set user profile image path in database to filePath
            return $filePath;
        }
        //if no image is selected use the current image
        return $file;
    }
}
