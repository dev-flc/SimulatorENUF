@extends('Main.main')

@section('title', 'Examenes')

<!-- Contenido Principal -->
@section('imagenprincipal')
  <div class="seccionone">
  <style type="text/css">
    #pri1
    {
      height: 350px;
      width: 100%;
    }
  </style>
  <img id="pri1" src="/img/pri2.png" alt="">
  </div>
@endsection

<!-- Contenido -->
@section('content')
<style>
  .perfildiv
  {
    background: rgb(244, 246, 246);
    height: 500px;
  }
  #imgperfil
  {
    width: 175px;
    height: 250px;
    box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
  }
  .btn-registro
  {
    width: 50%;
    height: 50px;
    background: rgb(255,255,255);
    border:none;
    border: 1px solid rgb(220,220,220);
    font-size: 20px;
    color: #666;
    transition: .7s;
  }
  .btn-registro:hover
  {
    border: 1px solid rgb(52, 152, 219);
    background: rgb(52, 152, 219);
    color: rgb(255,255,255);
  }

.clave
{
  width: 100%;
  outline: none;
  padding: 15px;
  background: none;
  border: none;
  border-bottom: 2px solid rgb(220,220,220);
  font-size: 20px;
  text-align: center;
}
.clave:focus, .clave:active
{
  outline: none;
  border-bottom: 2px solid rgb(52, 152, 219);
  color: rgb(52, 152, 219);
}
.curse
{
  border: 1px solid rgb(220,220,220);
  padding: 10px;
}
.unidad
{
  border: 1px solid rgb(220,220,220);
  width: 100%;
  height: auto;
  padding: 15px;
  margin: 5px;
  font-size: 17px;
  transition: .7s;
}
.unidad:hover
{
  border: 1px solid rgb(52, 152, 219);
  color: rgb(52, 152, 219);
  border-radius: 5px;
}
.starr
{
  color: rgb(133, 193, 233);
  font-size: 20px;
}
#profe
{
  width: 150px;
  height: 200px;
}
.star
{
  color: rgb(245, 176, 65);
}
#uninom{
  width: 100%;
}
.separar
{
  width: 150%;
}
.final
{
  width: 95%;
  margin: 5px;
  border: none;
  background: none;
  border: 1px solid rgb(220,220,220);
  border-radius: 20px;
  color: rgb(128, 139, 150);
}
.prueba
{
  width: 95%;
  margin: 5px;
  border: none;
  background: none;
  border: 1px solid rgb(220,220,220);
  border-radius: 20px;
  color: rgb(128, 139, 150);
}
.final:hover{
  border: 1px solid rgb(46, 204, 113);
  color: rgb(46, 204, 113);
}
.prueba:hover{
  border: 1px solid rgb(142, 68, 173);
  color: rgb(142, 68, 173);
}
.ancho
{
  width: 75%;
}
.table
{
  width: 100%;
}

    #respuestaid
    {
      width: 100%;
    }


    #ress
    {
      width: 4%;
    }
    #separador
    {
      width: 1%;
      color: rgb(191, 201, 202);
    }
    .si
    {
      color: rgb(130, 224, 170);
    }
    .no
    {
      color: rgb(241, 148, 138);
    }
    table td
    {
      border-bottom: 1px solid rgb(220,220,220);
    }
     table td:hover
    {
      border-bottom: 1px solid rgb(52, 152, 219);
    }

    .cuadro
{
  border-radius: 6px;
  border: 1px solid rgb(220,220,220);
  background: rgb(255,255,255);
  margin: 5px;
  transition: .7s;
}
.cuadro:hover
{
  background: rgb(255,255,255);
  border: 1px solid rgb(200,200,200);
}
input[type=checkbox]
{

  background: rgb(52, 152, 219);
  color: red;

  width: 22px;
    height: 22px;
}
input[type=checkbox]:checked{
  color: red;
  background: rgb(52, 152, 219);

}
</style>
<div class="row">
  <div class="col-sm-4">
    <br>
    <div class="container-fluid perfildiv">
      <center><br>
        <img id="imgperfil" src="/img/profesor.jpg" alt="">
      </center>
    </div>
  </div>
  <div class="col-sm-8 ">
    <br>
    <div class="curse">
    <center><h1>{{ $unidad->UNI_nombre }}</h1></center>
  </div>
  <div class="col-sm-12">
 <!-- ini -->
@if ($pregunta->count())
  {!! Form::open(['route'=>'cursos_examen.store','method'=>'POST']) !!}
@foreach($pregunta as $pre)
    <div class=" container-fluid cuadro">
      <div class="row">

        <div class="col-sm-6">
          <label for="">{{$num++}}.- Pregunta:</label>
          <p>
            {{ $pre->PRE_nombre}}
            <input type="hidden" name="pre{{$p++}}" value="{{ $pre->PRE_id}}">
          </p>
        </div>
      <div class="col-sm-6">
        <div class="table-responsive">
          <table>
          <tr>
            <td><label>Respuestas</label></td>
            <td><label>Opción</label></td>

          </tr>
          <tr>
          @foreach($respuesta as $res)
            @if($res->PRE_id == $pre->PRE_id)
            <td >{{$res->RES_nombre}}</td>
            <td id="separador"><input type="checkbox" name="res{{$i++}}" value="{!!$res->RES_id!!}"></td>


            @endif
          </tr>
          @endforeach
          </table>
        </div>
      </div>
        <div class="col-sm-1">
        </div>
      </div>
    </div>

    @endforeach
    <input type="hidden" name="cantidad" value="{{$p-1}}">
    <input type="hidden" name="unidadid" value="{{ $unidad->UNI_id }}">
    <input type="hidden" name="nombre" value="{{ $unidad->UNI_nombre }}">
    <button type="submit" class="btn btn-primary">Enviar </button>
  {!! Form::close() !!}
@else
<div class="alert alert-dismissable alert-danger">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>Porfavor!</strong> agrege una pregunta como minimo
</div>
@endif
 <!-- fin -->
  </div>
</div>
</div>
@endsection

<!-- subcontenido -->
@section('subcontenido')

@endsection

<!-- Modals-->
@section('modal')

@endsection

<!--Script -->
@section('script')

@endsection

