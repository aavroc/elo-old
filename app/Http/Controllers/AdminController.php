<?php

namespace App\Http\Controllers;

use App\Classroom;
use App\User;
use Carbon\Carbon;

use Illuminate\Http\Request;
use App\Traits\UploadTrait;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    use UploadTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function dashboard()
    {

        $data = [
        ];
        return view('dashboards.admin', $data);
    }

    public function index()
    {
        $data = [
            'users' => User::all()

        ];
        //show all users
        return view('users.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->studentnr = $request->studentnr;
        $user->firstname = $request->firstname;
        $user->prefix = $request->prefix;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->role = $request->type_gebruiker;

        $user->save();
        return redirect()->route('users.edit', $user);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $exercises     = $user->exercises;
        $all_exercises = Exercise::all();
        $all_levels    = Level::all();

        $data = [
            'exercises'     => $exercises,
            'user'          => $user,
            'all_exercises' => $all_exercises,
            'all_levels'    => $all_levels,
            'classrooms' => Classroom::all()
        ];

        // $data = [
        //     'user' => $user,

        // ];
        //show all users
        return view('users.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, User $user)
    {

        $data = [
            'user' => $user,
            'classrooms' => Classroom::all()
        ];
        return view('users.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([ //validate name and the image
            'firstname'   =>  'required',
            'lastname'   =>  'required',
            'email'  =>  'required',
            'status' =>  'required',
            'type_gebruiker' =>  'required',
        ]);

        $user->firstname = $request->firstname;
        $user->prefix = $request->prefix;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->classroom = $request->classroom;
        $user->status_id = $request->status;
        $user->role = $request->type_gebruiker;
        $user->save();

        $data = [
            'user' => $user
        ];

        return redirect()->route('users.edit', $user);
    }

    public function select_file()
    {
        $data = [
            'classrooms' => Classroom::all()
        ];
        return view('users.upload', $data);
    }

    public function upload_data(Request $request)
    {
        if ($request->has('file_upload')) {
            $file = $this->uploadFile($request);
            if (($handle = fopen(public_path() . '/storage/' . $file, 'r')) !== FALSE) {
                while (($data = fgetcsv($handle, 1000, ';')) !== FALSE) {
                    // dd($data);

                    $csv_data = new Csvdata();
                    $csv_data->studentnr = $data[0];
                    $csv_data->firstname = $data[1];
                    $csv_data->prefix = $data[2];
                    $csv_data->lastname = $data[3];
                    $csv_data->email = $data[4];
                    $csv_data->classroom = $request->classroom;
                    $csv_data->save();
                }
                fclose($handle);
            }
        }
        return redirect()->route('users.index');
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

    public function change_password()
    {
    }

    protected function uploadFile(Request $request)
    {

        //if link is not working create a symbolik link: see documentation !!!

        // Check if a profile image has been uploaded
        if ($request->has('file_upload')) {
            // Get image file
            $file = $request->file('file_upload');
            // Make a image name based on user name and current timestamp
            $name = Str::slug($request->input('name')) . '_' . time();
            // Define folder path
            $folder = '/uploads/csv/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name . '.' . $file->getClientOriginalExtension();
            // Upload image
            $this->uploadOne($file, $folder, 'public', $name);
            // Set user profile image path in database to filePath
            return $filePath;
        }
        //if no image is selected use the current image
        return $file;
    }
}
