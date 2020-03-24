<?php

namespace App\Http\Controllers;

use App\Task;
use App\Module;
use App\Github;
use Illuminate\Http\Request;

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
        //
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
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $name = $request->repo;
        $path = $request->path;
        $repo = Module::where('name', $name)->first();
        $github = new GitHub();



        $data = [];
        if ($this->contains("README.md", $path)) {

            if ($path != null) {
                $readme = $github->get_specific_readme($repo->name, $path);
            } else {
                $readme = $github->get_global_readme($repo->name);
            }
            $readme_content = base64_decode($readme->content);

            $data['readme_content'] = $this->converter->convertToHtml($readme_content);
            $data['repo'] =  $repo->name;
        } 

        return view('tasks.show', $data);
    }

    // returns true if $needle is a substring of $haystack
    protected function contains($needle, $haystack)
    {
        return strpos($haystack, $needle) !== false;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        //
    }
}
