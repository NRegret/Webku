<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/form', function () {
    return view('form');
});
Route::post('/data', 'siswaController@store')->name('data');
