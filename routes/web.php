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
Route::resource('sekolah','SekolahController')->only(['index','edit','update'])->middleware('auth:users');
Route::get('/sekolah/pdfprint', 'PrintController@sekolah_print')->name('sekolah.pdfprint')->middleware('auth:users');
Route::resource('pengguna','PenggunaController')->only(['index','destroy'])->middleware('auth:users');
Route::delete('pengguna-multidel','PenggunaController@delall')->name('pengguna.multidel')->middleware('auth:users');