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

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'roles',
        'status',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public  const create_update_rules = [

        'name' => 'required',
        'email' => 'required|unique:users',
        'password' => 'required',
        'role' => 'required',

    ];


    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'course_users','user_id', 'course_id');
    }

    public function homeworks()
    {
        return $this->hasMany(Homework::class);
    }

    public function tests()
    {
        return $this->hasMany(Test::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }

}
