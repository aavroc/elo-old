<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Module;
use App\UsersRequest;

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
        $users = User::where(
            [
                ['role', 3],
                ['github_nickname', '!=', NULL]

            ]
        )->get();

        $requests = UsersRequest::where('status', '<=' ,  3)->with('task')->orderBy('updated_at')->get();
        $taken_requests = UsersRequest::where('type', '=' , 1)->where(
                [
                    ['status', '!=' , 4],
                ]
                )->with('task')->get();

        
        
        $usernameByID = User::pluck('lastname', 'id');
        $task_requests = $requests->pluck('task');
        $counted_tasks = $taken_requests->pluck('task_id')->countBy()->toArray();
        $modules = Module::all();
                // dd($usernameByID );
        // dd($taken_requests);
        $data = [
            'users' => $users,
            'modules' => $modules,
            'requests' => $requests,
            'usernameByID' => $usernameByID,
            'task_requests' => $task_requests,
            'counted_tasks' => $counted_tasks,
            'taken_requests' => $taken_requests,
            // 'results' => $this->calculateChallengeResults(),

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
