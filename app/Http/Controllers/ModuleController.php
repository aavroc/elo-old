<?php

namespace App\Http\Controllers;

use App\Module;
use App\GitHub;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use League\CommonMark\GithubFlavoredMarkdownConverter;
use App\Task;
class ModuleController extends Controller
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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'modules' => Module::all()
        ];
        return view('modules.index', $data);
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
     * @param  \App\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function show( Module $module)
    {
        if(Auth::user()->role == 3){
            $this->check_repo($module); //if the user is a student, fork the repo to the students github account
        }
        
        $readme_content = base64_decode($module->readme);

        $data = [
            'readme_content' => $this->converter->convertToHtml($readme_content),
            'module' => $module,
            'user' => Auth::user(),
            'modules' => Module::all(),

        ];
        
        return view('modules.show', $data);
    }

    public function show_teacher( Module $module)
    {

        
        $data = [
            'module' => $module,
            'modules' => Module::all(),
            
        ]; 
        
        if(Auth::user()->role <= 2){
            return view('modules.show-teacher', $data);
        }
    }

    public function eindopdracht(Module $module)
    {
        $github = new GitHub();
        $opdracht = $github->get_specific_readme($module->slug,'opdracht');
        
        // dd($opdracht);
        if(isset($opdracht->message)){
            $readme_content = 'Deze opdracht moet nog gemaakt worden.';
        }else{
            $readme_content = base64_decode($opdracht->content);
        }


        $data = [
            'module' => $module,
            'readme_content' => $this->converter->convertToHtml($readme_content),
        ];
        return view('modules.show-end', $data);
    }

    //if the user is a student, fork the repo to the students github account
    public function check_repo(Module $module)
    {
        $github = new GitHub();
        
            $repo = $github->repo($module->slug, Auth::user()->github_nickname);
            if(isset($repo->message)){
                $github->fork($module->slug);
            }
    }


    public function retrieve_tasks_per_module(Module $module, Request $request){

        if($request->deleteAll == 1){
            foreach($module->tasks as $task){
                $task->users()->detach();
                $task->tags()->detach();
            }
            Task::where('module_id', $module->id)->delete();
        }

        $github = new GitHub();
        $toplevel = $github->get_contents($module->slug);
        $tasksdirectories = [];
        foreach($toplevel as $directories){
            if($directories->type == "dir"){
                $tasksdirectories[$directories->path] = $github->get_contents($module->slug, $directories->path);
            }
        }
        // dump($tasksdirectories);
        foreach($tasksdirectories as $dir => $tasks){
            foreach($tasks as $task){
                if($task->type == "dir"){
                    if (strpos($task->name, 'taak') !== false) {
                        Task::updateOrInsert( //insert task....or... update it.
                                [
                                        'name' => $task->name,
                                        'module_id' => $module->id,
                                        'level'  => $dir,
                                    ],
                                    [
                                            'readme' => $github->get_specific_readme($module->slug, $task->path)->content,
                                            'url' => $task->html_url,
                                            'status' => 1,
                                            'points' => 3,
                                            ]
                                        );
                                }
                }
            }
            // dd();
        }
        
        return redirect()->route('modules.show_teacher', $module);
    }

}
