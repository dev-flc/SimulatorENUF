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
  <div class="col-sm-8">
    <center><h1>{{ $curso->CUR_nombre }}</h1></center>
    <hr><br><br>
    {!! Form::open(['route'=>'curos_registro.store','method'=>'POST']) !!}
      {{ Form::hidden('idcurso',$curso->CUR_id)}}
      {{ Form::text('clave',null,['class'=>'clave','placeholder'=>'Ingrese la cleve del curso','required'])}}<br><br>
      <center>
      {{ Form::button('Registrarme', array('class'=>'btn-registro', 'type'=>'submit')) }}
      </center>
    {!! Form::close() !!}
  </div>
</div>
<br>
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

