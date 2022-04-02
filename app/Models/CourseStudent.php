<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseStudent extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'student_id',
        'rating'
    ];


    public function course()
    {
        return $this->belongsTo(Course::class,'course_id','id');

    }

    public function student()
    {
        return $this->belongsTo(Student::class,'student_id','id');

    }
}
