<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('foo',function (){
    return 'hello word ';
});

Route::get('nhi', function () {
    $a=1;
    $b=2;
    return "nhi "($a +$b );
});
Route::get('nhi/{id}',function($id){
    return 'User'.$id;$a=1;
    $b=2;
});
Route::get('posts/{post}/comments/{comment}',function($postID, $commentID){
    return"Post:".$postID. "comment:".$commentID;
});
Route::get('user/{name?}', function($name='NHi'){
    return $name;
});
Route::prefix('admin')->group(function(){
    Route::get('user',function(){
        return"Text group";
    });
});
