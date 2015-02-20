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

Route::get('/login', 'AuthController@showLogin');

Route::get('/', 'AuthController@showLogin');

Route::post('/login', ['as' => 'login', 'uses' => 'AuthController@postLogin']);

Route::group(array('before' => 'auth'), function()
{
	/*
	|--------------------------------------------------------------------------
	| Rutas API REST
	|--------------------------------------------------------------------------
	*/

	Route::get('/cbtis/ciclos', ['as' => 'ciclos', 'uses' => 'CicloController@index']);

	Route::post('/cbtis/ciclos', ['as' => 'ciclos', 'uses' => 'CicloController@update']);

	Route::put('/cbtis/grupos/{valor}', ['as' => 'gruposajax', 'uses' => 'GrupoController@update']);

	/*
	|--------------------------------------------------------------------------
	| Rutas Docentes
	|--------------------------------------------------------------------------
	|
	| Here is where you can register all of the routes for an application.
	| It's a breeze. Simply tell Laravel the URIs it should respond to
	| and give it the Closure to execute when that URI is requested.
	|
	*/

	Route::get('/cbtis', ['as' => 'home', 'uses' => 'HomeController@index']);

	Route::get('/docentes', ['as' => 'docentes', 'uses' => 'DocenteController@index']);

	Route::get('/docente-create', ['as' => 'docente.create', 'uses' => 'DocenteController@create']);

	Route::post('/docente', ['as' => 'docente', 'uses' => 'DocenteController@store']);

	Route::get('/docente/{id}/edit', ['as' => 'docente', 'uses' => 'DocenteController@edit']);

	Route::put('/docente/{id}', ['as' => 'docente', 'uses' => 'DocenteController@update']);

	Route::delete('/docente/{id}', ['as' => 'docente', 'uses' => 'DocenteController@destroy']);

	/*
	|--------------------------------------------------------------------------
	| Rutas Docentes y Materias
	|--------------------------------------------------------------------------
	|
	| Here is where you can register all of the routes for an application.
	| It's a breeze. Simply tell Laravel the URIs it should respond to
	| and give it the Closure to execute when that URI is requested.
	|
	*/

	Route::get('docente/{id}/materias', ['as' => 'docente.materia', 'uses' => 'CargaController@docenteMaterias']);

	Route::post('docente/{id}/materias', ['as' => 'docente.materia', 'uses' => 'CargaController@docenteMateriasStore']);

	/*
	|--------------------------------------------------------------------------
	| Rutas de Horarios para docentes
	|--------------------------------------------------------------------------
	|
	| Here is where you can register all of the routes for an application.
	| It's a breeze. Simply tell Laravel the URIs it should respond to
	| and give it the Closure to execute when that URI is requested.
	|
	*/

	Route::get('/docente/{id}/carga', ['as' => 'carga.docente', 'uses' => 'CargaController@index']);

	Route::get('/docente/{id}/carga/pdf', ['as' => 'carga.docente', 'uses' => 'CargaController@indexPDF']);

	/*
	|--------------------------------------------------------------------------
	| Rutas Materias
	|--------------------------------------------------------------------------
	|
	| Here is where you can register all of the routes for an application.
	| It's a breeze. Simply tell Laravel the URIs it should respond to
	| and give it the Closure to execute when that URI is requested.
	|
	*/

	Route::get('/materias', ['as' => 'materias', 'uses' => 'MateriaController@index']);

	Route::get('/materia-create', ['as' => 'materia.create', 'uses' => 'MateriaController@create']);

	Route::post('/materia', ['as' => 'materia', 'uses' => 'MateriaController@store']);

	Route::get('/materia/{id}/edit', ['as' => 'materia', 'uses' => 'MateriaController@edit']);

	Route::put('/materia/{id}', ['as' => 'materia', 'uses' => 'MateriaController@update']);

	Route::delete('/materia/{id}', ['as' => 'materia', 'uses' => 'MateriaController@destroy']);

	/*
	|--------------------------------------------------------------------------
	| Rutas de creacion de los Horarios
	|--------------------------------------------------------------------------
	|
	| Here is where you can register all of the routes for an application.
	| It's a breeze. Simply tell Laravel the URIs it should respond to
	| and give it the Closure to execute when that URI is requested.
	|
	*/

	Route::get('/crear-horario-matutino/grupo/{id}', ['as' => 'horario.grupo', 'uses' => 'GrupoController@indexMatutino']);

	Route::get('/crear-horario-vespertino/grupo/{id}', ['as' => 'horario.grupo', 'uses' => 'GrupoController@indexVespertino']);

	Route::post('/crear-horario/grupo', ['as' => 'horario.grupo', 'uses' => 'GrupoController@store']);

	Route::delete('/eliminar/{id}', ['as' => 'horario.destroy', 'uses' => 'GrupoController@destroy']);

	/*
	|--------------------------------------------------------------------------
	| Rutas Horarios por grupos y turnos
	|--------------------------------------------------------------------------
	|
	| Here is where you can register all of the routes for an application.
	| It's a breeze. Simply tell Laravel the URIs it should respond to
	| and give it the Closure to execute when that URI is requested.
	|
	*/

	Route::get('/horarios/matutino/{turno_id}', ['as' => 'horarios', 'uses' => 'HorarioController@index']);

	Route::get('/horarios/vespertino/{turno_id}', ['as' => 'horarios', 'uses' => 'HorarioController@index']);

	Route::get('/horario/grupo/{id}', ['as' => 'horario.grupo', 'uses' => 'HorarioController@show']);

	Route::get('/horario/grupo/{id}/pdf', ['as' => 'horario.grupo', 'uses' => 'HorarioController@showPDF']);

	/*
	|--------------------------------------------------------------------------
	| Ruta Cerrar Sesion
	|--------------------------------------------------------------------------
	*/

	Route::get('/logout', 'AuthController@logOut');

});
