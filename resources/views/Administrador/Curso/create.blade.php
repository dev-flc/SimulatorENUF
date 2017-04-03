<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Crear curso</title>
   <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
   <link rel="stylesheet" href="{{ asset('css/bootstrap-select.css') }}">
</head>
<body>
	 <ul>
    <li><a href="{{ route('cursos.index') }}">cursos</a></li>
    <li><a href="{{ route('cursos.create') }}">Crear cursos</a></li>
    <li><a href="{{ route('profesores.index') }}">profesores</a></li>
    <li><a href="{{ route('profesores.create') }}">Create profesores</a></li>
    <li><a href="{{ url('/logout') }}" >cerrar <span class="glyphicon glyphicon-user" aria-hidden="true"></span></a></li>
  </ul>
  <style>
    #d
    {
      width: 10px;
      height: 10px;
    }
  </style>
	{!! Form::open(['route'=>'cursos.store','method'=>'POST']) !!}
  <div class="form-group">
  <select title="Select your surfboard" class="selectpicker">
  <option id="d" data-thumbnail="/img/curso/img1.png">tecnologia</option>
  <option id="d" data-thumbnail="/img/curso/img2.png">amviente</option>
  <option id="d" data-thumbnail="/img/curso/img3.png">Ciencia</option>
</select>
  </div>
	<div class="form-group">
		{!! Form::label('nombre','Nombre ') !!}
		{{ Form::text('nombre',null,['class'=>'form-control','required']) }}
	</div>
  <div class="form-group">
    {{ Form::label('Descripcion','Descripcion ') }}
    {{ Form::textarea('descripcion', null, ['class' => 'field','placeholder'=>'Descripcion']) }}
  </div>
	<div class="form-group">
		{!! Form::label('cupos','Cupos') !!}
		{!! Form::number('cupos',null,['class'=>'form-control','required'])!!}
	</div>
  <div class="form-group">
    {!! Form::label('clave','Clave') !!}
    {!! Form::number('clave',null,['class'=>'form-control','required'])!!}
  </div>
	<select  name="profesor" class="form-control" required>
		<option value="">Seleccione un profesor</option>
		@foreach ($profesor as $pro)
        <option value="{{ $pro->PRO_id}}">{{ $pro->PRO_nombre}} {{ $pro->PRO_apellido_p}} {{ $pro->PRO_apellido_m }}  </option>
        @endforeach
    </select>



	<div class="form-group">
    {{ Form::button('<span class="glyphicon glyphicon-ok"></span> Registrar', array('class'=>'btn btn-success pull-right', 'type'=>'submit')) }}
  </div>
  {!! Form::close() !!}

<script  src="{{ asset('plugins/jQuery/jquery-3.1.1.js') }}"></script>
<script  src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>bootstrap-select
<script  src="{{ asset('js/bootstrap-select/bootstrap-select.js') }}"></script>
<script type="text/javascript">
 $(document).ready(function(){
  $('select').selectpicker();
    });

</script>
</body>
</html>
