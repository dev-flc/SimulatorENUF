<?php

namespace SimulatorENUF\Http\Controllers;

use Illuminate\Http\Request;
use SimulatorENUF\Models\Curso;
use SimulatorENUF\Models\Alumno;
use SimulatorENUF\Models\Profesor;



class WelcomeController extends Controller
{
    public function welcome()
    {
       	$cursos = Curso::all()->count();
       	$alumnos = Alumno::all()->count();
       	$profesores = Profesor::all()->count();
      	return view('welcome')
      	->with('cursos',$cursos)
      	->with('alumnos',$alumnos)
      	->with('profesores',$profesores);
    }
}
