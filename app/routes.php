<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
//cargando una vista normal pasándole una variable llamada saludo
Route::get('/', function(){
	return View::make('hello');
});


Route::get('usuarios','UsuariosController@get_index');

//crear un nuevo Usuario
Route::get('usuarios/crearusuario','UsuariosController@get_formulario');
Route::post('usuarios/crearusuario','UsuariosController@post_formulario');


#Editar un Usuario
Route::get('usuarios/{id}/editar','UsuariosController@editar');
Route::post('usuarios/{id}','UsuariosController@actualizar');

//rutas de clientes
Route::get('clientes','ClientesController@get_index');

Route::get('clientes/crearCliente','ClientesController@get_formulario');
Route::post('clientes/crearCliente','ClientesController@post_formulario');
Route::post('clientes/crearCliente','ClientesController@post_formulario');
