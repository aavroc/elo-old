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
}
