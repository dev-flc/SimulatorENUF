<?php

namespace SimulatorENUF\Http\Controllers;

use Illuminate\Http\Request;
use SimulatorENUF\Models\Profesor;
use SimulatorENUF\Models\Direccion;
use SimulatorENUF\User;
use Auth;
use Hash;
use SimulatorENUF\Models\Curso;

class ProPrincipalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $name = Auth::user()->name;
      $id = Auth::user()->id;
      $foto = Auth::user()->foto;
      if(Hash::check($name, Auth::user()->password))
       {
        $verificar = true;
       }
       else
       {
        $verificar= false;
       }

       $pro=Profesor::where('USE_id',$id)->first();
        $curso = Curso::select('*')->where('PRO_id','=',$pro->PRO_id)->get();
        return view('Profesor.Principal.index')
        ->with('id',$id)
        ->with('foto',$foto)
        ->with('curso',$curso)
        ->with('pro',$pro)
        ->with('verifica',$verificar);
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

        $user=User::find($id);
        $user->password=bcrypt($request->password);
        $user->save();
        if($user)
        {
          $profesor=Profesor::where('USE_id', $id)->first();
          $dir=Direccion::where('DIR_id', $profesor->DIR_id)->first();
          $dir->DIR_calle=($request->calle);
          $dir->DIR_colonia=($request->colonia);
          $dir->DIR_estado=($request->estado);
          $dir->DIR_ciudad=($request->ciudad);
          $dir->DIR_pais=($request->pais);
          $dir->DIR_cp=($request->cp);
          if($dir)
          {
            return redirect()->route('principalprofesor.index');
          }
        }
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
