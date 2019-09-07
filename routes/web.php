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



Auth::routes();

Route::get('/', 'HomeController@home');

Route::get('/categorias', 'CategoriasController@list');
Route::get('/marcas', 'MarcasController@list');
Route::get('/productos', 'ProductosController@list');

Route::get('/producto/{id}', 'ProductosController@buscar');
Route::get('/categoria/{id}', 'CategoriasController@buscar');
Route::get('/marca/{id}', 'MarcasController@buscar');

Route::get('/productos/add','ProductosController@add')->middleware("auth");
Route::post('/productos/add','ProductosController@agregar')->middleware("auth");

Route::get('/productos/{id}/edit','ProductosController@edit')->middleware("auth");
Route::put('/productos/{id}','ProductosController@update')->middleware("auth");

Route::delete('/deleteProducto', 'ProductosController@delete')->middleware("auth");
