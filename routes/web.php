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
    return view('landingPage');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('posts');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('pendaftaran');
});

Route::get('/lokasi', function () {
    return view('halaman_vaksin');
});

Route::get('/profil', function () {
    return view('para_pengguna');
});

Route::get('/loading', function () {
    return view('loading');
});
