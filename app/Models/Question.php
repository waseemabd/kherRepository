<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'desc',
        'image',
        'mark',
        'question_type_id',
        'test_id',
    ];
    public  const create_update_rules = [

        'desc' => 'required',
        'mark' => 'required',
        'question_type_id' => 'required',
        'test_id' => 'required',

    ];


    public function test()
    {
        return $this->belongsTo(Test::class,'test_id','id');

    }

    public function question_type()
    {
        return $this->belongsTo(Test::class,'question_type_id','id');

    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function options()
    {
        return $this->hasMany(Option::class);
    }
}
