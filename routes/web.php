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
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('posts');
});





Route::get('/login', function () {
    return view('govac_login');
});

Route::get('/pendaftaran', function () {
    return view('govac_pendaftaran');
});

Route::get('/halaman', function () {
    return view('govac_halaman_vaksin');
});

Route::get('/landing', function () {
    return view('govac_landingPage');
});

Route::get('/pengguna', function () {
    return view('govac_para_pengguna');
});
