<?php

namespace App;

use Ixudra\Curl\Facades\Curl;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Module;

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
    public function repo($repo = '', $owner = null)
    {
        if ($owner == null) {
            $owner = $this->owner;
        }

        $url = 'https://api.github.com/repos/' . $owner . '/' . $repo; //retrieve specific repo
        return $this->get_request_json($url);
    }

    //get all organization repos
    public function repos_org($type = 'public')
    {
        $url = 'https://api.github.com/orgs/' . $this->owner . '/repos?type=' . $type; //get all pubic-private repositories
        return $this->get_request_json($url);
    }

    //get content of a specific repo
    public function get_contents($repo = '', $path = '', $owner = null, $raw = FALSE)
    {

        if ($owner == null) {
            $owner = $this->owner;
        }

        $url = 'https://api.github.com/repos/' . $owner . '/' . $repo . '/contents/' . $path; //get contents
        return $this->get_request_json_secured($url, $raw);
    }

    //get global readme file of a specific repo
    public function get_global_readme($repo = '')
    {
        $url = 'https://api.github.com/repos/' . $this->owner . '/' . $repo . '/readme'; // get readme.md
        return $this->get_request_json_secured($url);
    }

    //get readme file specific location
    public function get_specific_readme($repo = '', $path)
    {

        $url = 'https://api.github.com/repos/' . $this->owner . '/' . $repo  . '/contents/' . $path . '/README.md'; // get readme.md
        return $this->get_request_json_secured($url);
    }

    //show all commits of specific repo
    public function list_commits($repo = '', $owner = null)
    {
        if ($owner == null) {
            $owner = $this->owner;
        }

        $url = 'https://api.github.com/repos/' . $owner . '/' . $repo . '/commits';
        return $this->get_request_json($url);
    }

    //show all commits of specific path
    public function list_commits_path($repo = '', $owner = null, $path = '')
    {
        if ($owner == null) {
            $owner = $this->owner;
        }

        if ($path != '') {
            $path = '?path=' . $path;
        }

        $url = 'https://api.github.com/repos/' . $owner . '/' . $repo . '/commits' . $path;

        return $this->get_request_json_secured($url);
    }

    public function list_repo_events($repo = '', $owner = null)
    {
        if ($owner == null) {
            $owner = $this->owner;
        }

        $url = 'https://api.github.com/repos/' . $owner . '/' . $repo . '/events';
        return $this->get_request_json_secured($url);
    }

    public function get_single_commit($repo = '', $owner = null, $ref = '')
    {
        if ($owner == null) {
            $owner = $this->owner;
        }

        $url = 'https://api.github.com/repos/' . $owner . '/' . $repo . '/commits/' . $ref;
        return $this->get_request_json_secured($url);
    }


    //show user specific commits of specific repo
    public function list_user_commits($repo = '', $owner = null, $author = '', $since = null)
    {
        if ($owner == null) {
            $owner = $this->owner;
        }

        if ($author != '') {
            $author = '?author=' . $author;
        }

        $url = 'https://api.github.com/repos/' . $owner . '/' . $repo . '/commits' . $author . $since;
        return $this->get_request_json_secured($url);
    }

    public function get_last_year_commit_activity($repo = '', $owner = null)
    {
        if ($owner == null) {
            $owner = $this->owner;
        }

        $url = 'https://api.github.com/repos/' . $owner . '/' . $repo . '/stats/commit_activity';
        return $this->get_request_json_secured($url);
    }

    public function get_user_events($user = null)
    {
        if ($user == null) {
            $user = $this->owner;
        }

        $url = 'https://api.github.com/users/' . $user . '/events';
        return $this->get_request_json_secured($url);
    }

    public function get_user_repo_events($user = null, $repo = '' )
    {
        if ($user == null) {
            $user = $this->owner;
        }

        $url = 'https://api.github.com/users/' . $user .'/'. $repo . '/events';
        return $this->get_request_json_secured($url);
    }

  
    public function fork($repo = '')
    {
        $url = 'https://api.github.com/repos/' . $this->owner . '/' . $repo . '/forks'; // fork this repo
        return $this->post_request($url);
    }

    

    public function retrieve_tasks(){
        $modules = Module::all();
        //retrieve github repo content
        $niveaus = ['niveau1', 'niveau2', 'niveau3'];

        $data_generated = [];
        foreach ($modules as $module) {
            foreach($niveaus as $niveau){
                $data_generated[$module->id][$niveau] = $this->get_contents($module->slug, $niveau);
            }
        }
        //store all tasks
        if (is_array($data_generated)) {
            foreach($data_generated as $module_id => $module_content){
                if (is_array($module_content)) {
                    foreach ($module_content as $niveau => $data) {
                        $module_slug = Module::find($module_id)->slug;
                        foreach($data as $content){
                            if (property_exists($content, 'type')) {
                                if ($content->type == 'dir') {
                                    // dd($data);
                                    if (property_exists($content, 'path')) {
                                        Task::updateOrInsert(
                                            [
                                                'name' => $content->name,
                                                'module_id' => $module_id,
                                                'level'  => $niveau,
                                            ],
                                            [
                                                'readme' => $this->get_specific_readme($module_slug, $content->path)->content,
                                                'url' => $content->html_url,
                                                'status' => 1,
                                                'points' => 3,
                                                ]
                                            );
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
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
    public function get_request_json_secured($url, $raw = FALSE)
    {
        // $url = str_replace(' ', '%20', $url); //remove white space in the url

        if ($raw == TRUE) {
            $response = Curl::to($url)
                ->withHeader("Accept: application/vnd.github.v3.raw+json")
                ->withHeader("Authorization: token " . $this->token())
                ->withHeader("User-Agent: " . $this->user_agent)
                // ->asJson()
                ->get();
        } else {
            $response = Curl::to($url)
                ->withHeader("Authorization: token " . $this->token())
                ->withHeader("User-Agent: " . $this->user_agent)
                ->asJson()
                ->get();
        }


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
