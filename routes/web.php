<?php

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


Route::get('portfolio', function () {
    return view('portfolio');
});


Route::get('blogs', function () {
    return view('blogs');
});


Route::get('about', function () {
    return view('about');
});


Route::get('contact', function () {
    return view('contact');
});


Route::get('detailblog', function () {
    return view('detailblog');
});


Route::get('detailblog1', function () {
    return view('detailblog1');
});