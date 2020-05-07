<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Indicator extends Model
{
    protected $table = 'skill_indicators';

    protected $fillable = [
        'name',
    ];

    public function skill()
    {
        return $this->belongsTo('App\Skill');
    }

    public function users()
    {
        return $this->hasMany('App\User');
    }

}
