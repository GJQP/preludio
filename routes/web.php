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


Auth::routes();

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

//Logout
Route::get('/logout', 'Auth\LoginController@logout');

//Registrar
Route::get('/register', 'HomeController@register');

//Mostrar un teatro
Route::get('/teatro/{teatro}', 'TeatrosController@show');
// Catalogo de Teatros
Route::get('/teatros', 'TeatrosController@index')->name('teatros');

//Mostrar una presentacion
Route::get('/presentacion/{presentacion}', 'PresentacionesController@show')->name('presentacion');
// Catalogo de Presentaciones
Route::get('/presentaciones', 'PresentacionesController@index')->name('presentaciones');

// Presentaciones de un teatro
Route::get('/teatro/{teatro}/presentaciones', 'TeatrosController@verPresentaciones')->name('presentacionesTeatro');

