<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TheLoai extends Model
{
    use HasFactory;
    protected $table ='TheLoai';
    protected $fillable =[
        'thu_tu',
        'tieu_de',
        'tieu_de_khong_dau',
        'tom_tat',
    ];
     public function loaiTin(){
         return $this->hasMany(LoaiTin::class, 'theloai_id');
     }
}
