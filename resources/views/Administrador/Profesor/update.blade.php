<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Update Profesor</title>
</head>
<body>
  <h1>Update Profesor</h1>

{!! Form::open(['route' => ['profesores.update', $profesor->PRO_id],'method' => 'put']) !!}
  <div class="form-group">
    {!! Form::label('nombre','Nombre') !!}
    {!! Form::text('nombre',$profesor->PRO_nombre,['class'=>'form-control','id'=>'nombre','required'])!!}
  </div>
  <div class="form-group">
    {!! Form::label('apellido_p','Apellido Paterno') !!}
    {!! Form::text('apellido_p',$profesor->PRO_apellido_p,['class'=>'form-control','id'=>'apellido_p','required'])!!}
  </div>
  <div class="form-group">
    {!! Form::label('apellido_m','Apellido Materno') !!}
    {!! Form::text('apellido_m',$profesor->PRO_apellido_m,['class'=>'form-control','id'=>'apellido_m','required'])!!}
  </div>
  <div class="form-group">
    @if( $profesor->PRO_sexo=='hombre')
    {!! Form::label('sexo','Sexo ') !!}
    {{ Form::radio('sex', 'hombre','true') }} Hombre  {{ Form::radio('sex', 'mujer') }} Mujer
    @else
    {!! Form::label('sexo','Sexo ') !!}
    {{ Form::radio('sex', 'hombre') }} Hombre  {{ Form::radio('sex', 'mujer','true') }} Mujer
    @endif
  </div>
   <div class="form-group">
    {{ Form::button('<span class="glyphicon glyphicon-ok"></span> Actualizar', array('class'=>'btn btn-success pull-right', 'type'=>'submit')) }}
    </div>
  {!! Form::close() !!}


</body>
</html>
