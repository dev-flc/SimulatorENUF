<?php

namespace SimulatorENUF\Http\Controllers;

use Illuminate\Http\Request;
use SimulatorENUF\Models\Unidad;
use SimulatorENUF\Models\Curso;

class ProUnidadController extends Controller
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
      $unidad=new Unidad;
      $unidad->UNI_nombre=($request->nombre);
      $unidad->UNI_foto="unidad.png";
      $unidad->UNI_material_apoyo="apoyo.pdf";
      $unidad->UNI_fecha_final=($request->fecha);
      $unidad->CUR_id=($request->curso);
      $unidad->save();
      return redirect()->route('curso.show', ($request->curso));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

      $unidad=Unidad::find($id);
      $idcurso=$unidad->CUR_id;
      $curso=Curso::find($idcurso);

      return view("Profesor.Unidad.show")
      ->with('curso',$curso)
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
