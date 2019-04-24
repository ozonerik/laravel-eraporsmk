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
Route::get('/', 'UserLogin@index');
Route::get('/home', 'UserLogin@index');
Route::get('/login', 'UserLogin@login');
Route::post('/loginPost', 'UserLogin@loginPost');
Route::get('/register', 'UserLogin@register');
Route::post('/registerPost', 'UserLogin@registerPost');
Route::get('/logout', 'UserLogin@logout');
Route::get('/sekolah', 'SekolahController@index');