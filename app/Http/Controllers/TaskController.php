<?php

namespace App\Http\Controllers;

use App\Task;
use App\Tag;
use App\Module;
use App\User;
use App\Github;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use League\CommonMark\GithubFlavoredMarkdownConverter;

class TaskController extends Controller
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
        $tasks = Task::orderBy('module_id')->orderBy('level', 'asc')->orderBy('name', 'asc')->get();

        $data = [
            'tasks' => $tasks
        ];

        return view('tasks.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        $tags = Tag::all();

        $readme_content = base64_decode($task->readme);
        $data['readme_content'] = $this->converter->convertToHtml($readme_content);
        $data['tags'] = $tags;
        $data['task'] = $task;


        return view('tasks.show', $data);
    }

    public function tag(Request $request, Task $task)
    {
        $task->tags()->sync($request->tags);
        return redirect()->route('tasks.show', ['task' => $task ]);
    }

    // returns true if $needle is a substring of $haystack
    protected function contains($needle, $haystack)
    {
        return strpos($haystack, $needle) !== false;
    }

    //student kan taak markeren als voldaan
    public function mark(Task $task, Request $request)
    {
        $user = Auth::user();
        $user->tasks()->detach($task->id); //voldaan
        if($request->taak_status == 1){ // 1 = taak voldaan 
            $user->tasks()->attach([$task->id => ['evaluation' => 1]]); //voldaan

        }elseif($request->taak_status == 0){
            $user->tasks()->attach([$task->id => ['evaluation' => 0]]); //voldaan
        }
        return redirect()->route('tasks.show', $task);
    }
}
