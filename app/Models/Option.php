<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;

    protected $fillable = [
        'desc',
        'test_id',
    ];


    public  const create_update_rules = [

        'desc' => 'required',
        'test_id' => 'required',

    ];

    public function question()
    {
        return $this->belongsTo(Question::class,'question_id','id');

    }



}
