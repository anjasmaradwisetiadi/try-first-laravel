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
    return view('Home',[
        "title"=>"Home"
    ]);
});

Route::get('/About', function () {
    return view('About',[
        "title"=>"About"
    ]);
});

Route::get('/Profile', function () {
    return view('Profile',[
        "title"=>"Profile",
        "name"=>"Anjasmara Dwi Setiadi",
        "pekerjaan"=>"Progammer",
        "age"=>20,
        "hobby"=>"olahraga"
    ]);
});

