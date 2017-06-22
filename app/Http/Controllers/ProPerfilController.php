<?php

namespace SimulatorENUF\Http\Controllers;

use SimulatorENUF\Models\Direccion;
use SimulatorENUF\Models\Profesor;
use SimulatorENUF\User;
use Auth;
use Illuminate\Http\Request;

class ProPerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$iduseralumno = Auth::user()->id;
      	$alumno=Profesor::where('USE_id', $iduseralumno)
      ->join('direccions','direccions.DIR_id','=','profesors.DIR_id')
      ->join('users','users.id','=','profesors.USE_id')
      ->first();
        return view('Profesor.Perfil.index')->with('pro',$alumno);

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


    public function updateproimg(Request $request, $id)
    {
         if($request->file('file'))
      {
        $file=$request->file('file');
        $nombre = 'profesor_'.time().'.'.$file->getClientOriginalExtension();
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
            return redirect()->route('perfilprofesor.index');
        }
    }
    public function updateuser(Request $request, $id)
    {
      $user=User::find($id);
      $user->email=($request->email);
      $user->password=bcrypt($request->password);
      $user->save();
      return redirect()->route('perfilprofesor.index');

    }

    public function update(Request $request, $id)
    {
        $alumno=Profesor::find($id);
      $alumno->PRO_nombre=($request->nombre);
      $alumno->PRO_apellido_p=($request->ap);
      $alumno->PRO_apellido_m=($request->am);
      $alumno->PRO_sexo=($request->sex);
      $alumno->save();
      if($alumno)
      {
        $idalum= Profesor::find($alumno->PRO_id);
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
          return redirect()->route('perfilprofesor.index');
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
