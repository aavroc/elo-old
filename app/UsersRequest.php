<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersRequest extends Model
{
    protected $table = 'users_request';

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}

