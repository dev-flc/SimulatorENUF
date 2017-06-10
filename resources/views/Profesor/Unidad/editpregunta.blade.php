@extends('Main.mainprofesor')

@section('title', 'Cursos')
@section('styles')
  <link rel="stylesheet" href="{{ asset('css/proprincipal.css') }}">
  <link rel="stylesheet" href="{{ asset('css/profesorcursosshow.css') }}">
@endsection
<!-- Contenido Principal -->
@section('imagenprincipal')
  <div class="seccionone">
    <img id="pri1" src="/img/pri2.png" alt="">
    <h1 class="titulo">Editar pregunta</h1>
  </div>
@endsection

<!-- Contenido -->
@section('content')
<br>
<div class="container-fluid">
  {!! Form::open(['route' => ['unidad.update', $pre->PRE_id],'files'=>'true','method' => 'put']) !!}
    <div class="form-group">
        {!! Form::label('Pregunta','Pregunta') !!}
        {!! Form::text('Pregunta',$pre->PRE_nombre,['class'=>'form-control'])!!}
    </div>
    <div class="row">
    @foreach ($res as $re)
      <div class="col-sm-9">
        <div class="form-group">
        {{ Form::hidden('idres'.$con4++, $re->RES_id ) }}
          {!! Form::label('Respuesta','Respuesta'." ".$con++) !!}
          {!! Form::text('res'.$con2++,$re->RES_nombre,['class'=>'form-control'])!!}
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
      <button type="button" class="btn-button-c" data-dismiss="modal">
          Cancelar
          <span class="glyphicon glyphicon-remove"></span>
      </button>
    {{ Form::button('<span class="glyphicon glyphicon-ok"></span> Actualizar', array('class'=>'btn-button-a pull-right', 'type'=>'submit')) }}
    
    {!! Form::close() !!}
    </div>
  </div>
</div>
<br>
@endsection
<!-- subcontenido -->
@section('subcontenido')

@endsection





