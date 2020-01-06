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

//index
Route::get('/', 'HomeController@index');


Route::get('/home', function (){
    return redirect(  (Auth::user()->role_id !== 2? '/admin' : '/') );
});


Auth::routes();

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

//Logout
Route::get('/logout', 'Auth\LoginController@logout');

//ver teatro asociado
Route::get('/miTeatro', function (){
   abort_unless(Auth::user()->teatro,404);

   return redirect('/admin/teatros/'.Auth::user()->teatro->id . "/edit");

});

//Registrar
Route::get('/register', 'HomeController@register')->middleware('guest');
Route::get('/password/reset', 'HomeController@restaurarClave')->middleware('guest');

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

Route::post('/resenas/post', 'ResenaController@store')->name('post-resena');

