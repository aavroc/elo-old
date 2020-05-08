<?php

namespace App\Http\Controllers;

use App\Classroom;
use App\Challenge;
use App\User;
use App\Task;
use App\Module;
use App\GitHub;
use Carbon\Carbon;
use App\CSVData;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Traits\UploadTrait;
use App\UsersRequest;
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
        $users = User::where(
            [
                ['role', 3],
                ['github_nickname', '!=', NULL]

            ]
        )->get();

        $requests = UsersRequest::where('status', '<=' ,  3)->with('task')->orderBy('updated_at')->get();
        $taken_requests = UsersRequest::where('type', '=' , 1)->where(
                [
                    ['status', '!=' , 4],
                ]
                )->with('task')->get();

        
        
        $usernameByID = User::pluck('lastname', 'id');
        $task_requests = $requests->pluck('task');
        $counted_tasks = $taken_requests->pluck('task_id')->countBy()->toArray();
        $modules = Module::all();
                // dd($usernameByID );
        // dd($taken_requests);
        $data = [
            'users' => $users,
            'modules' => $modules,
            'requests' => $requests,
            'usernameByID' => $usernameByID,
            'task_requests' => $task_requests,
            'counted_tasks' => $counted_tasks,
            'taken_requests' => $taken_requests,
            'results' => $this->calculateChallengeResults(),

        ];
        return view('dashboards.admin', $data);
    }

    protected function calculateChallengeResults() //calculate the results of challenge1
    {
        $challenge = Challenge::find(1);
        $amountOfClosed = 0;
        $amountOfOpen = 0;
        $amountOfDone = 0;
        
        if ($challenge != null){

            foreach($challenge->users as $user){
                echo $user->pivot->status;
                if($user->pivot->status == 0){
                    $amountOfClosed++;
                }
                elseif($user->pivot->status == 1){
                    $amountOfOpen++;
                }
                else{
                    $amountOfDone++;
                }
            }
        }
        $results = ['closed'=> $amountOfClosed,  'open'=> $amountOfOpen,  'done' => $amountOfDone];
        return $results;
    }

    //connect teacher to request... and update the request to being processed...
    public function handleRequest(UsersRequest $user_request){
        
        $user_request->docent_id = Auth::user()->id;
        
        if($user_request->status == 1){
            $user_request->status = 2;
        }elseif($user_request->status == 2){
            $user_request->status = 3;
        }
        
        
        $user_request->save();
        
        return redirect()->route('admin');

    }

    public function request_to_done(Request $request)
    {
        // dd($request);
        if(isset($request->todos)){
            foreach($request->todos as $todo){
                UsersRequest::where('id', $todo)->update(
                    [
                        'status' => 3
                    ]
                );
            }

        }

        return redirect()->route('admin');

    }

    public function challenges()
    {
        $github = new GitHub();
        $challenges = Challenge::all();
        
        $challenge1 = $github->get_global_readme('PGO-CHALLENGE');
        
        foreach($challenges as $challenge){
            switch($challenge->id){

                case 1:
                    $readme = $challenge1->content;
                    break;
                
                default:
                    $readme = '';
                    break;

            }
            
            Challenge::updateOrInsert(
                [
                'id' => $challenge->id,
                ],
                [
                    'readme' =>  $readme,
                ]
            );
        }
       
        return redirect()->route('admin');
    }


    //retrieve all modules readme's from github and store in db
    public function modules()
    {
        $github = new GitHub();
        $modules = Module::all();
        
        foreach($modules as $module){
            Module::updateOrInsert(

                [
                    'id' => $module->id,
                    // 'slug' => $module->slug,
                ],
                [
                    'readme' =>  $github->get_global_readme($module->slug)->content,
                ]
                );
        }
        return redirect()->route('admin');
        
    }


    // //retrieve all tasks from github and store them in db
    // public function tasks()
    // {
    //     $github = new GitHub();
    //     $github->retrieve_tasks();
        
    //     // dd($data_generated);
    //     return view('tasks.index');
    // }

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
       
        if($user->role == 3){
            $user->classroom = 'LCTAO2020';
            $modules = Module::all();
            
            foreach ($modules as $module) {
                DB::table('users_modules')->insert(
                    [
                    'user_id' => $user->id,
                    'module_id' => $module->id,
                    'status' => 0,
                    
                    ]
                );
            }
        }
        $user->save();

        return redirect()->route('users.edit', $user);
    }

    /**
     * Laat info gebruiker zien
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $all_modules    = Module::all();
        $all_challenges = Challenge::all();

        $github = new GitHub();

        $repo_commits = [];
        if ($user->github_nickname != null) {
            foreach ($all_modules as $module) {
                $repo_commits[$module->slug] = $github->list_user_commits($module->slug, $user->github_nickname, $user->github_nickname);
                
            }
        }

        $data = [
            'user'           => $user,
            'all_modules'    => $all_modules,
            'all_challenges' => $all_challenges,
            'repo_commits'   => $repo_commits
        ];

        return view('users.show', $data);
    }

    

    //laat de moduels uit de db zien op het scherm
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
            $commits = $github->list_user_commits($module->slug, $user->github_nickname);
            // $commit_activity = $github->get_last_year_commit_activity($module->name, $user->github_nickname);

            // $user_events = $github->get_user_events($user->github_nickname);
            // $levels = $github->get_contents($module->slug, '', $user->github_nickname);
            // $tasks_level_1 = $github->get_contents($module->slug, 'niveau1', $user->github_nickname);
            // $tasks_level_2 = $github->get_contents($module->slug, 'niveau2', $user->github_nickname);
            // $tasks_level_3 = $github->get_contents($module->slug, 'niveau3', $user->github_nickname);
        }

        // dd( $tasks_level_1 );
        // dd( $commits );

        $data = [
            'user'              => $user,
            'module'            => $module,
            'commits'           => $commits,
            'commit_activity'   => $commit_activity, //nog niet toonbaar op het scherm
            // 'user_events'       => $user_events,
            // 'levels'            => $levels,
            // 'tasks_level_1'     => $tasks_level_1,
            // 'tasks_level_2'     => $tasks_level_2,
            // 'tasks_level_3'     => $tasks_level_3,
        ];

        return view('users.repo', $data);
    }

    //laat de diverse taken zien op het scherm
    public function show_task(User $user, Module $module, Request $request)
    {
        $github = new GitHub();

        $commits = null;
        $contents = null;
        if ($user->github_nickname != null) {
            $commits = $github->list_commits_path($module->slug, $user->github_nickname, $request->path);
            $contents = $github->get_contents($module->slug,  $request->path, $user->github_nickname);
        }

        if ($request->path != null) {
            $readme = $github->get_specific_readme($module->slug, $request->path);
        } else {
            $readme = $github->get_global_readme($module->slug);

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
            $contents = $github->get_contents($module->slug,  $request->path, $user->github_nickname); //get content
            $code = $github->get_contents($module->slug,  $request->path, $user->github_nickname, TRUE); //get raw content
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


    //retrieve module and task data
    public function retrieve()
    {
        $this->challenges();
        $this->modules();
        // $this->tasks();
        return redirect()->route('admin');
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

    //update module niveau van een student
    public function update_level(Request $request)
    {
        $item_status = explode('_', $request->status);
        $item = $item_status[0];
        $id = $item_status[1];
        $status_text = $item_status[2];

        if($status_text == 'done'){
            $status = 3;
        }
        elseif($status_text == 'open' ){
            $status = 1;
        }
        else{
            $status = 0;
        }

        $student = User::find($request->student);

        $data = [];

        if($item == 'module'){
            $module = Module::find($id);
            DB::table('users_modules')->where( 'user_id', $student->id )->where('module_id', $module->id)->update(
                [
                    'status' => $status,
                    'updated_at' => DB::raw('NOW()')
                ]
            );
    
            $challenge_done = $this->openChallenge($student, $module);  
            $data['challenge_done'] = $challenge_done;

        }
        else{
            $challenge = Challenge::find($id);
            
            DB::table('users_challenges')->where( 'user_id', $student->id )->where('challenge_id', $challenge->id)->update(
                [
                    'status' => $status,
                    'updated_at' => DB::raw('NOW()')
                ]
            );
        }
        $data['status_text'] = $status_text;
        
        return $data;
    }

    //zet een challenge open op basis van de stand van de bijbehorende modules
    public function openChallenge(User $student, Module $module){
        
        // $student = User::find(4);
        // $module = Module::find(1);
        $challenges = $module->challenges()->where('module_id', $module->id)->get();
        $challenges_results = [];
        foreach($challenges as $challenge){
            
            $challenges_results[$challenge->id] = TRUE;
            
            foreach ($challenge->modules as $module_ch) {
                // dump($module_ch->name);
                // dump($module_ch->users_done()->where('users.id', $student->id)->first());
                if($module_ch->users_done()->where('users.id', $student->id)->first() == NULL){
                    $challenges_results[$challenge->id] = FALSE;
                }
            }
           
        }
        // var_dump($challenge_done);
        $challenge_done = [];
        foreach($challenges_results as $challenge_key => $status){
            if($status == true){
                $challenge_done[] = $challenge_key;
                $student->challenges()->where('challenge_id', $challenge_key)->update(
                    [
                        'users_challenges.status' => 1
                    ]
                );
                
            }else{
                $student->challenges()->where('challenge_id', $challenge_key)->update(
                    [
                        'users_challenges.status' => 0
                    ]
                );
            }
        }
        return $challenge_done;
        
    }

    //update de beoordeling op vaardigheden door de docent
    public function update_indicator_teacher(Request $request)
    {
        $student = User::find($request->student);

        if($request->status == 'voldaan'){
            $status = 1;
        }
        elseif($request->status == 'niet_voldaan'){
            $status = 0;
        }

        $student->skills()->where('indicator_id', $request->indicator_id)->update(
            [
                'docent' => $status
            ]
        );
    }

    //update het commentarenveld dat bij iedere skill voor iedere student wordt bijgehouden
    public function update_skills_text(Request $request)
    {
        
        $request->student
        $request->text
        $request->skill
    }
    

    
}
