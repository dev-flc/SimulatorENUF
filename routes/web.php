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

#Route::group(['prefix'=>'admin','middleware'=>['admin','auth']], function(){

//middleware Administrador Inicio

Route::group(['prefix'=>'admin'], function(){

Route::resource('cursos','AdminCursoController');

Route::resource('profesores','AdminProfesorController');
});
//middleware Administrador Inicio


//middleware Profesor Inicio

Route::group(['prefix'=>'profesor'], function(){

Route::resource('curso','ProCursoController');

Route::resource('alumno','ProAlumnoController');

Route::resource('unidad','ProUnidadController');

Route::resource('pregunta','ProPreguntaController');

Route::resource('respuesta','ProRespuestaController');

});
//middleware Profesor Fin

//middleware Alumno Inicio
Route::group(['prefix'=>'alumno'], function(){

Route::resource('principal','AlumnoPrincipalController');
});
//middleware Alumno Fin

Auth::routes();

Route::get('/registro', 'AlumnoRegistroController@registro');

Route::post('/register', 'AlumnoRegistroController@registeruser');

Route::get('/home', 'HomeController@index');
