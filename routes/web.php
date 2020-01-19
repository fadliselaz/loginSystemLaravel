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

Route::get('/', 'AuthController@getLogin');

Route::get('/login', 'AuthController@getLogin')->middleware('guest')->name('gLogin');
Route::post('/login', 'AuthController@postLogin')->middleware('guest')->name('rLogin');

Route::get('/register', 'AuthController@getRegister')->middleware('guest');
Route::post('/register', 'AuthController@postRegister')->middleware('guest')->name('register');
Route::get('/home', function () {
    return view('home');
    // return dd(Auth::user());
    //user diambil dari modal user
})->name('home');

Route::get('/logout', 'AuthController@logout')->middleware('auth')->name('logout');
Route::get('welcome', function () {
    return view('wellcome');
})->middleware('auth');
