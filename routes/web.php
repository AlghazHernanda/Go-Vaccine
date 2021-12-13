<?php

use App\Http\Controllers\DaftarVaksinController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Models\DaftarVaksinModel;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();
Route::resource('user', UsersController::class);
Route::get('/about', function () {
    return view('about');
});
Route::get('/vaksin', function () {
    return view('daftar_vaksin');
});
Route::get('/profil', [App\Http\Controllers\RecordController::class, 'index'])->name('home');
Route::get('/loading', function () {
    return view('loading');
});
Route::get('/information', function () {
    return view('information');
});



Route::get('/daftar_vaksin', [DaftarVaksinController::class, 'daftar_vaksin']);
Route::get('/isi_daftar_vaksinasi', [DaftarVaksinController::class, 'isi_daftar_vaksinasi']);
Route::post('/store', [DaftarVaksinController::class, 'store']);
//Route::get('/profil', [DaftarVaksinController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
