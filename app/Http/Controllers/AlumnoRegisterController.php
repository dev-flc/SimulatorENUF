<?php

namespace SimulatorENUF\Http\Controllers;

use Illuminate\Http\Request;

class AlumnoRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Alumno.Registro.index');
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
      #nueva direccion
      $direccion=new Direccion;
      $direccion->save();
      #id direccion
      $iddireccion= Direccion::find($direccion->DIR_id);
      $iddir=$iddireccion->DIR_id;

      #nuevo usuario
      $user=new User;
      $user->name=($request->user);
      $user->foto="foto.png";
      $user->email=($request->email);
      $user->password=bcrypt($request->password);
      $user->save();
      #id usuario
      $iduser= User::find($user->id);
      $idusuario=$iduser->id;

      #nuevo alumno
      $alu=new Alumno;
      $alu->ALU_nombre=($request->nombre);
      $alu->ALU_apellido_p=($request->apellido_p);
      $alu->ALU_apellido_m=($request->apellido_m);
      $alu->ALU_edad=($request->edad);
      $alu->ALU_sexo=($request->sexo);
      $alu->ALU_metricula=($request->matricula);
      $alu->USE_id=$idusuario;
      $alu->DIR_id=$iddir;
      $alu->save();

      $data=[
            'name' =>($request->user),
            'password' => ($request->password)
        ];

      if (Auth::attempt($data))
      {
          return Redirect::route('principal.index');
          #return Redirect::intended('principal.index');
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
