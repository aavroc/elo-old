<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Code;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function dashboard()
    {
        $data = [
            'logged_in_users' => User::where(
                [
                    ['status_id', 2],
                    ['role', 3],
                ]
            )->count(),

            'amount_of_seen_exercises'      => Code::where('student_status', 1)->count(),
            'amount_of_exercises_delivered' => Code::where('student_status', 2)->count(),
            'amount_of_approved_exercises'  => Code::where('student_status', 3)->count(),
            'assignments_to_be_appproved'   => Code::where('student_status', 2)->orderBy('delivery', 'asc')->limit(10)->get(),
        ];
        return view('dashboards.teacher', $data);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
