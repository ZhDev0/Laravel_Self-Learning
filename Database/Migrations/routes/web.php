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

// installation composer  require doctrine/dbal   
// create new  migration table :php artisan make:migration create_flights_table

// seed migration : php artisan migrate 

//show all  migration : php artisan migrate:status

//show detail migration :php artisan migrate --pretend

//Refresh tables :php artisan migrate:refresh

//rename col in table db : php artisan make:migration col_change_name --table=tableName
// $table->renameColumn('hh', 'phone');

//remove col in table db : php artisan make:migration col_remove_name --table=tableName
// $table->dropColumn('phone');

//add col in table db : php artisan make:migration col_remove_name --table=tableName
// $table->string('phone')->unique();


//create Table db:

    // });
    // Schema::create('Students', function (Blueprint $table) {
    //     $table->increments("Id_student");
    //     $table->string('First_name')->nullable();
    //     $table->string('Last_name')->nullable();
    //     $table->string('Email')->nullable();
    //     $table->timestamps();

    // });
    // Schema::create('Promotion', function (Blueprint $table) {
    //     $table->increments("Id_promotion")->nullable();
    //     $table->string('Name_promotion')->nullable();
    //     $table->unsignedInteger('StudentID')->nullable();
    //     $table->foreign('StudentID')
    //     ->references('Id_student')
    //     ->on('Students')
    //     ->onDelete('cascade');
    //     $table->timestamps();

    // });