<?php

namespace App\Http\Controllers;

use App\Challenge;
use App\Classroom;
use App\Module;
use App\Skill;
use App\User;
use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'classrooms' => Classroom::all()
        ];
        return view('classrooms.index', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function show(Classroom $classroom)
    {
        $modules = Module::all();
        $skills = Skill::all();
        $users  = User::where([['status_id', '!=', 0], ['role', 3], ['classroom', $classroom->name]])->get();
        

        // dd($exercises);

        $data = [
            'users'               => $users,
            'classroom'           => $classroom,
            'modules'             => $modules,
            'skills'             => $skills,
            'number_of_exercises' => Task::count()
        ];

        return view('classrooms.show', $data);
    }

    public function reset_levels(Classroom $classroom, Request $request)
    {
        $options = $request->basic_modules;
        

        $modules = Module::all();
        $challenges = Challenge::all();
       

        foreach($classroom->students as $student){//loop door alle studenten van deze klas
            foreach($modules as $module){//reset all modules per user
                
                if(in_array($module->id, $options)){
                    DB::table('users_modules')->updateOrInsert(
                        [
                            'user_id' => $student->id,
                            'module_id' => $module->id,
                        ],
                        [
                            
                            'status' => 1,
                        ]
                    );
                    //update basic_status of modules-table
                    Module::where('id', $module->id)->update(
                        ['basic_status' => 1]
    
                    );

                }else{
                    DB::table('users_modules')->updateOrInsert(
                        [
                            'user_id' => $student->id,
                            'module_id' => $module->id,
                            
                        ],
                        [
                            
                            'status' => 0,
                        ]
                    );

                    //update basic_status of modules-table
                    Module::where('id', $module->id)->update(
                        ['basic_status' => 0]
    
                    );
                }
            }

            foreach($challenges as $challenge){ //reset all challenges per user
                
                DB::table('users_challenges')->updateOrInsert(
                    [
                        'user_id' => $student->id,
                        'challenge_id' => $challenge->id,
                    ],
                    [
                        
                        'status' => 0,
                    ]
                );
            }
    

            
        }
        return redirect()->route('classrooms.show', $classroom);
    }

    public function reset_all_skills(Classroom $classroom)
    {
        $skills = Skill::all();
        
        foreach($classroom->students as $student){//loop door alle studenten van deze klas    
            foreach($skills as $skill){
                foreach($skill->indicators as $indicator){
                    DB::table('users_skills')->updateOrInsert(
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
        return redirect()->route('classrooms.show', $classroom);
    }
        
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Classroom $classroom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classroom $classroom)
    {
        //
    }
}
