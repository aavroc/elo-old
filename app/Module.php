<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function tasks()
    {
        return $this->hasMany('App\Task');
    }

    public function users()
    {
        return $this->belongsToMany('App\User', 'users_modules')->withPivot('status')->withTimestamps();
    }

    public function challenge()
    {
        return $this->belongsToMany('App\Challenge', 'challenges_modules');
    }
}
