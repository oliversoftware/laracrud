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

Route::get('/productos', function () {
    return view('welcome');
});
/*
Route::get('/inicio','ProductosController@index');
Route::get('/crear','ProductosController@create');
Route::get('/actualizar','ProductosController@update');
Route::get('/mostar','ProductosController@show');
Route::get('/eliminar','ProductosController@destroy');
Route::get('/','ProductosController@index');
*/
Route::resource('/productos','ProductosController');
