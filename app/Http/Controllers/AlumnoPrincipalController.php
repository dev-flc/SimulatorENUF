<?php

namespace SimulatorENUF\Http\Controllers;

use Illuminate\Http\Request;
use SimulatorENUF\Models\Curso;
use SimulatorENUF\Models\Alumno;
use SimulatorENUF\Models\CurAlu;
use SimulatorENUF\User;
use Auth;
use DB;

class AlumnoPrincipalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $iduseralumno = Auth::user()->id;
      $mifotito = Auth::user()->foto;
      $user=User::find($iduseralumno);
      $alumno=Alumno::where('USE_id', $iduseralumno)->first();
      $idalumno=$alumno->ALU_id;
      $inscrito=CurAlu::where('ALU_id', $alumno->ALU_id)->join('cursos','cursos.CUR_id','=','cur_alus.CUR_id')->get();

      $curso=Curso::whereNotExists(function($inscrito)use ($idalumno)
            {
            $inscrito->select(DB::raw(1))
            ->from('cur_alus')
            ->whereRaw('cur_alus.CUR_id = cursos.CUR_id')
            ->where('ALU_id', '=', $idalumno);
            })
            ->get();

      return view('Alumno.Principal.index')
      ->with('alumno',$alumno)
      ->with('user',$user)
      ->with('mifotito',$mifotito)
      ->with('inscrito',$inscrito)
      ->with('idalumno',$alumno->ALU_id)
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
