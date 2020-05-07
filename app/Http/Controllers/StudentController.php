<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Module;
use App\User;
use App\GitHub;
use Illuminate\Support\Facades\Auth;
use App\UsersRequest;
use League\CommonMark\GithubFlavoredMarkdownConverter;
class StudentController extends Controller
{

    public function dashboard()
    {

        $usernameByID = User::pluck('lastname', 'id');

        $data = [
            'modules' => Module::all(),
            'user'   => Auth::user(),
            'usernameByID' => $usernameByID,

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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

    public function form_request(Request $request)
    {
        // dd($request->request);
        
        // dd($request->task_choice);
        switch ($request->onderwerp) {
            case 'hulpvraag'://hulpvraag gekozen op taak niveau
                foreach($request->task_choice as $chosen_tasks){
                    if($chosen_tasks != null)
                    {
                        $module_task = explode( '_', $chosen_tasks);
                        $module = $module_task[0];
                        $task = $module_task[1];
                    
                        UsersRequest::updateOrInsert(
                            [
                                'user_id' => Auth::user()->id,
                                'task_id' => $task,
                                'module_id' => $module,
                                'type'    => 1, //hulpvraag
                            ],
                            [  
                                'extra'     => $request->aanvullend,
                                "created_at" =>  \Carbon\Carbon::now(), # new \Datetime()
                                "updated_at" => \Carbon\Carbon::now(),  # new \Datetime()
                            ]
                        );
                    }
    
                }
                break;
            case 'nakijkverzoek'://module opdracht bespreken
                    if($request->module_choice != null){
                        
                        UsersRequest::updateOrInsert(
                            [
                                'user_id' => Auth::user()->id,
                                'module_id' => $request->module_choice,
                            ],
                            [  
                                'type'    => 2, //module gesprek
                                'extra'     => $request->aanvullend,
                                "created_at" =>  \Carbon\Carbon::now(), # new \Datetime()
                                "updated_at" => \Carbon\Carbon::now(),  # new \Datetime()
                                ]
                            );
                            
                    }
                    break;
            case 'coach_gesprek'://coach gesprek aanvraag
                UsersRequest::updateOrInsert(
                    [
                        'user_id' => Auth::user()->id,
                        'type'    => 3, //coachgesprek
                    ],
                    [  
                        'extra'     => $request->aanvullend,
                        "created_at" =>  \Carbon\Carbon::now(), # new \Datetime()
                        "updated_at" => \Carbon\Carbon::now(),  # new \Datetime()
                    ]
                );
    
                break;
            case 'workshop'://workshop aanvraag
                UsersRequest::insert(
                    [
                        'user_id' => Auth::user()->id,
                    
                        'type'    => 4, //coachgesprek
                        'workshop' => $request->workshop,
                        'extra'     => $request->aanvullend,
                        "created_at" =>  \Carbon\Carbon::now(), # new \Datetime()
                        "updated_at" => \Carbon\Carbon::now(),  # new \Datetime()
                    ]
                );
    
                break;
            default:
                
                break;
        }

        return redirect()->route('student');
    }

    public function update_indicator_student(Request $request)
    {
        $student = Auth::user();

        if($request->status == 'voldaan'){
            $status = 1;
        }
        elseif($request->status == 'niet_voldaan'){
            $status = 0;
        }

        $student->skills()->where('indicator_id', $request->indicator_id)->update(
            [
                'student' => $status
            ]
        );
    }
}
