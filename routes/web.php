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

Route::get('/','IndexController@index')->name('index');
Route::post('/subscribe','IndexController@register')->name('subscribe');
Route::post('/contact','IndexController@contact')->name('contact');
Route::get('/cidades/{idEstado}', 'CidadeController@getCidades');

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');
Route::get('/export','HomeController@export')->name('export');
