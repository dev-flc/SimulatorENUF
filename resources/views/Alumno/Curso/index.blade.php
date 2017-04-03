@extends('Main.main')

@section('title', 'Registro')

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
#vertical-bar {
  border-left: 5px solid #ccc;
  height:auto;
  left: 50px;
  position: relative;

}
.btn-circle {
  position: relative;
  width: 60px;
  height: 60px;
  border: 1px solid rgb(133, 193, 233);
  background: rgb(255,255,255);
  text-align: center;
  margin: 5px;
  padding: 3px;
  font-size: 12px;
  line-height: 1.328571429;
  border-radius: 50%;
  left: -37px;
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
    <center><h1>{{ $curso->CUR_nombre }} <img src="/img/foto.png" alt=""></h1></center>
  </div>
  <div class="col-sm-12">
    <h2>Descripción</h2>
      <p>{{ $curso->CUR_descripcion }}
      </p>
    <hr>
  </div>
  <div class="col-sm-8">
@if ($unidad->count())
    <h2>Contenido</h2>
    @foreach($unidad as $uni)
    <div id="vertical-bar">
        <table>
          <tr>
            <td>
              <div class="btn-circle"><br>
                <span class="glyphicon glyphicon-star starr" aria-hidden="true"></span>
              </div>
            </td>
            <td class="separador"></td>
            <td><p>{{ $uni->UNI_nombre }}</p></td>
          </tr>
        </table>
      </div>
      @endforeach
@else
<div class="alert alert-dismissable alert-danger">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>Lo sentimos!</strong> Por el momento el curso no tiene contenido
</div>
@endif
    </div>
  <div class="col-sm-4">
  <h2>Profesor</h2>
    <div class="thumbnail">
      <img src="/img/profesor.jpg" id="profe" alt="...">
      <div class="caption">
        <center>
          <h3>Nombre Profesor Ahora</h3>
          <span class="glyphicon glyphicon-star-empty star" aria-hidden="true"></span>
          <span class="glyphicon glyphicon-star-empty star" aria-hidden="true"></span>
          <span class="glyphicon glyphicon-star-empty star" aria-hidden="true"></span>
          <span class="glyphicon glyphicon-star-empty star" aria-hidden="true"></span>
          <span class="glyphicon glyphicon-star-empty star" aria-hidden="true"></span>
        </center>
      </div>
    </div>

  </div>
    <br>
    <div class="col-sm-12">
      <div class="container-fluid">
        @include('flash::message')
      </div>
    <hr>
    <h2>Registrarme</h2>
    {!! Form::open(['route'=>'curos_registro.store','method'=>'POST']) !!}
      {{ Form::hidden('idcurso',$curso->CUR_id)}}
      {{ Form::hidden('idalumno',$alumno->ALU_id)}}
      {{ Form::text('clave',null,['class'=>'clave','placeholder'=>'Ingrese la cleve del curso','required'])}}<br><br>
      <center>
      {{ Form::button('Registrarme', array('class'=>'btn-registro', 'type'=>'submit')) }}<br><br>
      </center>
    {!! Form::close() !!}
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

