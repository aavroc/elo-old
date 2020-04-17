<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Challenge extends Model
{
    public function modules()
    {
        return $this->hasMany('App\Module');
    }

    public function users()
    {
         return $this->belongsToMany('App\User', 'users_challenges')->withPivot('status');
    }
}
