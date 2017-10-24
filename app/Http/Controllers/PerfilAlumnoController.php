<?php

namespace SimulatorENUF\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use SimulatorENUF\Models\Alumno;
use SimulatorENUF\Models\Direccion;
use SimulatorENUF\User;
use Flash;

class PerfilAlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $iduseralumno = Auth::user()->id;
      $alumno=Alumno::where('USE_id', $iduseralumno)
      ->join('direccions','direccions.DIR_id','=','alumnos.DIR_id')
      ->join('users','users.id','=','alumnos.USE_id')
      ->first();
      return view('Alumno.Perfil.index')->with('alu',$alumno);
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

    public function updateuseralum(Request $request, $id)
    {
      $user=User::find($id);
      $user->email=($request->email);
      $user->password=bcrypt($request->password);
      $user->save();

      Flash::success("Contraseña actualizada correctamente")->important();
      return redirect()->route('alumnoperfil.index');

    }
    public function update(Request $request, $id)
    {
      $alumno=Alumno::find($id);
      $alumno->ALU_nombre=($request->nombre);
      $alumno->ALU_apellido_p=($request->ap);
      $alumno->ALU_apellido_m=($request->am);
      $alumno->ALU_edad=($request->edad);
      $alumno->ALU_sexo=($request->sex);
      $alumno->ALU_metricula=($request->matricula);
      $alumno->save();
      if($alumno)
      {
        $idalum= Alumno::find($alumno->ALU_id);
        $iddir=$idalum->DIR_id;
        $dir=Direccion::find($iddir);
        $dir->DIR_calle=($request->calle);
        $dir->DIR_colonia=($request->colonia);
        $dir->DIR_estado=($request->estado);
        $dir->DIR_ciudad=($request->ciudad);
        $dir->DIR_pais=($request->pais);
        $dir->save();
        if($dir)
        {
          return redirect()->route('alumnoperfil.index');
        }
        else
        {
          dd("no direccion");
        }
      }
      else
      {
        dd("no alumno");
      }
    }

    public function updatefoto(Request $request, $id)
    {
       if($request->file('file'))
      {
        $file=$request->file('file');
        $nombre = 'alumno_'.time().'.'.$file->getClientOriginalExtension();
        $path=public_path().'/img';
        $file->move($path, $nombre);
      }
      else
      {
        $nombre="file.png";
      }
      $user=User::find($id);
        $user->foto=$nombre;
        $user->save();
        if($user)
        {
          return redirect()->route('alumnoperfil.index');
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
