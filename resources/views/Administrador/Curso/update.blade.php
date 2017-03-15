<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>actualizar curso</title>
</head>
<body>
	<h1>actualizar curso</h1>
   <ul>
    <li><a href="{{ route('cursos.index') }}">cursos</a></li>
    <li><a href="{{ route('cursos.create') }}">Crear cursos</a></li>
    <li><a href="{{ route('profesores.index') }}">profesores</a></li>
    <li><a href="{{ route('profesores.create') }}">Create profesores</a></li>
  </ul>
	{!! Form::open(['route' => ['cursos.update', $curso->CUR_id],'method' => 'put']) !!}
	<div class="form-group">
    	{!! Form::label('nombre','Nombre') !!}
        {!! Form::text('nombre',$curso->CUR_nombre,['class'=>'form-control','required'])!!}
    </div>
    <div class="form-group">
    	{!! Form::label('cupos','Cupos') !!}
        {!! Form::number('cupos',$curso->CUR_cupos,['class'=>'form-control','required'])!!}
    </div>
	<label for="profesor">Profesor</label>
    <select  name="profesor" class="form-control" required>
        <option value="">Seleccione un profesor</option>
        @foreach ($profesores as $pro)
        <option value="{{ $pro->PRO_id}}">{{ $pro->PRO_nombre}} {{ $pro->PRO_apellido_p}} {{ $pro->PRO_apellido_m}} </option>
        @endforeach
    </select>


	   <div class="form-group">
    {{ Form::button('<span class="glyphicon glyphicon-ok"></span> Actualizar', array('class'=>'btn btn-success pull-right', 'type'=>'submit')) }}
    </div>



    {!! Form::close() !!}
</body>
</html>
