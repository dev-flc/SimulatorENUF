<?php

namespace SimulatorENUF\Http\Controllers;

use Illuminate\Http\Request;
use SimulatorENUF\Models\Curso;
use SimulatorENUF\Models\Alumno;
use SimulatorENUF\Models\Unidad;
use SimulatorENUF\Models\Profesor;
use DB;



class WelcomeController extends Controller
{

  #Busqueda
    public function welcome(Request $request)
    {

        $unidad = Unidad::select('UNI_fecha_inicio')->groupBy('UNI_fecha_inicio')->get();
        $cursos = Curso::all()->count();
       	$curse = Curso::Buscador($request->namecurso)->where('CUR_estatus', 'habilitado')->paginate(5);
       	$alumnos = Alumno::all()->count();
       	$profesores = Profesor::all()->count();
      	return view('welcome')
      	->with('cursos',$cursos)
        ->with('alumnos',$alumnos)
        ->with('curse',$curse)
      	->with('unidad',$unidad)
      	->with('profesores',$profesores);
    }
}
