<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Socialite\SocialiteServiceProvider;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
   protected  $table = 'users';
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    function socialProvider()
    {
        return $this->hasMany(SocialProvider::class);
    }
    
    function trips()
    {
        return $this->hasMany(Trip::class);
    }
}
