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
    return view('layouts.site.anasayfa');
});

Route::get('/bootstrap', function () {
    return view('layouts.site.bootstrap');
});
Route::get('/anasayfa', function () {
    return view('layouts.site.anasayfa');
});

Route::get('/javascript', function () {
    return view('layouts.site.javascript');
});

Route::get('/csslesson', function () {
    return view('layouts.site.csslesson');
});
Route::get('/contact', function () {
    return view('layouts.site.contact');
});
Route::get('/lessons', function () {
    return view('layouts.site.lessons');
});
Route::get('/aboutus', function () {
    return view('layouts.site.aboutus');
});
Route::get('/help', function () {
    return view('layouts.site.help');
});
Route::get('/signUp', function () {
    return view('layouts.site.signUp');
});
Route::get('/memberLogin', function () {
    return view('layouts.site.memberLogin');
});


