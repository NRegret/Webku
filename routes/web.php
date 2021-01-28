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
Route::get('/dasis', function () {
    return view('dasis');
});

Route::post('/data', 'siswaController@store')->name('data');
Route::get('/dasis', 'siswaController@index')->name('viewData');
Route::get('dasis/{id}/edit', 'SiswaController@edit')->name('editData');
Route::post('dasis/{id}/update', 'SiswaController@update')->name('updateData');
Route::get('dasis/{id}/delete', 'SiswaController@delete')->name('deleteData');
