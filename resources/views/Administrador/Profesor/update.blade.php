@extends('Main.mainadmin')

@section('title', 'Profesores')
@section('styles')
  <link rel="stylesheet" href="{{ asset('css/button-menu.css') }}">
  <link rel="stylesheet" href="{{ asset('css/updtprofesor.css') }}">
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
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-7 subfinal">
    <div class="container-fluid panelimg"><br>
     <center>
     <h3>Datos personales</h3></center>
      <div class="container-fluid">
        {!! Form::open(['route' => ['profesores.update', $profesor->PRO_id],'method' => 'put']) !!}
      <div class="form-group">
        {!! Form::label('nombre','Nombre') !!}
        {!! Form::text('nombre',$profesor->PRO_nombre,['class'=>'form-control','id'=>'nombre'])!!}
      @if($errors->has('nombre'))
      <span style="color: red;">{{$errors->first('nombre')}}</span>
    @endif
      </div>
      <div class="form-group">
        {!! Form::label('apellido_p','Apellido Paterno') !!}
        {!! Form::text('apellido_p',$profesor->PRO_apellido_p,['class'=>'form-control','id'=>'apellido_p'])!!}
      @if($errors->has('apellido_p'))
      <span style="color: red;">{{$errors->first('apellido_p')}}</span>
    @endif
      </div>
      <div class="form-group">
       {!! Form::label('apellido_m','Apellido Materno') !!}
       {!! Form::text('apellido_m',$profesor->PRO_apellido_m,['class'=>'form-control','id'=>'apellido_m'])!!}
      @if($errors->has('apellido_m'))
      <span style="color: red;">{{$errors->first('apellido_m')}}</span>
      @endif
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
      {!! Form::label('estatus','estatus ') !!}
      @if( $profesor->PRO_estatus=='habilitado')
        {{ Form::radio('estatus', 'habilitado', true) }} habilitado
        {{ Form::radio('estatus', 'deshabilitado') }} deshabilitar
      @else
        {{ Form::radio('estatus', 'habilitado') }} habilitado
        {{ Form::radio('estatus', 'deshabilitado',true) }} deshabilitar
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
    </div>
    <br>
    <br>
  </div>

  <div class="col-sm-5 subfinal">
    <div class="container-fluid panelimg"><br>
      <center><img src="/img/contra.png" alt="" id="divimg">
      <h3>Cambiar contraseña</h3></center><br>
         {!! Form::open(['route' => ['updatepass', $profesor->USE_id],'method' => 'put']) !!}
     <div class="form-group">
        {!! Form::label('contraseña','Nueva Contraseña') !!}
        {!! Form::password('password',['class'=>'form-control'])!!}
      @if($errors->has('password'))
      <span style="color: red;">{{$errors->first('password')}}</span>
      @endif
  </div>
  <div class="form-group">
       {!! Form::label('verificar_contrasena','Verificar Contraseña') !!}
       {!! Form::password('password_confirmation',['class'=>'form-control'])!!}
     @if($errors->has('password_confirmation'))
      <span style="color: red;">{{$errors->first('password_confirmation')}}</span>
    @endif
  </div>

   <div class="form-group">
   {{ Form::button('<span class="glyphicon glyphicon-ok"></span> Guardar', array('class'=>'btn-button-a pull-right', 'type'=>'submit')) }}
     <a href="{{ route('profesores.index') }}">
      <button type="button" class="btn-button-c pull-right" data-dismiss="modal">
         Cancelar
         <span class="glyphicon glyphicon-remove"></span>
      </button>
      </a>
    </div>
  {!! Form::close() !!}
    </div>
    </div>
  </div>
</div>

@endsection


@section('subcontenido')

@endsection


@section('script')
