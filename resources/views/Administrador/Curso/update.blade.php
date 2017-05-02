<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>actualizar curso</title>
</head>

 <style type="text/css">
 
 .imgheader
{
  background: url("/img/pri1.png");
  height: 200px;
}
.imgheader h2
{
  color: rgb(52, 73, 94);
  font-size: 40px;
}
.user, .pass
{
  width: 80%;
  outline: none;
  padding: 15px;
  background: none;
  border: none;
  border-bottom: 2px solid rgb(220,220,220);
  color: rgb(52, 152, 219);
  font-size: 15px;
}
.user:focus, .user:active ,.pass:focus, .pass:active
{
  outline: none;
  border-bottom: 2px solid rgb(52, 152, 219);
  color: rgb(52, 152, 219);
}

 .btn-button-c
    {
      background: rgb(255,255,255);
      border: none;
      border: 1px solid rgb(192, 57, 43) ;
      width: 150px;
      height: 40px;
      margin: 5px;
      padding: 5px;
      color: rgb(192, 57, 43);
      transition: .6s;
    }
    .btn-button-a
    {
      background: rgb(255,255,255);
      border: none;
      border: 1px solid rgb(39, 174, 96) ;
      width: 150px;
      height: 40px;
      margin: 5px;
      padding: 5px;
      color: rgb(39, 174, 96);
      transition: .6s;
    }
    .btn-button-c:hover
    {
      background: rgb(192, 57, 43);
      color: rgb(255,255,255);
    }
    .btn-button-a:hover
    {
      background: rgb(39, 174, 96);
      color: rgb(255,255,255);
    }
 </style>

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


  <div class="form-group">
    {{ Form::button('<span class="glyphicon glyphicon-ok"></span> Registrar', array('class'=>'btn btn-success pull-right', 'type'=>'submit')) }}
    </div>



    {!! Form::close() !!}
</body>
</html>
