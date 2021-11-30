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

Route::resource('user', UsersController::class);

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/vaksin', function () {
    return view('daftar_vaksin');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/loading', function () {
    return view('loading');
});

Route::get('/information', function () {
    return view('Information');
});


