@extends('Main.main')

@section('title', 'Unidad')

@section('styles')
  <link rel="stylesheet" href="{{ asset('css/button-menu.css') }}">
  <link rel="stylesheet" href="{{ asset('css/profesorcursosshow.css') }}">
  <style type="text/css">
    .borderunidad
    {
      border: 1px solid rgb(230,230,230);
    }
    #respuestaid
    {
      width: 100%;
    }
    .btn-pre
    {
      border-radius: 50%;
      width: 40px;
      height: 40px;
      border: none;
      margin: 2px;
    }
    .btn-editar
    {
      color: rgb(128, 139, 150);
      border: 1px solid rgb(52, 152, 219);
      background: rgb(255,255,255);
      transition: .2s;
    }
    .btn-eliminar
    {
      color: rgb(128, 139, 150);
      border: 1px solid rgb(231, 76, 60);
      background: rgb(255,255,255);
      transition: .2s;
    }
    .btn-eliminar:hover
    {
      color: rgb(255,255,255);
      background: rgb(231, 76, 60);
    }
     .btn-editar:hover
    {
      color: rgb(255,255,255);
      background: rgb(52, 152, 219);
    }
    #ress
    {
      width: 4%;
    }
    #separador
    {
      width: 1%;
      color: rgb(191, 201, 202);
    }
    .si
    {
      color: rgb(130, 224, 170);
    }
    .no
    {
      color: rgb(241, 148, 138);
    }
    table
    {
      width: 100%;
    }
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

        <div class="col-sm-6">
          <center><p>Preguntas:</p></center>
        </div>
        <div class="col-sm-5">
          <center><p>Respuestas:</p></center>
        </div>
        <div class="col-sm-1">
          <center><p>Opción</p></center>
        </div>
      </div>
    </div>
    @foreach($pregunta as $pre)
    <div class=" container-fluid cuadro">
      <div class="row">

        <div class="col-sm-6">
          <p>
            {{ $pre->PRE_nombre}}
          </p>
        </div>
      <div class="col-sm-5">
        <div class="table-responsive">
          <table>
          @foreach($respuesta as $res)
            @if($res->PRE_id == $pre->PRE_id)
            @if($res->TIP_id==1)
          <tr>
            <td id="separador">|</td>
            <td id="ress">
              <span class="glyphicon glyphicon glyphicon-ok si" aria-hidden="true"></span>
            </td>
            @else
            <td id="separador">|</td>
            <td id="ress">
              <span class="glyphicon glyphicon glyphicon-remove no" aria-hidden="true"></span>
            </td>
            @endif
            <td >{{$res->RES_nombre}}</td>
            <td id="separador">|</td>
            @endif
          </tr>
          @endforeach
          </table>
        </div>
      </div>

        <div class="col-sm-1">
        <center>
          <a href=""><button class="btn-eliminar btn-pre"><span class="glyphicon glyphicon glyphicon-trash" aria-hidden="true"></span></button></a>
          <a href=""><button class="btn-editar btn-pre"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button></a>
          </center>
        </div>

      </div>
    </div>
       @endforeach
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
        <h3 class="modal-title colordiv" id="myModalLabel">Registro de Pregunta</h3>
      </div>
      <div class="modal-body">
      {!! Form::open(['route'=>'pregunta.store','method'=>'POST']) !!}
        <div class="form-group">
          {!! Form::label('unidad','unidad') !!}
          {!! Form::text('unidad',$unidad->UNI_id,['class'=>'form-control','id'=>'pregunta','required'])!!}
        </div>
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
              {{ Form::radio('tipo1', '2', true) }} Falsa
              {{ Form::radio('tipo1', '1') }} Correcta
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
              {{ Form::radio('tipo2', '2', true) }} Falsa
              {{ Form::radio('tipo2', '1') }} Correcta
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
              {{ Form::radio('tipo3', '2',true) }} Falsa
              {{ Form::radio('tipo3', '1') }} Correcta
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
              {{ Form::radio('tipo4', '2', true) }} Falsa
              {{ Form::radio('tipo4', '1') }} Correcta
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

