<?php

namespace App;

use Ixudra\Curl\Facades\Curl;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;


class GitHub
{
    protected $owner;
    protected $user_agent;
    protected $token;


    public function __construct()
    {
        //get the settings from the github config file
        $this->owner      = config('github')['owner'];
        $this->user_agent = config('github')['user_agent'];
    }


    public function token()
    {
        // return session('user_token');
        return Auth::user()->github_access_token;
    }

    public function owner()
    {
        return $this->owner();
    }

    public function user_agent()
    {
        return $this->user_agent;
    }

    //get a user specific repo
    public function repo($repo = '', $type = 'public')
    {
        $url = 'https://api.github.com/repos/' . $this->owner . '/' . $repo; //retrieve specific repo
        return $this->get_request_json($url);
    }

    //get all organization repos
    public function repos_org($type = 'public')
    {
        $url = 'https://api.github.com/orgs/' . $this->owner . '/repos?type=' . $type; //get all pubic-private repositories
        return $this->get_request_json($url);
    }

    //get content of a specific repo
    public function get_contents($repo = '', $path = '')
    {
        $url = 'https://api.github.com/repos/' . $this->owner . '/' . $repo . '/contents/' . $path; //get contents
        return $this->get_request_json($url);
    }

    //get global readme file of a specific repo
    public function get_global_readme($repo = '')
    {
        $url = 'https://api.github.com/repos/' . $this->owner . '/' . $repo . '/readme'; // get readme.md
        return $this->get_request_json($url);
    }

    //get readme file specific location
    public function get_specific_readme($repo = '', $path)
    {

        $url = 'https://api.github.com/repos/' . $this->owner . '/' . $repo  . '/contents/' . $path . '/README.md'; // get readme.md
        return $this->get_request_json($url);
    }

    //get the data from a specific file
    public function list_commits($repo = '', $owner = null)
    {
        if ($owner == null) {
            $owner = $this->owner;
        }

        $url = 'https://api.github.com/repos/' . $owner . '/' . $repo . '/commits'; // get specific file data
        // dd($url);
        return $this->get_request_json($url);
    }


    public function fork($repo = '')
    {
        $url = 'https://api.github.com/repos/' . $this->owner . '/' . $repo . '/forks'; // fork this repo
        return $this->post_request($url);
    }


    public function post_request($url)
    {
        $response = Curl::to($url)
            ->withHeader("Authorization: token " . $this->token())
            ->withHeader("User-Agent: " . $this->user_agent)
            // ->asJson()
            ->post();
        return $response;
    }

    //handle the entire request
    public function get_request_json($url)
    {
        // $url = str_replace(' ', '%20', $url); //remove white space in the url

        $response = Curl::to($url)
            // ->withHeader("Authorization: token " . $this->token())
            ->withHeader("User-Agent: " . $this->user_agent)
            ->asJson()
            ->get();
        return $response;
    }
}
