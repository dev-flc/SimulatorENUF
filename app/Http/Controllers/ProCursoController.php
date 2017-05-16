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

    public function detallecurso($id)
    {


    $list = CurAlu::select('*')
      ->where('cur_alus.CUR_id', '=',$id )
      ->join('alumnos','alumnos.ALU_id','=','cur_alus.ALU_id')
      ->join('cursos','cursos.CUR_id','=','cur_alus.CUR_id')
      ->join('unidads','unidads.CUR_id','=','cur_alus.CUR_id')
      ->get();



      $contador=0;
      $curso=Curso::find($id);

      $lista=CurAlu::select('*')->where('CUR_id','=',$id)
      ->join('alumnos','alumnos.ALU_id','=','cur_alus.ALU_id')
      ->get();


      $unidad=Unidad::select('*')->where('CUR_id','=',$id)

      ->get();
      foreach($unidad as $co)
      {
        $contador++;
      }

      return view('Profesor.Curso.lista')
      ->with('lista',$lista)
      ->with('list',$list)
      ->with('unidad',$unidad)
      ->with('contador',$contador)
      ->with('curso',$curso);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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

    public function updateexamenglobal(Request $request, $id){

       $cur= Curso::find($id);
        $cur ->CUR_estatus_examen=($request->status);
        $cur->CUR_fecha_inicio=($request->fechainicio);
        $cur->CUR_fecha_final=($request->fechafinal);
        $cur->CUR_tiempo=($request->tiempo);
        $cur->CUR_numero_preguntas=($request->numero);
        $cur->save();
        return redirect()->route('curso.show', ($id));
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
