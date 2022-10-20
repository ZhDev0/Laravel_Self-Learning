<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Controller;
use App\Http\Middleware\RequestExemple;
use Illuminate\Http\Request;

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





///////// Registering Middleware////////

// Middelware normal 

Route::get('/request', function () {
    return view('request');
})->middleware('test');

// Middelware declaration class

Route::any('/user', function (Request $request) {
    $name = $request->input("name");
    return $name;
})->middleware(RequestExemple::class);



//middelware route group
Route::middleware([EnsureTokenIsValid::class])->group(function () {
    Route::get('/', function () {
        //
    });
 
    Route::get('/profile', function () {
        //
    })->withoutMiddleware([EnsureTokenIsValid::class]);
});



