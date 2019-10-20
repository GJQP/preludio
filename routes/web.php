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
// Catalogo de Teatros
Route::get('/teatros', 'TeatrosController@index');
// Catalogo de Presentaciones
Route::get('/presentaciones', 'PresentacionesController@index');
//Registrar
Route::get('/register', 'HomeController@register');

Auth::routes();

//Mostrar un teatro
Route::get('/teatro/1', 'TeatrosController@mostrar');
//Mostrar una presentacion
Route::get('/presentacion/1', 'PresentacionesController@show');

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
