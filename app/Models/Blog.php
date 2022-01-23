<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'desc',
        'image',
        'user_id',
    ];
    public  const create_update_rules = [


        'title' => 'required',
        'desc' => 'required',
        'user_id' => 'required',

    ];


    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
