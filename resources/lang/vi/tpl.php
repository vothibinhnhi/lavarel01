<?php

use App\Models\Category;
use Carbon\Language;
use SebastianBergmann\Template\Template;

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */
    
    'failed' => 'These credentials do not match our records.',
    'password' => 'The provided password is incorrect.',
    'throttle' => 'Too many login attempts. Please try again in :seconds seconds.',
    
    /* Language for Template category */
    'category.index.tt' => 'Danh sach the loai ',
    'category.index.name' => 'Tên Thể Loại ',
    'category.index.exit' => 'Tùy Chỉnh',
    'category.index.delete' => 'Xóa',
    /*Language for Template TheLoai
    */
    'TheLoai.index.title' => 'List Category',
    'TheLoai.index.title' => 'List Category',
    'TheLoai.index.title' => 'List Category',

];
