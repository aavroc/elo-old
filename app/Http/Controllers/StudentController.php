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

    protected $converter;

    public function __construct()
    {
        $this->converter = new GithubFlavoredMarkdownConverter([
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

    public function helpvideos()
    {
        return view('help.videos');
    }

    public function helptekst()
    {
        $tekst = "# Start module

        Je bent begonnen aan een nieuwe module, hieronder staat beschreven wat je moet doen om met deze module te kunnen werken in VS Code:

        1. Er is een `fork` (kopie) gemaakt van de module onder je eigen Github account. Ga naar [Github](https://github.com/) en login dan zie je een nieuwe repository staan met de naam van deze Module.
        2. Open de repository en copy/paste de clone link (zoals je dat ook doet voor Classroom assignments)
        3. Als je nog geen map hebt aangemaakt voor al je werk maak deze dan aan. Noem deze map `op4-eagle-modules`.
        4. Om lokaal op je laptop te werken moet je eerste een `clone` maken. Open de `op4-eagle-modules` map in VS Code met `File > Open Folder` of <kbd>CTRL</kbd>+<kbd>K</kbd> <kbd>CTRL</kbd>+<kbd>O</kbd>
        5. Open de terminal met `Terminal > New Terminal` of <kbd>CTRL</kbd>+<kbd>SHIFT</kbd>+<kbd>`</kbd>
        6. Voer het onderstaande commando uit in de terminal:
        ```POWERSHELL
        git clone <link_naar_module_repository_op_je_eigen_account.git>
        ```
        7. Open nu de map die is aangemaakt door Git. Je kunt nu aan de slag met de code maar voor je dat doet moet je nog een handeling uitvoeren zodat je ook updates kunt ophalen vanuit de originele module repository.
        8. Ga terug naar de repository op Github, bovenaan staat de naam van repository met daaronder de regel: `forked from ROC-van-Amsterdam-College-Amstelland/module_naam. Klik op die link en copy/paste de repository url.
        9. Voer het onderstaande commando uit in de terminal:
        ```POWERSHELL
        git remote add upstream <link_naar_module_repository_op_ROC_account.git>
        ```
        10. Je kunt nu aan de slag en je code inleveren door gewoon te pushen zoals je gewend bent. Mocht een docent zeggen dat er updates zijn in een module waar je aan werkt dan kun die binnenhalen door in VS code bij het `Source Control` tabblad te kiezen voor `Pull from` > `Upstream` > `Upstream/Master`.";

        $tekst = "
        Je bent begonnen aan een nieuwe module, hieronder staat beschreven wat je moet doen om met deze module te kunnen werken in VS Code:

        1. Er is een fork (kopie) gemaakt van de module onder je eigen Github account. Ga naar Github en login
        dan zie je een nieuwe repository staan met de naam van deze Module.\n
        2. Open de repository en copy/paste de clone link (zoals je dat ook doet voor Classroom assignments)
        3. Als je nog geen map hebt aangemaakt voor al je werk maak deze dan aan. Noem deze map op4-eagle-modules.
        4. Om lokaal op je laptop te werken moet je eerste een clone maken. Open de op4-eagle-modules map in VS Code met File > Open Folder of CTRL+K CTRL+O
        5. Open de terminal met Terminal > New Terminal of CTRL+SHIFT+`

        6. Voer het onderstaande commando uit in de terminal:

            git clone <link_naar_module_repository_op_je_eigen_account.git>

        7. Open nu de map die is aangemaakt door Git. Je kunt nu aan de slag met de code maar voor je dat doet moet je nog een handeling uitvoeren
        zodat je ook updates kunt ophalen vanuit de originele module repository.
        8. Ga terug naar de repository op Github, bovenaan staat de naam van repository met daaronder de
        regel: `forked from ROC-van-Amsterdam-College-Amstelland/module_naam. Klik op die link en copy/paste de repository url.

        9. Voer het onderstaande commando uit in de terminal:

            git remote add upstream <link_naar_module_repository_op_ROC_account.git>

        10. Je kunt nu aan de slag en je code inleveren door gewoon te pushen zoals je gewend bent. Mocht een docent zeggen
        dat er updates zijn in een module waar je aan werkt dan kun die binnenhalen door in VS code bij het Source Control
        tabblad te kiezen voor Pull from > Upstream > Upstream/Master.";



        $converted_tekst = $this->converter->convertToHtml($tekst);

        $data = [
            'uitleg' => $converted_tekst
        ];


        return view('help.uitleg', $data);
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
                                "created_at" =>  \Carbon\Carbon::now('Europe/Amsterdam'), # new \Datetime()
                                "updated_at" => \Carbon\Carbon::now('Europe/Amsterdam'),  # new \Datetime()
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
