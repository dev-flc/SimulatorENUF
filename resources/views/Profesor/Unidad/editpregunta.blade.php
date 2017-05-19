@extends('Main.mainprofesor')

@section('title', 'Cursos')
@section('styles')
  <link rel="stylesheet" href="{{ asset('css/proprincipal.css') }}">
@endsection
<!-- Contenido Principal -->
@section('imagenprincipal')
  <div class="seccionone">
    <img id="pri1" src="/img/pri2.png" alt="">
  </div>
@endsection

<!-- Contenido -->
@section('content')
<br>
<div class="container-fluid">
  {!! Form::open(['route' => ['unidad.update', $pre->PRE_id],'files'=>'true','method' => 'put']) !!}
    <div class="form-group">
        {!! Form::label('Pregunta','Pregunta') !!}
        {!! Form::text('Pregunta',$pre->PRE_nombre,['class'=>'form-control','required'])!!}
    </div>
    <div class="row">
    @foreach ($res as $re)
      <div class="col-sm-9">
        <div class="form-group">
          {!! Form::label('Pregunta','Respuesta'." ".$con++) !!}
          {!! Form::text('res'.$con2++,$re->RES_nombre,['class'=>'form-control','required'])!!}
        </div>
      </div>
      <div class="col-sm-3">
        <div class="form-group">
          {!! Form::label('Pregunta','Tipo') !!}
          {{Form::select('tipo'.$con3++,['1'=>'Correcta','2'=>'Falsa'],$re->TIP_id,['class'=>'form-control']) 
          }}
        </div>
      </div>
    @endforeach
    </div>
    <div class="form-group">
        {!! Form::label('foto','Foto') !!}
        {!! Form::file('file',['class'=>'form-control'])!!}
    </div>    
   

  <div class="form-group">
    {{ Form::button('<span class="glyphicon glyphicon-ok"></span> Registrar', array('class'=>'btn btn-success pull-right', 'type'=>'submit')) }}
    </div>
    {!! Form::close() !!}
</div>
<br>
@endsection

<!-- subcontenido -->
@section('subcontenido')

@endsection

