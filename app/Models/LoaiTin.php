<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoaiTin extends Model
{
    use HasFactory;
    protected $table ='LoaiTin';
    protected $filltable =[
        'thu_tu',
        'tieu_de',
        'tieu_de_khong_dau',
        'tom_tat',
        'theloai_id'
    ];
    public function theLoai(){
        return $this->belongsTo(Theloai::class);
    }
    public function tin(){
        return $this->hasMany(Tin::class, 'loaitin_id');
    }
}
