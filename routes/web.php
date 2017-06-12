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
    // Verificamos que el usuario no esta autenticado
    if (Auth::check())
    {
        return redirect()->route('principal.index');
    }
    else
    {
        return redirect()->route('welcome');
    }
});
Route::get('/', 'WelcomeController@welcome');


Route::group(['prefix'=>'admin','middleware'=>['admin','auth']], function(){

Route::resource('cursos','AdminCursoController');

Route::resource('profesores','AdminProfesorController');

Route::put('/updatepass/{id}',[
    'uses' => 'AdminProfesorController@updatepass',
    'as' => 'updatepass'
    ]);

});
//middleware Administrador Inicio


//middleware Profesor Inicio

#Route::group(['prefix'=>'profesor'], function(){
Route::group(['prefix'=>'profesor','middleware'=>['profesor','auth']], function(){

Route::resource('curso','ProCursoController');
Route::resource('perfilprofesor','ProPerfilController');

Route::resource('alumno','ProAlumnoController');

Route::resource('unidad','ProUnidadController');

Route::resource('pregunta','ProPreguntaController');

Route::resource('principalprofesor','ProPrincipalController');

Route::resource('respuesta','ProRespuestaController');

Route::get('/detallecurso/{id}',[
    'uses' => 'ProCursoController@detallecurso',
    'as' => 'detallecurso'
    ]);

Route::put('/updatepasswordalu/{id}',[
    'uses' => 'ProCursoController@updatepasswordalu',
    'as' => 'updatepasswordalu'
    ]);

Route::put('/updateuser/{id}',[
    'uses' => 'ProPerfilController@updateuser',
    'as' => 'updateuser'
    ]);

Route::put('/updateproimg/{id}',[
    'uses' => 'ProPerfilController@updateproimg',
    'as' => 'updateproimg'
    ]);


Route::get('/listapdf/{id}',[
    'uses' => 'ProCursoController@listapdf',
    'as' => 'listapdf'
    ]);

Route::get('/veralumno/{id}/{curso}/',[
    'uses' => 'ProCursoController@veralumno',
    'as' => 'veralumno'
    ]);

Route::put('updateexamenglobal/{id}',[
    'uses' => 'ProCursoController@updateexamenglobal',
    'as' => 'updateexamenglobal'
    ]);

});


//middleware Profesor Fin



//middleware Alumno Inicio
Route::group(['prefix'=>'alumno','middleware'=>['alumno','auth']], function(){

Route::resource('alumnoperfil','PerfilAlumnoController');
Route::put('updatefoto/{id}',[
    'uses' => 'PerfilAlumnoController@updatefoto',
    'as' => 'updatefoto'
    ]);



Route::put('/updateuseralum/{id}',[
    'uses' => 'PerfilAlumnoController@updateuseralum',
    'as' => 'updateuseralum'
    ]);



Route::get('descargafiles/{id}',[
    'uses' => 'AlumnoExamenController@descargafiles',
    'as' => 'descargafiles'
    ]);

Route::resource('principal','AlumnoPrincipalController');
Route::resource('curos_registro','AlumnoRegistroCursoController');
Route::resource('cursos_examen','AlumnoExamenController');

/* Examen global */
Route::get('/globalshow/{id}',[
    'uses' => 'AlumnoExamenController@globalshow',
    'as' => 'globalshow'
    ]);
/* Examen final */
Route::get('/examenfinal/{id}',[
    'uses' => 'AlumnoExamenController@examenfinal',
    'as' => 'examenfinal'
    ]);
/* Examen de prueba  */
Route::get('/examenprueba/{id}',[
    'uses' => 'AlumnoExamenController@examenprueba',
    'as' => 'examenprueba'
    ]);
/* Detalle de unidad*/
Route::get('/detalleunidad/{id}',[
    'uses' => 'AlumnoExamenController@detalleunidad',
    'as' => 'detalleunidad'
    ]);

  Route::post('finalexamen',[
    'uses' => 'AlumnoExamenController@finalExamen',
    'as' => 'finalexamen'
    ]);
  Route::post('globalfinal',[
    'uses' => 'AlumnoExamenController@globalfinal',
    'as' => 'globalfinal'
    ]);
});
//middleware Alumno Fin
//Auth::routes();
//Route Cerrar sesion
Route::post('logout', function (){
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

Route::get('/home', 'HomeController@index');
