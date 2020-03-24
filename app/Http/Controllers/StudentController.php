<?php

namespace App\Http\Controllers;

use App\Exercise;
use Illuminate\Http\Request;

use App\Level;
use App\User;
use App\Code;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{

    public function dashboard()
    {
        $data = [
            'levels' => Level::all(),
            'user'   => Auth::user(),

        ];
        return view('dashboards.student', $data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $levels = Level::all();
        $users  = User::where('role', 3)->get();
        $exercises = Exercise::all();

        // dd($exercises);

        $data = [
            'users'               => $users,
            'levels'              => $levels,
            'number_of_exercises' => Exercise::count()
        ];
        return view('users.index', $data);
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
    public function show(User $student)
    {
        $exercises     = $student->exercises;
        $all_exercises = Exercise::all();
        $all_levels    = Level::all();

        $data = [
            'exercises'     => $exercises,
            'user'          => $student,
            'all_exercises' => $all_exercises,
            'all_levels'    => $all_levels,
        ];
        return view('users.show', $data);
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

    public function update_level(Request $request)
    {
        User::where('id', $request->student)->update(['level_id' => $request->level]);

        $msg = "The level of user with id " . $request->student . " has been changed to level " . $request->level;
        return response()->json(array('msg' => $msg, 'level' => $request->level), 200);
    }

    public function check_assignment_status(Request $request)
    {
        $user = Auth::user();
        $code = Code::where('user_id', $user->id)->latest('updated_at')->first();

        //als de data van een van de kolommen gelijk is aan de updated tijd dan heeft een docent iets gedaan....en dus een oordeel geveld
        if ($code->denied == $code->updated_at || $code->approved == $code->updated_at) {
            $msg = '<span class="nav-link">De opdracht <a href="' . route('exercises.code', $code->exercise_id) . '" class="text-info">' . $code->exercise->name . '</a> is beoordeeld!. Check it</span>';
            return response()->json(array('msg' => $msg), 200);
        }
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
