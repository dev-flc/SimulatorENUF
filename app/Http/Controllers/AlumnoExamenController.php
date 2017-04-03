<?php

namespace SimulatorENUF\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Laracasts\Flash\Flash;
use SimulatorENUF\Models\Curso;
use SimulatorENUF\Models\Unidad;
use SimulatorENUF\Models\CurAlu;
use SimulatorENUF\Models\Alumno;
use SimulatorENUF\Models\Pregunta;
use SimulatorENUF\Models\Respuesta;

class AlumnoExamenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->cantidad);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $iduseralumno = Auth::user()->id;
      $alumno=Alumno::where('USE_id', $iduseralumno)->first();
      $curso=Curso::find($id);
      $unidad=Unidad::select('*')->where('CUR_id','=',$id)->get();

      return view('Alumno.Curso.show')
      ->with('curso',$curso)
      ->with('alumno',$alumno)
      ->with('unidad',$unidad);
    }
    public function examenfinal($id)
    {
      dd("Final",$id);
    }
    public function examenprueba($id)
    {
      $iduseralumno = Auth::user()->id;
      $alumno=Alumno::where('USE_id', $iduseralumno)->first();
      $unidad=Unidad::find($id);
      $i=1;
      $p=1;
      $pregunta=Pregunta::inRandomOrder()->select('*')->where('UNI_id','=',$id)->limit(10)->get();
      $respuesta=Respuesta::all();


      return view('Alumno.Curso.prueba')
      ->with('alumno',$alumno)
      ->with('pregunta',$pregunta)
      ->with('i',$i)
      ->with('p',$p)
      ->with('respuesta',$respuesta)
      ->with('unidad',$unidad);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
