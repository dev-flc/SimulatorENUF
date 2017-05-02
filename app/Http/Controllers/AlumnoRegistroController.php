<?php

namespace SimulatorENUF\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use SimulatorENUF\Models\Alumno;
use SimulatorENUF\Models\Direccion;
use SimulatorENUF\User;
use Illuminate\Support\Facades\Auth;


class AlumnoRegistroController extends Controller
{
    public function registro()
    {
      return view('Alumno.Registro.index');
    }

    public function registeruser(Request $request)
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
      $user->foto="file.png";
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
    public function loginuser(Request $request)
    {
      // Obtenemos los datos del formulario
        $login=[
            'name' =>($request->user),
            'password' => ($request->password)
        ];

        // Verificamos los datos
        if (Auth::attempt($login))
        {
            return Redirect::route('principal.index');
        }

        return Redirect::back()->with('error_message', 'Invalid data')->withInput();
    }
}
