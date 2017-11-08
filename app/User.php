<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'admin', 'supervisor', 'approved'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function profile()
    {
        return $this->hasOne('App\Profile');
    }

    public function momobank()
    {
        return $this->hasOne('App\Momobank');
    }

    public function appreciated()
    {
        return $this->hasMany('App\Appreciation', 'appreciating_user', 'id');   
    }

    public function appreciatedBy()
    {
        return $this->hasMany('App\Appreciation', 'appreciated_user', 'id');
    }

}
