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
Route::get('/', 'UserLogin@login');
Route::get('/home', 'HomeController@index')->middleware('auth:users');
Route::get('/login', 'UserLogin@login')->name('login');
Route::post('/loginPost', 'UserLogin@loginPost');
Route::get('/register', 'UserLogin@register');
Route::post('/registerPost', 'UserLogin@registerPost');
Route::get('/logout', 'UserLogin@logout');
Route::get('/sekolah', 'SekolahController@index')->name('sekolah')->middleware('auth:users');
Route::get('/sekolah/edit/', 'SekolahController@edit')->middleware('auth:users');
Route::post('/sekolah/update/', 'SekolahController@update')->middleware('auth:users');
Route::get('/pengguna', 'PenggunaController@index')->middleware('auth:users');
Route::get('pengguna/del/{id}', 'PenggunaController@del')->middleware('auth:users');;
Route::delete('pengguna/del/all', 'PenggunaController@delall')->middleware('auth:users');;