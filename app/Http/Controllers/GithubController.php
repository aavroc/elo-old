<?php

namespace App\Http\Controllers;

use Socialite;

use Illuminate\Http\Request;

use App\Module;
use App\GitHub;
use App\User;
use Illuminate\Support\Facades\Auth;

class GithubController extends Controller
{

    public function redirectToProvider()
    {
        // return Socialite::driver('github')->scopes('repo')->redirect(); //include private repo's
        return Socialite::driver('github')->scopes('public_repo')->redirect(); //access to public repo's
    }

    /**
     * Obtain the user information from GitHub.
     *
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('github')->user();
        session(['user_token' => $user->token]);
        User::where('id', Auth::user()->id)->update(['github_access_token' =>  $user->token]);

        if (Auth::user()->role == 3) {
            return redirect()->route('student');
        }
        return redirect()->route('github.index');
    }

    public function index()
    {
        $data = [
            'modules' => Module::all()
        ];
        return view('github.index', $data);
    }

    public function show(Request $request)
    {
        $name = $request->repo;
        $path = $request->path;

        $repo = Module::where('name', $name)->first();

        $github = new GitHub();

        $data = [
            'full_repo_data' => $github->get_contents($repo->name, $path),
            'readme' => $github->get_contents($repo->name),
            'repo' => $repo->name,
        ];

        return view('github.show', $data);
    }

    public function edit(Request $request)
    {
        $path = $request->path;
        $repo = $request->repo;

        $github = new GitHub();
        $file_data = $github->get_file_data($repo, $path);
        $content = base64_decode($file_data->content);
        $commitMessage = "Updated file " . $file_data->name;

        $data = [
            'file' => $file_data,
            'path' => $path,
            'repo' => $repo,
            'content' => $content,
            'commitMessage' => $commitMessage
        ];

        return view('github.edit', $data);
    }

    public function fork(Request $request)
    {
        $name = $request->repo;
        $path = $request->path;

        $repo = Level::where('name', $name)->first();

        $github = new GitHub();


        $github->fork($repo->name, $path);
        return view('github');
    }

    // public function set(Request $request)
    // {
    //     $token = session('user_token');

    //     $post_params = [
    //         'name' => $request->name
    //     ];

    //     $url = 'https://api.github.com/user/repos';
    //     $user_agent = "Deepdive 2.0";
    //     $response = Curl::to($url)
    //         ->withData($post_params)
    //         ->withHeader("Authorization: token " . $token)
    //         ->withHeader("User-Agent: " . $user_agent)
    //         ->asJson()
    //         ->post();


    //     dd($response);
    // }

    // public function get()
    // {
    //     $token = session('user_token');
    //     $repo = 'PHP-BASIC';
    //     $owner = 'ROC-van-Amsterdam-College-Amstelland';
    //     $url = 'https://api.github.com/repos/' . $owner . '/' . $repo;
    //     // $url = 'https://api.github.com/orgs/'.$owner . '/repos?type=public';
    //     $user_agent = "Deepdive 2.0";
    //     $response = Curl::to($url)
    //         ->withHeader("Authorization: token " . $token)
    //         ->withHeader("User-Agent: " . $user_agent)
    //         ->asJson()
    //         ->get();


    //     dd($response);
    // }
}
