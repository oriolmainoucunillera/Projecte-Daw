<?php

use Illuminate\Support\Facades\Route;

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

/*Home*/
Route::get('/', 'HomeController@index')->name('home');

/*Página catagoria*/
Route::get('/categoria', 'ProductoController@categoria')->name('categoria');

/*Página de detalla*/
Route::get('/detalle', 'ProductoController@detalle')->name('detalle');

/*Página de administrador*/
Route::get('/administrador', 'AdminController@administrador')->name('administrador');

/*Añadir productos*/
Route::get('/formAddProducto', 'AdminController@formAddProducto')->name('formAddProducto');
Route::post('/addProducto', 'AdminController@addProducto')->name('addProducto');

/*Editar productos*/
Route::get('/formEditProducto', 'AdminController@formEditProducto')->name('formEditProducto');
Route::patch('/editProducto', 'AdminController@editProducto')->name('editProducto');

/*Eliminar producto*/
Route::post('/deleteProducto', 'AdminController@deleteProducto')->name('deleteProducto');

/*Editar usuario*/
Route::get('/formEditUsuario', 'AdminController@formEditUsuario')->name('formEditUsuario');
Route::patch('/editUsuario', 'AdminController@editUsuario')->name('editUsuario');

/*Cesta compra*/
Route::get('/cesta', 'CompraController@cesta')->name('cesta');



