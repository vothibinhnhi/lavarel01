<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tin extends Model
{
    use HasFactory;
    protected $table ='Tin';
    protected $filltable =[
        'thu_tu',
        'the_loai',
        'loai_tin',
    ];
}
