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
 
Route::get('/','RecetasController@index');
Route::get('testpath',  function () { return app_path(); });
Route::get('login', 'UserController@login')->name('login');

   
Route::get('auth/{provider}', 'UserController@redirectToProvider')->name('social.auth');
Route::get('auth/{provider}/callback', 'UserController@handleProviderCallback');
 