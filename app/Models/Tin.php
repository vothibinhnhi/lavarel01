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
        'tieu_de',
        'noi_dung',
        'loaitin_id'
    ];
    public function loaitin(){
        return $this->belongsTo(LoaiTin::class);
    }
}
