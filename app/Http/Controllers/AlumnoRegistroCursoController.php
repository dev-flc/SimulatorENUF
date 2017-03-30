<?php

namespace SimulatorENUF\Http\Controllers;

use Illuminate\Http\Request;
use SimulatorENUF\Models\Curso;
use SimulatorENUF\Models\Unidad;
use SimulatorENUF\Models\CurAlu;
use SimulatorENUF\Models\Alumno;
use Auth;
use Laracasts\Flash\Flash;



class AlumnoRegistroCursoController extends Controller
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
        $valida=Curso::find($request->idcurso);
        if($valida->CUR_clave==($request->clave))
        {
          $curso=new CurAlu;
          $curso->CUAL_estatus="pendiente";
          $curso->CUR_id=($request->idcurso);
          $curso->ALU_id=($request->idalumno);
          $curso->save();
          flash('Registro exitoso', 'success')->important();
          return redirect()->route('principal.index');
        }
        else
        {
          flash('Clave incorrecta intente de nuevo o pongance en contacto con el profesor para que le proporcione la clave correcta...', 'danger')->important();
          #Flash::error('Whoops! There were some problems with your input.')->important();
          #flash('Presidente agregado correctamente', 'info')
          return redirect()->route('curos_registro.show', ($request->idcurso));
        }
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
      return view('Alumno.Curso.index')
      ->with('curso',$curso)
      ->with('alumno',$alumno)
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
