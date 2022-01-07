<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diploma extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'desc',
    ];
    public  const create_update_rules = [

        'title' => 'required',
    ];


}
