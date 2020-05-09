<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Module;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use App\Charts\completedTasks;

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

        $modules = Module::all();


        $data = [
            'users' => $users,

            'modules' => $modules,
            'chart' => $this->getChartDataTotalTasksDonePerClassroom(),

        ];

        return view('dashboards.teacher', $data);

    }

    public function getChartDataTotalTasksDonePerClassroom(){
        $users = User::withCount('tasks')->get();
        $classrooms = $users->groupBy('classroom');
        $grouped = $users->groupBy('classroom')->map(function($row){
            return $row->sum('tasks_count');
        });
        //remove users without a classroom value
        $grouped_filtered = $grouped->filter(function($value, $key){
            return $key !== "";
        });

        $arr_clasroom_names = array_keys($grouped_filtered->toArray());
        $arr_clasroom_totals = array_values($grouped_filtered->toArray());

        $data = [];

        $data['labels'] = $arr_clasroom_names;
        $data['datasets']['data'] = $arr_clasroom_totals;
        $data = json_encode($data);
        return $data;
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
