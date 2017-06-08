<?php

namespace SimulatorENUF\Http\Controllers;

use Illuminate\Http\Request;
use SimulatorENUF\Models\Unidad;
use SimulatorENUF\Models\Curso;
use SimulatorENUF\Models\Pregunta;
use SimulatorENUF\Models\Respuesta;


class ProPreguntaController extends Controller
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
       $this->validate($request,[
        'pregunta' => 'required|max:255',
        'respuesta1' => 'required|max:255',
        'respuesta2' => 'required|max:255',
        'respuesta3' => 'required|max:255',
        'respuesta4' => 'required|max:255',
        ]);
      $correctas=0;

      for($i=1; $i<=4; $i++)
      {
      $ti="tipo".$i;
      $tip=($request->$ti);
      $t=(int)$tip;
        if($t==1)
        {
          $correctas++;
        }
      }
      $file=$request->file('file');
            $nombrefile = 'foto_'.time().'.'.$file->getClientOriginalExtension();
            $path=public_path().'/files/documents';
            $file->move($path, $nombrefile);


      $pregunta=new Pregunta;
      $pregunta->PRE_nombre=($request->pregunta);
      $pregunta->PRE_respuestas=$correctas;
      $pregunta->UNI_id=($request->unidad);
      $pregunta->CUR_id=($request->curso);
      $pregunta->PRE_file=$nombrefile;
      $pregunta->save();
      $idpre= Pregunta::find($pregunta->PRE_id);


      for($i=1; $i<=4; $i++)
      {
      $res="respuesta".$i;
      $tipo="tipo".$i;
      $tipoo=($request->$tipo);
      $tipoo=(int)$tipoo;
      $respuesta=new Respuesta;
      $respuesta->RES_nombre=($request->$res);
      $respuesta->PRE_id=($idpre->PRE_id);
      $respuesta->TIP_id=$tipoo;
      $respuesta->save();

      };


      return redirect()->route('unidad.show', ($request->unidad));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
