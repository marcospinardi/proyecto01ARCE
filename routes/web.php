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

Route::get('/fruta', function(){
    return 'banana';
});

############# MARCAS  ############
Route::get('/adminMarcas', 'MarcasController@index');
Route::get('/formAgregarMarca', 'MarcasController@create');
Route::post('/agregarMarca', 'MarcasController@store');

############# CATEGORIAS  ############

############# PRODUCTOS  ############
Route::get('/adminProductos', 'ProductosController@index');
Route::get('/formAgregarProducto', 'ProductosController@create');

