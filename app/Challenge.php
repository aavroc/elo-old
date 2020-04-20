<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Challenge extends Model
{

    public function getRouteKeyName()
    {
        return 'slug';
    }

    
    public function modules()
    {
        return $this->belongsToMany('App\Module', 'challenges_modules');
    }

    public function users()
    {
         return $this->belongsToMany('App\User', 'users_challenges')->withPivot('status');
    }
}
