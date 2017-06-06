@extends('Main.mainadmin')

@section('title', 'Profesores')
@section('styles')
  <link rel="stylesheet" href="{{ asset('css/button-menu.css') }}">
  <link rel="stylesheet" href="{{ asset('css/adminprofupdate.css') }}">
@endsection

@section('imagenprincipal')
  <div class="seccionone">
 
  <img id="pri1" src="/img/pri2.png" alt="">
  <h1 class="titulo">Editar profesor</h1>
  </div>
@endsection

@section('content')
<br>
<br>
<br>
<div class="container-fluid">
  {!! Form::open(['route' => ['profesores.update', $profesor->PRO_id],'method' => 'put']) !!}
  <div class="form-group">
    {!! Form::label('nombre','Nombre') !!}
    {!! Form::text('nombre',$profesor->PRO_nombre,['class'=>'noom','id'=>'nombre','required'])!!}
  </div>
  <div class="form-group">
    {!! Form::label('apellido_p','Apellido Paterno') !!}
    {!! Form::text('apellido_p',$profesor->PRO_apellido_p,['class'=>'aap','id'=>'apellido_p','required'])!!}
  </div>
  <div class="form-group">
    {!! Form::label('apellido_m','Apellido Materno') !!}
    {!! Form::text('apellido_m',$profesor->PRO_apellido_m,['class'=>'aam','id'=>'apellido_m','required'])!!}
  </div>
  <div class="form-group">
    @if( $profesor->PRO_sexo=='hombre')
    {!! Form::label('sexo','Sexo ') !!}
    {{ Form::radio('sex', 'hombre','true') }} Hombre  {{ Form::radio('sex', 'mujer') }} Mujer
    @else
    {!! Form::label('sexo','Sexo ') !!}
    {{ Form::radio('sex', 'hombre') }} Hombre  {{ Form::radio('sex', 'mujer','true') }} Mujer
    @endif
  </div>
   <div class="form-group">
   {{ Form::button('<span class="glyphicon glyphicon-ok"></span> Actualizar', array('class'=>'btn-button-a pull-right', 'type'=>'submit')) }}
     <a href="{{ route('profesores.index') }}">
      <button type="button" class="btn-button-c pull-right" data-dismiss="modal">
         Cancelar
         <span class="glyphicon glyphicon-remove"></span>
      </button>
      </a>
    </div>
  {!! Form::close() !!}
</div>
<br>
<br>
<br>
@endsection


@section('subcontenido')
<center>
    <br>
    <br>
    <br>
    <br>
        <p id="titulo">Escuela Normal Urbana Federal</p>
        <p id="subtitulo"> "Profr. Rafael Ramírez"</p>
        <hr id="hr">  </hr>
        <p id="conten"> Licenciatura en Educacion Secundaria<br>
                        con Especialidad en Telesecuandaria </p>
</center>
@endsection


@section('script')
