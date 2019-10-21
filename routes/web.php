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


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

Route::get('/', function () {
    return view('welcome');
});

//Registrar
Route::get('/register', 'HomeController@register');

Auth::routes();

//Mostrar un teatro
Route::get('/teatro/{id}', 'TeatrosController@show')->name('teatro');
// Catalogo de Teatros
Route::get('/teatros', 'TeatrosController@index')->name('teatros');

//Mostrar una presentacion
Route::get('/presentacion/{id}', 'PresentacionesController@show')->name('presentacion');
// Catalogo de Presentaciones
Route::get('/presentaciones', 'PresentacionesController@index')->name('presentaciones');

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
