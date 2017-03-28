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

#Route::group(['prefix'=>'admin'], function(){
Route::group(['prefix'=>'admin','middleware'=>['admin','auth']], function(){

Route::resource('cursos','AdminCursoController');

Route::resource('profesores','AdminProfesorController');
});
//middleware Administrador Inicio


//middleware Profesor Inicio

#Route::group(['prefix'=>'profesor'], function(){
Route::group(['prefix'=>'profesor','middleware'=>['profesor','auth']], function(){

Route::resource('curso','ProCursoController');

Route::resource('alumno','ProAlumnoController');

Route::resource('unidad','ProUnidadController');

Route::resource('pregunta','ProPreguntaController');

Route::resource('principalprofesor','ProPrincipalController');

Route::resource('respuesta','ProRespuestaController');

});
//middleware Profesor Fin

//middleware Alumno Inicio
#Route::group(['prefix'=>'alumno'], function(){
Route::group(['prefix'=>'alumno','middleware'=>['alumno','auth']], function(){

Route::resource('principal','AlumnoPrincipalController');
Route::resource('curos_registro','AlumnoRegistroCursoController');
});
//middleware Alumno Fin

//Auth::routes();
Route::get('logout', function (){
Auth::logout();
return redirect('/');
});
Route::get('/registro', 'AlumnoRegistroController@registro');

Route::post('/registroalumno',[
    'uses' => 'AlumnoRegistroController@registeruser',
    'as' => 'registroalumno.registeruser'
    ]);

Route::post('/loginuser',[
    'uses' => 'AlumnoRegistroController@loginuser',
    'as' => 'loginuser'
    ]);

//Route::post('/register', 'AlumnoRegistroController@registeruser');

//Route::resource('crearalumno','AlumnoRegisterController');




Route::get('/home', 'HomeController@index');
