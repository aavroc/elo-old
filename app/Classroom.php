<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    public function getRouteKeyName()
    {
        return 'name';
    }

    public function students()
    {
        return $this->hasMany('App\User', 'classroom', 'name');
    }
}
