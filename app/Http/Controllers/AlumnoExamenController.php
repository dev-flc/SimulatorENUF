<?php

namespace SimulatorENUF\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Laracasts\Flash\Flash;
use SimulatorENUF\Models\Curso;
use SimulatorENUF\Models\Unidad;
use SimulatorENUF\Models\Alumno;
use SimulatorENUF\Models\Pregunta;
use SimulatorENUF\Models\Respuesta;
use SimulatorENUF\Models\Examen;
use DB;


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
      $iduseralumno = Auth::user()->id;
      $alumno=Alumno::where('USE_id', $iduseralumno)->first();
      $idalumno=$alumno->ALU_id;

      $b=4;
      $c=1;
      $vv=0;
      $cal=0;
      $rescorrecta=0;
      $cantidadres=(int)($request->cantidad)*4;
      #echo $cantidadres;
      $cantidad=(int)($request->cantidad);
      #echo "cantidad=".$cantidad."<br>";
      for($i=1;$i<=$cantidad;$i++)
      {
        $pre="pre".$i;
        $pregunta=Respuesta::select('*')->where('PRE_id','=',$request->$pre)->where('TIP_id','=',1)->get();
        $cantidadcorrectas=count($pregunta); #cantidad de respuestas correctas
        for ($a=$c; $a<=$cantidadres; $a++)
        {
          $res="res".$a;
          $respuesta=($request->$res);
          if(isset($respuesta))
          {
            $verificar=Respuesta::find($respuesta);
            if ($verificar->TIP_id==1)
            {
              $vv=$vv+1;
            }
            else
            {
              $vv=$vv-1;
            }
          }
          if($a==$b)
          {
            if ($vv==$cantidadcorrectas)
            {
              $cal=$cal+1;
            }
              $b=$b+4;
              $c=$a+1;
              $vv=0;
              break;
          }
        }
      }

      $hora= date("H:i:s");
      $fecha=date('Y-m-d');
      $examen=new Examen;
      $examen->EXA_nombre=($request->nombre);
      $examen->EXA_fecha=$fecha;
      $examen->EXA_hora=$hora;
      $examen->EXA_calificacion=$cal;
      $examen->EXA_tiempo=$hora;//pendiente tiempo del examen
      $examen->EXA_intento=1;//pendiente intentos
      $examen->UNI_id=($request->unidadid);
      $examen->TIP_id=3;
      $examen->ALU_id=$idalumno;
      $examen->save();

      if($examen){
        $unidad=Unidad::find($request->unidadid);;
        $unidad->UNI_calificacion=$cal;
        $unidad->save();
        if($unidad){
          return view('Alumno.Curso.resultado')
          ->with('cal',$cal);
        }
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
      $num=1;
      $pregunta=Pregunta::inRandomOrder()->select('*')->where('UNI_id','=',$id)->limit(10)->get();
      $respuesta=Respuesta::inRandomOrder()->get();


      return view('Alumno.Curso.prueba')
      ->with('alumno',$alumno)
      ->with('pregunta',$pregunta)
      ->with('i',$i)
      ->with('p',$p)
      ->with('num',$num)
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
