<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_en',
        'name_ar',
        'username',
        'email',
        'password',
        'is_confirmed',
        'status',
        'certificate_id'
    ];
    public  const create_update_rules = [

        'name_en' => 'required',
        'name_ar' => 'required',
        'username'=> 'required|unique:students',
        'email'=> 'required|unique:students',
        'password'=> 'required',
        'certificate_id'=> 'required',
    ];

    public function certificate()
    {
        return $this->belongsTo(Certificate::class,'certificate_id','id');

    }

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'course_users','student_id', 'course_id');
    }

    public function lectures()
    {
        return $this->belongsToMany(Lecture::class, 'lecture_students','student_id', 'lecture_id');
    }

    public function homeworks()
    {
        return $this->belongsToMany(Homework::class, 'homework_students','student_id', 'homework_id');
    }

    public function studentFiles()
    {
        return $this->hasMany(StudentFile::class);
    }

    public function tests()
    {
        return $this->belongsToMany(Test::class, 'student_tests','student_id', 'test_id');
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function progress()
    {
        return $this->hasMany(Progress::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }
}
