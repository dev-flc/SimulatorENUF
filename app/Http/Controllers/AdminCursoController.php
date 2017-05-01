<?php

namespace SimulatorENUF\Http\Controllers;

use Illuminate\Http\Request;
use SimulatorENUF\Models\Profesor;
use SimulatorENUF\Models\Curso;


class AdminCursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      #$curso=Curso::all();
      $curso=Curso::join('profesors','profesors.PRO_id','=','cursos.PRO_id')->get();
      $profesor=Profesor::all();

      return view("Administrador.Curso.index")
      ->with('profesor',$profesor)
      ->with('curso',$curso);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $profesor=Profesor::all();
      return view('Administrador.Curso.index')->with('profesor',$profesor);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      if($request->file('file'))
      {
        $file=$request->file('file');
        $nombre = 'curso_'.time().'.'.$file->getClientOriginalExtension();
        $path=public_path().'/img';
        $file->move($path, $nombre);
      }
      else
      {
        $nombre="file.png";
      }
      $fecha=date('Y-m-d');
      $curso=new Curso;
      $curso->CUR_nombre=($request->nombre);
      $curso->CUR_descripcion=($request->descripcion);
      $curso->CUR_cupos=($request->cupos);
      $curso->CUR_fecha=$fecha;
      $curso->CUR_clave=($request->clave);
      $curso->CUR_foto=$nombre;
      $curso->CUR_estatus="habilitado";
      $curso->PRO_id=($request->profesor);
      $curso->save();
      return redirect()->route('cursos.index');
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
      $curso=Curso::find($id);
      $idprofesor=$curso->PRO_id;
      $profesor=Profesor::find($idprofesor);
      $profesores=Profesor::all();

      return view("Administrador.Curso.update")
      ->with('curso',$curso)
      ->with('profesor',$profesor)
      ->with('profesores',$profesores);
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
      $fecha=date('Y-m-d');
      $curso=Curso::find($id);
      $curso->CUR_nombre=($request->nombre);
      $curso->CUR_cupos=($request->cupos);
      $curso->CUR_fecha=$fecha;
      $curso->CUR_clave=($request->clave);
      $curso->CUR_estatus=($request->estatus);
      $curso->PRO_id=($request->profesor);;
      $curso->save();

      //flash('Presidente modificado correctamente', 'info')->important();
      return redirect()->route('cursos.index');
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
