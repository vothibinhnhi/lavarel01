
<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Models\TheLoai;

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
Route::get('foo',function(){
    $a=10;
    $b=8;
    return $a. '+' .$b. '='.($a + $b);
});
Route::get('User/{age}',function($age){
    return 'Tuoi' .$age;
})->middleware('checkage');
Route::get('user/{name?}',function ($name = 'PhungVanTan')
{
    return $name;
});
Route::get('posts/{post}/comments/{comment}', function($postID, $commentID){
    return 'Post: '.$postID. '<br>'.' Comment: '.$commentID;
});
// Route::prefix('Admin')->group(function(){
//     Route::get('User/{id}',function($id){
//         return 'User'.$id;
//     }
// });

/**
 * Route for The Loai
 */
// Index URI: theloais
//Index page
Route::get('/category', function(){
    $catList = Theloai::all();
    return view('category.index', ['catList' => $catList]);
})->name('category.index');

 //Page create
 Route::get('/category/create', function(){
    return view('category.create');
})->name('category.create');

 //Action store
 Route::post('/category/store', function(Request $request){
    Theloai::create($request->all());
    return redirect()->route('category.index');
})->name('category.store');

 //Page show
 Route::get('/category/{id}', function($id){
    $cat = Theloai::find($id);
    return view('category.show', ['cat' => $cat]);
})->name('category.show');

 //Page edit
 Route::get('/category/{id}/edit', function($id){
    $cat = Theloai::find($id);
    return view('category.edit', ['cat' => $cat]);
})->name('category.edit');

 //Action update
 Route::put('/category/{id}', function(Request $request, $id){
    $cat = Theloai::find($id);
    $cat->update($request->all());
    return redirect()->route('category.index');
})->name('category.update');


 //Action delete
 Route::delete('/category/{id}', function($id){
    Theloai::destroy($id);
    return redirect()->route('category.index');
})->name('category.destroy');