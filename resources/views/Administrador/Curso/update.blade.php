@extends('Main.mainadmin')

@section('title', 'Cursos')
@section('styles')
  <link rel="stylesheet" href="{{ asset('css/button-menu.css') }}">
  <link rel="stylesheet" href="{{ asset('css/admincursoupdate.css') }}">
@endsection

@section('imagenprincipal')
  <div class="seccionone">
  <img id="pri1" src="/img/pri2.png" alt="">
  <h1 class="titulo">Editar curso</h1>
  </div>
@endsection

@section('content')
<br>
<br>
<br>
<div class="container-fluid">
  {!! Form::open(['route' => ['cursos.update', $curso->CUR_id],'method' => 'put']) !!}
    <div class="form-group">
        {!! Form::label('nombre','Nombre') !!}
        {!! Form::text('nombre',$curso->CUR_nombre,['class'=>'form-control','required'])!!}
    </div>
    <div class="form-group">
        {!! Form::label('cupos','Cupos') !!}
        {!! Form::number('cupos',$curso->CUR_cupos,['class'=>'form-control','required'])!!}
    </div>
    <div class="form-group">
        {!! Form::label('clave','Clave') !!}
        {!! Form::number('clave',$curso->CUR_clave,['class'=>'form-control','required'])!!}
    </div>
    <div class="form-group">
      {{ Form::radio('estatus', 'habilitado', true) }} habilitado
      {{ Form::radio('estatus', 'deshabilitado') }} deshabilitar
    </div>
    <label for="profesor">Profesor</label>
    <select  name="profesor" class="form-control" required>
        <option value="{{ $profesor->PRO_id}}">{{ $profesor->PRO_nombre }} {{ $profesor->PRO_apellido_p }} {{ $profesor->PRO_apellido_m }}*</option>
        @foreach ($profesores as $pro)
        @if($profesor->PRO_id==$pro->PRO_id)
        @else if
        <option value="{{ $pro->PRO_id}}">{{ $pro->PRO_nombre}} {{ $pro->PRO_apellido_p}} {{ $pro->PRO_apellido_m}} </option>
        @endif
        @endforeach
    </select>
<br>
<div class="form-group">
  {{ Form::button('<span class="glyphicon glyphicon-ok"></span> Actualizar', array('class'=>'btn-button-a pull-right', 'type'=>'submit')) }}
<a href="{{ route('cursos.index') }}">
  <button type="button" class="btn-button-c pull-right">
    Cancelar
    <span class="glyphicon glyphicon-remove"></span>
  </button>
</a>
</div>
{!! Form::close() !!}
</div>
<br>
<br>
@endsection


@section('subcontenido')

@endsection


@section('script')
