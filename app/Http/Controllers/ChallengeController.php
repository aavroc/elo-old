<?php

namespace App\Http\Controllers;

use App\Challenge;
use App\Module;
use Illuminate\Http\Request;
use League\CommonMark\GithubFlavoredMarkdownConverter;

class ChallengeController extends Controller
{

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
        $challenges = Challenge::all();

        $data  =[
            'challenges' => $challenges,
            // 'user' => Auth::user(),
        ];
        return view('challenges.index', $data);
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
     * @param  \App\Challenge  $challenge
     * @return \Illuminate\Http\Response
     */
    public function show(Challenge $challenge)
    {
        $readme_ = $challenge->readme;
        $readme_content = base64_decode($readme_);

        $data = [
            'challenge' => $challenge,
            'modules'   => Module::all(),
            'readme_content' => $this->converter->convertToHtml($readme_content),
            
        ];
        return view('challenges.show', $data);
    }

    public function link_modules(Challenge $challenge, Request $request)
    {   
        $challenge->modules()->sync($request->modules);

        return redirect()->route('challenges.index', $challenge);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Challenge  $challenge
     * @return \Illuminate\Http\Response
     */
    public function edit(Challenge $challenge)
    {
        $data = [
            'challenge' => $challenge,
            'modules'   => Module::all()
        ];
        return view('challenges.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Challenge  $challenge
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Challenge $challenge)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Challenge  $challenge
     * @return \Illuminate\Http\Response
     */
    public function destroy(Challenge $challenge)
    {
        //
    }
}
