<?php

namespace App\Http\Controllers;

use App\Classroom;
use App\Indicator;
use Illuminate\Support\Facades\DB;
use App\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills = Skill::all();
        $data = [
            'skills' => $skills
        ];

        return view('skills.index', $data);
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $skill = new Skill();
        $skill->name = $request->skill;
        $skill->save();

        for($x = 0 ; $x < 4; $x++){
            $ind = new Indicator();
            $skill->indicators()->save($ind);

        }
        $classrooms = Classroom::all();
        foreach ($classrooms as $classroom) {
            # code...
        
            foreach($classroom->students as $student){
                foreach($skill->indicators as $indicator){
                    DB::table('users_skills')->updateOrInsert( //save skill and its indicators to the user
                        [
                            'user_id' => $student->id,
                            'skill_id' => $skill->id,
                            'indicator_id' => $indicator->id,
                        ],
                        [
                            'docent' => 0,
                            'student' => 0
                        ]
                    );
                }
            }
        }


        return redirect()->route('skills.index');
    }

    public function delete(Skill $skill)
    {
        if (DB::table('users_skills')->where('skill_id', $skill->id)->exists()) {
            return redirect()->route('skills.index')->with('status', strtoupper($skill->name));
        }
        $skill->delete();
        return redirect()->route('skills.index');
    }

  
    public function student_index()
    {
        $user = Auth::user();

        $data = [
            'skills' => $user->skills,
            'user'   => $user
        ];

        return view('skills.student_index', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function edit(Skill $skill)
    {
        $data = [
            'skill' => $skill,
            'indicators' => $skill->indicators,
        ];
        return view('skills.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Skill $skill)
    {
        $request->validate([
            'vaardigheid' => 'required'
        ]);
        $skill->name =  $request->vaardigheid;
        $skill->save();

        foreach($request->ind as $ind_id => $name){
            if($name == NULL){
                $name = '';
            }
                $skill->indicators()->where('id', $ind_id)->update(
                    [
                        'name' => $name
                        ]
                    );

        }

        return redirect()->route('skills.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skill $skill)
    {
        //
    }
}
