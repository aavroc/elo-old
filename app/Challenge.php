<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Challenge extends Model
{
    public function modules()
    {
        return $this->hasMany('App\Module');
    }
}
