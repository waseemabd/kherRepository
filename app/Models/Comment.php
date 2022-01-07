<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'desc',
        'student_id',
        'user_id',
    ];
    public  const create_update_rules = [


        'desc' => 'required',

    ];

    public function student()
    {
        return $this->belongsTo(Student::class,'student_id','id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }


}
