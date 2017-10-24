@extends('Main.mainprofesor')

@section('title', 'Cursos')
@section('styles')
  <link rel="stylesheet" href="{{ asset('css/proprincipal.css') }}">
  <link rel="stylesheet" href="{{ asset('css/profesorcursosshow.css') }}">
   <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
@endsection
<!-- Contenido Principal -->
@section('imagenprincipal')
  <div class="seccionone">
    <img id="pri1" src="/img/pri2.png" alt="">
    <h1 class="titulo">Editar tema</h1>
  </div>
@endsection

<!-- Contenido -->
@section('content')
<br>
<div class="container-fluid">
  {!! Form::open(['route' => ['updateunidad', $unidad->UNI_id],'files'=>'true','method' => 'put']) !!}
  <div class="form-group">
          {!! Form::label('nombre','Nombre del tema') !!}
          {!! Form::text('nombre',$unidad->UNI_nombre,['class'=>'form-control'])!!}
        </div>
        <br>
        <div class="form-group">
          {!! Form::label('nombre','Descripción del material de apoyo') !!}
          {!! Form::text('nombre',$unidad->UNI_nombre,['class'=>'form-control'])!!}
        </div>
     <div class="form-group">
        <input type="hidden" name="curso" value="{{ $curso }}">
        {!! Form::label('file','Material de apoyo') !!}
        {!! Form::file('file',['class'=>'form-control']) !!}</p>
        </div>
        <br>
      <h3>Configuración de datos para el Examen Final</h3>
        <div class="form-group">
          {!! Form::label('fecha_de_inicio','Fecha de inicio') !!}
          {!! Form::date('fecha_de_inicio',$unidad->UNI_fecha_inicio,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
          {!! Form::label('fecha_final','Fecha final') !!}
          {!! Form::date('fecha_final',$unidad->UNI_fecha_final,['class'=>'form-control'])!!}
        </div>
        <br>
        <div class="form-group">
          {!! Form::label('numero_de_preguntas','Asignacion general de puntos') !!}
          {!! Form::number('numero_de_preguntas',$unidad->UNI_numero_pregunta,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
          {!! Form::label('fecha','Tiempo de examen en minutos') !!}
          {!! Form::number('tiempo',$unidad->UNI_tiempo,['class'=>'form-control'])!!}
        </div>
        <br>
        <div class="form-group">
          {!! Form::label('fecha','Horario de aplicación') !!}
          {!! Form::number('tiempo',$unidad->UNI_tiempo,['class'=>'form-control'])!!}
        </div>
      
  <div class="form-group">
      {{ Form::button('<span class="glyphicon glyphicon-ok"></span> Actualizar', array('class'=>'btn-button-a pull-right', 'type'=>'submit')) }}
      <a href="{{ route('unidad.show', $unidad->UNI_id) }}">
      <button type="button" class="btn-button-c pull-right">
          Cancelar
          <span class="glyphicon glyphicon-remove"></span>
      </button>
      </a>
    {!! Form::close() !!}
    </div>
  </div>
</div>
<br>
@endsection
<!-- subcontenido -->
@section('subcontenido')

@endsection





