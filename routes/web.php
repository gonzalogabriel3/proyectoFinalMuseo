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
    
//rutas controladores
Route::resource('tipo','tipoController')->middleware('auth');

Route::resource('descriptor','descriptorController')->middleware('auth');

Route::resource('estado','estadoController')->middleware('auth');

Route::resource('bien','bienController')->middleware('auth');

Auth::routes();

Route::get('/', 'HomeController@indexSinLog')->name('/');

Route::get('/index','HomeController@index')->name('index')->middleware('auth');

//Route::get('logout', Auth::logout());

