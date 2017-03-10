<?php

namespace SimulatorENUF\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use SimulatorENUF\Models\Curso;
use SimulatorENUF\Models\Profesor;


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

        return view('Profesor.Curso.show')->with('curso',$curso);
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
