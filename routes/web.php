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

Route::resource('curso','AdminCursoController');

Route::resource('profesor','AdminProfesorController');
});
//middleware Administrador Inicio


//middleware Profesor Inicio

Route::group(['prefix'=>'profesor'], function(){

Route::resource('curso','ProCursoController');

Route::resource('alumno','ProAlumnoController');
});


//middleware Profesor Fin
Auth::routes();

Route::get('/home', 'HomeController@index');
