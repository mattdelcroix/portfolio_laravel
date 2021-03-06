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

Route::get('/curriculum', function () {
    return view('curriculum.cv');
});

Route::get('getPhotoCategory/{category}', 'PhotoController@photoCategory');

Auth::routes();

Route::resource('photo', 'PhotoController');

Route::get('/home', 'HomeController@index')->name('home');
