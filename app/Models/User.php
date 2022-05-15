<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    //The attributes that are mass assignable.
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    //The attributes that should be hidden for serialization.
    protected $hidden = [
        'password',
        'remember_token',
    ];

    //The attributes that should be cast.
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function posts()
    {
        return $this->hasMany('App\Models\Post');
    }
    
    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }

}
