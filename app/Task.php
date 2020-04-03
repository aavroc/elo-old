<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function module()
    {
        return $this->belongsTo('App\Module');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag', 'tasks_tags');
    }
}
