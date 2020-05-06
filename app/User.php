<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Notifications\EigenResetWachtwoord as ResetPasswordNotification;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    public function code()
    {
        return $this->hasMany('App\Code');
    }

    public function session()
    {
        return $this->hasOne('App\Session');
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function modules()
    {
        return $this->belongsToMany('App\Module', 'users_modules')->withPivot('status');
    }

    public function modules_done()
    {
         return $this->belongsToMany('App\Module', 'users_modules')->wherePivot('status', '>' , 0);
    }

    public function classroom()
    {
         return $this->belongsTo('App\Classroom');
    }

    public function verzoeken()
    {
        return $this->hasMany('App\UsersRequest');
    }

    public function challenges()
    {
         return $this->belongsToMany('App\Challenge', 'users_challenges')->withPivot('status');
    }

    public function tasks()
    {
        return $this->belongsToMany('App\Task', 'users_tasks')->withPivot('evaluation')->withTimestamps();
    }

    public function skills()
    {
        return $this->belongsToMany('App\Skill', 'users_skills')->withPivot('level')->withPivot('interest')->withTimestamps();
    }
    
    public function tasks_done()
    {
        return $this->belongsToMany('App\Task', 'users_tasks')->withPivot('evaluation')->wherePivot('evaluation', '=', 1);
    }
}
