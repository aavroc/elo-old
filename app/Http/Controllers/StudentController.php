<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Module;
use App\User;
use App\GitHub;
use Illuminate\Support\Facades\Auth;
use League\CommonMark\GithubFlavoredMarkdownConverter;
class StudentController extends Controller
{

    public function dashboard()
    {
        $data = [
            'modules' => Module::all(),
            'user'   => Auth::user(),

        ];
        return view('dashboards.student', $data);
    }

    public function show_module(Request $request)
    {
        $name = $request->repo;
        $path = $request->path;
        $repo = Module::where('name', $name)->first();
        $github = new GitHub();
        $github->fork($repo->name);

        if ($path != null) {
            $readme = $github->get_specific_readme($repo->name, $path);
        } else {
            $readme = $github->get_global_readme($repo->name);

            if (isset($readme->message)) {
                if ($readme->message == "Bad credentials") {
                    die('please connect with GitHub');
                }
            }
        }
        $readme_content = base64_decode($readme->content);

        $data = [
            'full_repo_data' => $github->get_contents($repo->name, $path),
            'readme_content' => $this->converter->convertToHtml($readme_content),
            'repo' => $repo->name,
        ];
        return view('modules.show', $data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $levels = Module::all();
        $users  = User::where('role', 3)->get();
        $exercises = Exercise::all();

        // dd($exercises);

        $data = [
            'users'               => $users,
            'levels'              => $levels,
            'number_of_exercises' => Exercise::count()
        ];
        return view('users.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $student)
    {
        // $exercises     = $student->exercises;
        // $all_exercises = Exercise::all();
        // $all_levels    = Level::all();

        // $data = [
        //     'exercises'     => $exercises,
        //     'user'          => $student,
        //     'all_exercises' => $all_exercises,
        //     'all_levels'    => $all_levels,
        // ];
        // return view('users.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    public function update_level(Request $request)
    {
        User::where('id', $request->student)->update(['level_id' => $request->level]);

        $msg = "The level of user with id " . $request->student . " has been changed to level " . $request->level;
        return response()->json(array('msg' => $msg, 'level' => $request->level), 200);
    }

    public function check_assignment_status(Request $request)
    {
        $user = Auth::user();
        $code = Code::where('user_id', $user->id)->latest('updated_at')->first();

        //als de data van een van de kolommen gelijk is aan de updated tijd dan heeft een docent iets gedaan....en dus een oordeel geveld
        if ($code->denied == $code->updated_at || $code->approved == $code->updated_at) {
            $msg = '<span class="nav-link">De opdracht <a href="' . route('exercises.code', $code->exercise_id) . '" class="text-info">' . $code->exercise->name . '</a> is beoordeeld!. Check it</span>';
            return response()->json(array('msg' => $msg), 200);
        }
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
}
