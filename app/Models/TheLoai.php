<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TheLoai extends Model
{
    use HasFactory;
    protected $table ='TheLoai';
    protected $filltable =[
        'thu_tu',
        'tieu_de',
        'tieu_de_khong_dau',
        'tom_tat',
    ];

}
