<?php

namespace App\Http\Controllers;

use App\Module;
use App\GitHub;
use Illuminate\Http\Request;

use League\CommonMark\GithubFlavoredMarkdownConverter;

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
    public function show(Request $request)
    {

        $name = $request->repo;
        $path = $request->path;

        $repo = Module::where('name', $name)->first();
        $github = new GitHub();

        $data = [];

        if ($path != null) {
            $readme = $github->get_specific_readme($repo->name, $path);
        } else {
            $readme = $github->get_global_readme($repo->name);
        }
        
        if (isset($readme->message)) {
            if ($readme->message == "Bad credentials") {
                die('please connect with GitHub');
            }
            if ($readme->message == "Not Found") {
                die('no readme file found');
            }
        }
        $readme_content = base64_decode($readme->content);
        // dd($readme);

        $data['readme_content'] = $this->converter->convertToHtml($readme_content);
        $data['full_repo_data'] = $github->get_contents($repo->name, $path);
        $data['repo'] = $repo->name;

        return view('modules.show', $data);
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function edit(Module $module)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Module $module)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function destroy(Module $module)
    {
        //
    }
}
