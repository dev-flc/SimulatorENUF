<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Crear curso</title>
</head>
<body>
	<h1>Crear Curso</h1>
	{!! Form::open(['route'=>'curso.store','method'=>'POST']) !!}
	<div class="form-group">
		{!! Form::label('nombre','Nombre ') !!}
		{!! Form::text('nombre',null,['class'=>'form-control','required'])!!}
	</div>
	<div class="form-group">
		{!! Form::label('cupos','Cupos') !!}
		{!! Form::number('cupos',null,['class'=>'form-control','required'])!!}
	</div>
	<select  name="profesor" class="form-control" required>
		<option value="">Seleccione un profesor</option>
		@foreach ($profesor as $pro)
        <option value="{{ $pro->PRO_id}}">{{ $pro->PRO_nombre}}  </option>
        @endforeach
    </select>


	<div class="form-group">
    {{ Form::button('<span class="glyphicon glyphicon-ok"></span> Registrar', array('class'=>'btn btn-success pull-right', 'type'=>'submit')) }}
    </div>
    {!! Form::close() !!}
</body>
</html>