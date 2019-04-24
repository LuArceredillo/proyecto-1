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
/*  Usuarios  */

Route::post('/store', 'UserController@store');

Route::post('actualizarPerfil/{id}', 'UserController@actualizar')->name('actualizar')->middleware('auth');
Route::get('editarUsuario', 'UserController@editar')->name('editarUsuario');
Route::post('login', 'UserController@postLogin');
Route::get('login', 'UserController@login')->name('login');
Route::get('crea', 'UserController@crea')->name('crea');
Route::get('logout', 'UserController@logout')->name('logout');
   
Route::get('auth/{provider}', 'UserController@redirectToProvider')->name('social.auth');
Route::get('auth/{provider}/callback', 'UserController@handleProviderCallback');
 
Route::get('verPerfil/{id}', 'UserController@perfil')->name('verPerfil');


Route::get('cocineros','RecetasController@cocineros')->name('cocineros');
Route::get('recetas','RecetasController@recetas')->name('recetas');
Route::get('recetas/{categoria}','RecetasController@recetasCategoria')->name('recetaCategoria');
Route::get('/','RecetasController@index');
Route::get('receta/{nombre}','RecetasController@receta')->name('receta');
Route::post('agregarReceta/{id_autor}','RecetasController@agregarReceta')->name('agregarReceta');
 