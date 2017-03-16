@extends('Main.main')

@section('title', 'Preguntas')

@section('styles')
  <link rel="stylesheet" href="{{ asset('css/button-menu.css') }}">
  <link rel="stylesheet" href="{{ asset('css/profesorcursosshow.css') }}">
  <style type="text/css">
    .borderunidad
    {
      border: 1px solid rgb(230,230,230);
    }
/* hide input */
input.radio:empty {
  margin-left: -999px;
}

/* style label */
input.radio:empty ~ label {
  position: relative;
  float: left;
  line-height: 2.5em;
  text-indent: 3.25em;
  margin-top: 2em;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

input.radio:empty ~ label:before {
  position: absolute;
  display: block;
  top: 0;
  bottom: 0;
  left: 0;
  content: '';
  width: 2.5em;
  background: #D1D3D4;
  border-radius: 3px 0 0 3px;
}

/* toggle hover */
input.radio:hover:not(:checked) ~ label:before {
  content:'\2714';
  text-indent: .9em;
  color: #C2C2C2;
}

input.radio:hover:not(:checked) ~ label {
  color: #888;
}

/* toggle on */
input.radio:checked ~ label:before {
  content:'\2714';
  text-indent: .9em;
  color: #9CE2AE;
  background-color: #4DCB6D;
}

input.radio:checked ~ label {
  color: #777;
}

/* radio focus */
  </style>
@endsection

<!-- Contenido Principal -->
@section('imagenprincipal')
  <div class="seccionone">
  </div>
@endsection

<!-- Contenido -->
@section('content')

<div class="container-fluid">
<br>
<div class="row">
  <div class="col-sm-12">
    <center><h1>{{$curso->CUR_nombre}}</h1></center><br><hr></div>
  <div class="col-sm-4">
    <center>
      <p id="centradop">Cupos del curso</p>
      <h2>
        <span class="label label-primary">
          # {{ $curso->CUR_cupos}}
        </span>
      </h2>
    </center>
  </div>
  <div class="col-sm-4">
    <center>
      <p id="centradop">Cupos disponibles</p>
      <h2>
        <span class="label label-success">
          # {{ $curso->CUR_cupos}}
        </span>
      </h2>
    </center>
  </div>
  <div class="col-sm-4">
    <center>
      <p id="centradop">Fecha</p>
      <h2>
        <span class="label label-default">
          {{ $curso->CUR_fecha}}
        </span>
      </h2>
    </center>
  </div>
</div>
<hr>
<div class="row">
  <div class="col-sm-12">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6">
        <div class="container-fluid borderunidad ">
        <h2>
        <center>
          <img id="alumnosimg" src="/img/book1.png" alt="">
          Unidad:<br> {{ $unidad->UNI_nombre }}
        </center>
        </h2>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="container-fluid borderunidad">
        <h2>
        <center>
          <img id="alumnosimg" src="/img/calendar1.png" alt="">
          Fecha Examen:<br> {{ $unidad->UNI_fecha_final }}
        </center>
        </h2>
        </div>
      </div>
    </div>
    <br>
    <br>
    <div class=" container-fluid cuadro">
      <div class="row">
        <div class="col-sm-6">Pregunta <br>

        </div>
        <div class="col-sm-3">Respuestas</div>
        <div class="col-sm-3">
          <a href=""><button class="btn btn-danger">eliminar</button></a>
          <a href=""><button class="btn btn-primary">Editar</button></a>
        </div>
      </div>
    </div>
  </div>
  </div>
</div>
</div>
  <br>
  <br>
  <br>
  <br>
  <br>
<!--button -->
<div class="contenedor">
<button class="botonF1 tooltip-right1" data-toggle="modal" data-target="#pregunta"  data-tooltip="Nueva Pregunta">
  <span>+</span>
</button>
</div>
<!--button Fin -->
@endsection

<!-- subcontenido -->
@section('subcontenido')

@endsection

<!-- Modals-->
@section('modal')
<!-- Modal Alumnos -->
<div class="modal fade" id="pregunta" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h3 class="modal-title colordiv" id="myModalLabel">Alumnos</h3>
      </div>
      <div class="modal-body">
      {!! Form::open(['route'=>'profesores.store','method'=>'POST']) !!}
        <div class="form-group">
          {!! Form::label('pregunta','Pregunta') !!}
          {!! Form::text('pregunta',null,['class'=>'form-control','id'=>'pregunta','required'])!!}
        </div>

        <div class="row">
          <div class="col-sm-8">
            <div class="form-group">
            {!! Form::label('respuesta1','Respuesta 1') !!}
            {!! Form::text('respuesta1',null,['class'=>'form-control','id'=>'respuesta1','required'])!!}
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <br>
              {{ Form::radio('tipo1', 'falsa', true) }} Falsa
              {{ Form::radio('tipo1', 'correcta') }} Correcta
            </div>
          </div>
          <div class="col-sm-8">
            <div class="form-group">
            {!! Form::label('respuesta2','Respuesta 2') !!}
            {!! Form::text('respuesta2',null,['class'=>'form-control','id'=>'respuesta2','required'])!!}
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <br>
              {{ Form::radio('tipo2', 'falsa', true) }} Falsa
              {{ Form::radio('tipo2', 'correcta') }} Correcta
            </div>
          </div>
          <div class="col-sm-8">
            <div class="form-group">
            {!! Form::label('respuesta3','Respuesta 3') !!}
            {!! Form::text('respuesta3',null,['class'=>'form-control','id'=>'respuesta3','required'])!!}
            </div>
          </div>
          <div class="col-sm-4">

            <div class="form-group">
              <br><!-- estoy aqui -->
              {{ Form::radio('tipo3', 'falsa',true) }} Falsa
              {{ Form::radio('tipo3', 'correcta') }} Correcta
            </div>
          </div>
          <div class="col-sm-8">
            <div class="form-group">
            {!! Form::label('respuesta4','Respuesta 4') !!}
            {!! Form::text('respuesta4',null,['class'=>'form-control','id'=>'respuesta4','required'])!!}
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <br>
              {{ Form::radio('tipo4', 'falsa', true) }} Falsa
              {{ Form::radio('tipo4', 'correcta') }} Correcta
            </div>
          </div>
        </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">
          Cancelar
          <span class="glyphicon glyphicon-remove"></span>
        </button>
        {{ Form::button('<span class="glyphicon glyphicon-ok"></span> Agregar', array('class'=>'btn btn-success pull-right','id'=>'registrar', 'type'=>'submit')) }}

      {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>
<!-- Modal Final Alumnos -->
@endsection

<!--Script -->
@section('script')

@endsection

