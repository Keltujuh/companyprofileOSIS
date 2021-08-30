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
Route::get('/tentang-kami', function () {
    return view('about-me');
});
Route::get('/progrma-kerja', function () {
    return view('progja');
});
Route::get('/galeri', function () {
    return view('galery');
});
