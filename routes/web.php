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
    return view('index');
});

Route::get('/berita.blade.php', function () {
    return view('berita');
});

Route::get('/tentang.blade.php', function () {
    return view('tentang');
});

Route::get('/galeri.blade.php', function () {
    return view('galeri');
});

Route::get('/kontak.blade.php', function () {
    return view('kontak');
});
