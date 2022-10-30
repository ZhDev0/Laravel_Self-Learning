<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PaginationController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Client\Request;
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

//Route Without Parameter

Route::get('/', function () {
    return view('welcome');
});

// //Route With Parameter

// Route::get('/user/{name}', function($name) {
//     return "Hi User " .$name;
// });

// // Route With Parameter Even tho we didn't write the name in the query it going to print Hi User.

// Route::get('/user/{name?}', function($name=null) {
//     return "Hi User " .$name;
// });

// // Route With Parameter And Validation To that parameter

// Route::get('/user/{name}', function($name) {
//     return "Hi User " .$name;
// })->where('name', '[a-zA-Z]+');

// Route::get('/product/{id}', function($id=null) {
//     return 'Product id is ' .$id;
// })->where('id', '[0-9]+');

// // We can do that validation (where(..)) on app > provider > RouteServiceProvider.php

// //

// Route::match(['get', 'post'], '/students', function(Request $req) {
//     return $req->method();
// });

// // Route + Controller

// Route::get('/home', [HomeController::class, 'index'])->name('home.index');
// // Route + Controller + parameter

// Route::get('/home/{name?}', [HomeController::class, 'index2'])->name('home.index2');

Route::get('/posts',[ClientController::class, 'getAllPosts'])->name('client.getallposts');
Route::get('/post-get', [ClientController::class, 'addPost'])->name('client.addpost');
Route::get('/post-update/{id}', [ClientController::class, 'updatePost'])->name('client.updatepost');
Route::get('/post-delete/{id}', [ClientController::class, 'deletePost'])->name('client.deletepost');

Route::get('allusers', [PaginationController::class, 'allUsers'])->name('pagination.allusers');

Route::get('/sendmail', [MailController::class, 'sendMail']);

Route::get('allpost', [PostController::class, 'getAllPosts'])->name('get.posts');
Route::get('add-post', [PostController::class, 'addPost'])->name('add.posts');
Route::post('add-post-submit', [PostController::class, 'addPostSubmit'])->name('add.postsubmit');
Route::get('singlepost/{id}', [PostController::class, 'getPostById'])->name('single.post');
Route::get('deletepost/{id}', [PostController::class, 'deletePost'])->name('delete.post');
Route::get('editpost/{id}', [PostController::class, 'editPost'])->name('edit.post');
Route::post('update-post', [PostController::class, 'updatePost'])->name('update.post');
Route::get('/insert-user', [UserController::class, 'insertRecord']);
Route::get('/getphone/{id}', [UserController::class, 'getUserPhone']);
