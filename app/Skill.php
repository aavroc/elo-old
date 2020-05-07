<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = [
        'name',
    ];


    public function users()
    {
        return $this->belongsToMany('App\User', 'users_skills')->withTimestamps();
    }

    public function indicators()
    {
        return $this->hasMany('App\Indicator');
    }
}
