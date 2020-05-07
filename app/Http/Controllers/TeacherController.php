<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Module;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

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
        $this->getChartData();

        $users = User::where(
            [
                ['role', 3],
                ['github_nickname', '!=', NULL]

            ]
        )->get();

        $modules = Module::all();


        $data = [
            'users' => $users,

            'modules' => $modules,

        ];
        return view('dashboards.teacher', $data)->tasks;

    }

    public function getChartData(){
//        $tasks = User::where('role', 3)->groupBy('classroom', 'users');
        // $tasks = User::where('role', 3)::with('tasks');
        // $users = User::with('tasks')->get();
        // $users = DB::table('users')->groupBy('classroom')->get();
        // $users = user::has('tasks')->get();
        // $users = user::withCount('tasks')->get();
        // $users = User::withCount('tasks')->get();
        // $classrooms = $users->groupBy('classroom');
        // // // $count = $classrooms->sum('tasks_count');

        // foreach ($classrooms as $classroom) {

        //     echo $classroom->sum('tasks_count')."<br>";
        //     foreach($classroom as $user){
        //         // dd($user);
        //         // echo $user->sum('tasks_count');
        //         // echo $user->sum('tasks_count');

        //     }
        //     // dd($classroom);
        // }

        $users = User::withCount('tasks')->get();
        $grouped = $users->groupBy('classroom')->map(function($row){
            return $row->sum('tasks_count');
        });



        dd($grouped->toArray());



        // foreach ($classrooms as $classroom) {
        //     foreach($classroom as $user){
        //         dd($user['tasks_count']);
        //         // $total += $user->tasks_count;
        //     }
        // }
        // echo $total;

        // $collection = new Collection([
        //     ['year' => '2015', 'speakers' => 12],
        //     ['year' => '2014', 'speakers' => 21],
        //     ['year' => '2013', 'speakers' => 10]

        // ]);

        // $tasks = $users->groupBy('classroom');

        // $user_tasks_completed = DB::table('users')
        //     ->with('tasks')
        //     ->select('classroom', DB::raw('count(*) as total'))
        //     ->groupBy('classroom')
        //     ->get();

        // $users = User::withCount('tasks')
        // $classrooms = $users->groupBy('classroom');
        //     $tc = User::with('tasks')
        //         ->groupBy('classroom')
        //         ->get();
        //     $tcc = $tc->max('tasks_count');

        // dd($tc);


        // $users = User::groupBy('classroom')->get();
        // $tasks = $users->tasks->get();

        // foreach ($users->take(2) as $user) {
        //     $tasks -> $user->tasks()->get();
        //     dd($tasks);
        // }

//        $c = Classroom::find(1)->getNumberOfCompletedTasks;
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
