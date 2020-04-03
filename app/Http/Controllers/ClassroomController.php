<?php

namespace App\Http\Controllers;

use App\Classroom;
use App\Module;
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
        $users  = User::where([['status_id', '!=', 0], ['role', 3], ['classroom', $classroom->name]])->get();

        // dd($exercises);

        $data = [
            'users'               => $users,
            'classroom'           => $classroom,
            'modules'             => $modules,
            'number_of_exercises' => Task::count()
        ];

        return view('classrooms.show', $data);
    }

    public function reset_levels(Classroom $classroom, Request $request)
    {
        $options = $request->basic_modules;
        // dd($options);

        $modules = Module::all();
        DB::table('users_modules')->truncate();
        foreach($classroom->students as $student){
            foreach($modules as $module){
                if(in_array($module->id, $options)){
                    DB::table('users_modules')->insert(
                        [
                            'user_id' => $student->id,
                            'module_id' => $module->id,
                            'status' => 1,
                        ],
                    );
                    //update basic_status of modules-table
                    Module::where('id', $module->id)->update(
                        ['basic_status' => 1]
    
                    );

                }else{
                    DB::table('users_modules')->insert(
                        [
                            'user_id' => $student->id,
                            'module_id' => $module->id,
                            'status' => 0,
                        ],
                    );

                    //update basic_status of modules-table
                    Module::where('id', $module->id)->update(
                        ['basic_status' => 0]
    
                    );
                }

               
                
                    
            }
            
            
        }
        return redirect()->route('classrooms.show', $classroom);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function edit(Classroom $classroom)
    {
        //
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
