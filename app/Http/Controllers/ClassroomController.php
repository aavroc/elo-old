<?php

namespace App\Http\Controllers;

use App\Classroom;
use App\Level;
use App\User;
use App\Exercise;
use Illuminate\Http\Request;

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
     * @param  \App\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function show_levels(Classroom $classroom)
    {
        $levels = Level::all();
        $users  = User::where([['status_id', '!=', 0], ['role', 3], ['classroom', $classroom->name]])->get();

        // dd($exercises);

        $data = [
            'users'               => $users,
            'levels'              => $levels,
            'number_of_exercises' => Exercise::count()
        ];

        return view('classrooms.show', $data);
    }

    public function show_exercises(Classroom $classroom)
    {
        $users  = User::where([['status_id', '!=', 0], ['role', 3], ['classroom', $classroom->name]])->get();

        $exercises = Exercise::where('status', 1)->orderBy('level', 'asc')->get();

        $data = [
            'users'      => $users,
            'exercises'  => $exercises,

        ];

        return view('classrooms.show', $data);
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
