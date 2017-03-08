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
    {{ Form::button('<span class="glyphicon glyphicon-ok"></span> Registrar', array('class'=>'btn btn-success pull-right', 'type'=>'submit')) }}
    </div>
    {!! Form::close() !!}
</body>
</html>