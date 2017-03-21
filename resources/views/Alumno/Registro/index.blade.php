@extends('Main.main')

@section('title', 'Resgistro alumno')
@section('styles')
  <link rel="stylesheet" href="{{ asset('css/registro.css') }}">
@endsection
<!-- Contenido Principal -->
@section('imagenprincipal')
  <div class="seccionone">
  </div>
@endsection

<!-- Contenido -->
@section('content')
<center>
  <h1>Registro</h1>
</center>
<div class="container-fluid ">
<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-8">
  {!! Form::open(['route'=>'register','method'=>'POST']) !!}
  <div class="form-group">
    {{ Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre','required'])}}
  </div>
  <div class="form-group">
    {{ Form::text('apellido_p',null,['class'=>'form-control','placeholder'=>'Apellido Paterno','required'])}}
  </div>
  <div class="form-group">
    {{ Form::text('apellido_m',null,['class'=>'form-control','placeholder'=>'Apellido Materno','required'])}}
  </div>
  <div class="form-group">
    {{ Form::number('edad',null,['class'=>'form-control','placeholder'=>'Edad','required'])}}
  </div>
  <div class="form-group">
    {{ Form::number('matricula',null,['class'=>'form-control','placeholder'=>'Matricula','required'])}}
  </div>
  <div class="form-group">
    {{ Form::radio('sexo', 'hombre', true) }} Hombre  {{ Form::radio('sex', 'mujer') }} Mujer
  </div>
  <hr>
  <div class="form-group">
    {{ Form::text('user',null,['class'=>'form-control','placeholder'=>'Usuario','required'])}}
  </div>
  <div class="form-group">
    {{ Form::email('email',null,['class'=>'form-control','placeholder'=>'Email','required'])}}
  </div>
  <div class="form-group">
    {{ Form::password('password', ['class' => 'form-control','placeholder'=>'Contraseña','required']) }}
  </div>
   <div class="form-group">
    {{ Form::password('passwordverific', ['class' => 'form-control','placeholder'=>'Verificar Contraseña','required']) }}
  </div>
  <div class="form-group">
    {{ Form::button('<span class="glyphicon glyphicon-ok"></span> Registrar', array('class'=>'btn btn-success pull-right', 'type'=>'submit')) }}
  </div>
  {!! Form::close() !!}
</div>
<div class="col-sm-2"></div>
</div>
<br>
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

