<?php

namespace SimulatorENUF\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use SimulatorENUF\Models\Curso;
use SimulatorENUF\Models\Unidad;
use SimulatorENUF\Models\CurAlu;
use SimulatorENUF\Models\Alumno;
use SimulatorENUF\Models\Profesor;
use DB;



class ProCursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foto = Auth::user()->foto;
        $idd = Auth::user()->id;
        $profe = Profesor::select('*')->where('USE_id','=',$idd)->get();
        foreach ($profe as $pro)
        {
            $idprofe=$pro->PRO_id;
        }
        $curso = Curso::select('*')->where('PRO_id','=',$idprofe)->get();
        return view('Profesor.Curso.index')
        ->with('curso',$curso);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $curso=Curso::find($id);
      $aprobado=CurAlu::select('*')
      ->where('CUR_id','=',$curso->CUR_id)
      ->where('CUAL_estatus','=','aprobado')
      ->join('alumnos','alumnos.ALU_id','=','cur_alus.ALU_id')
      ->join('users','users.id','=','alumnos.USE_id')
      ->get();
      $pendiente=CurAlu::select('*')
      ->where('CUR_id','=',$curso->CUR_id)
      ->where('CUAL_estatus','=','pendiente')
      ->join('alumnos','alumnos.ALU_id','=','cur_alus.ALU_id')
      ->join('users','users.id','=','alumnos.USE_id')
      ->get();
      $verificar=CurAlu::select('*')
      ->where('CUR_id','=',$curso->CUR_id)
      ->join('alumnos','alumnos.ALU_id','=','cur_alus.ALU_id')
      ->join('users','users.id','=','alumnos.USE_id')
      ->get();
      $denegado=CurAlu::select('*')
      ->where('CUR_id','=',$curso->CUR_id)
      ->where('CUAL_estatus','=','denegado')
      ->join('alumnos','alumnos.ALU_id','=','cur_alus.ALU_id')
      ->join('users','users.id','=','alumnos.USE_id')
      ->get();
      $a=1;

      $unidad = Unidad::select('*')->where('CUR_id','=',$id)->get();
      return view('Profesor.Curso.show')
      ->with('curso',$curso)
      ->with('pendiente',$pendiente)
      ->with('denegado',$denegado)
      ->with('aprobado',$aprobado)
      ->with('verificar',$verificar)
      ->with('a',$a)
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
        $cur= CurAlu::find($id);
        $cur ->CUAL_estatus=($request->status);
        $cur->save();
        return redirect()->route('curso.show', ($request->curso));
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
