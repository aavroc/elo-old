<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function module()
    {
        return $this->belongsTo('App\Module');
    }
}
