@extends('Main.mainprofesor')
@section('title', 'Curso')
@section('styles')
  <link rel="stylesheet" href="{{ asset('css/button-menu.css') }}">
  <link rel="stylesheet" href="{{ asset('css/profesorcursosshow.css') }}">
  <link rel="stylesheet" href="{{ asset('css/profesorcursoindex.css') }}">
@endsection
@section('imagenprincipal')
  <div class="seccionone">
    <img id="pri1" src="/img/pri2.png" alt="">
  </div>
<!-- Inicio Section Contenido -->
@section('content')
<div class="container-fluid">
<div class="row">
  <div class="col-sm-12"><center><h1>{{$curso->CUR_nombre}}</h1></center><br></div>

  <div class="col-sm-3">
    <center>
      <p id="centradop">Cupos del curso</p>
      <h2>
        <span class="label label-primary">
          {{ $curso->CUR_cupos}}
        </span>
      </h2>
    </center>
  </div>
  <div class="col-sm-3">
    <center>
      <p id="centradop">Cupos disponibles</p>
      <h2>
        <span class="label label-success">
          {{ $cupos}}
        </span>
      </h2>
    </center>
  </div>
  <div class="col-sm-3">
    <center>
      <p id="centradop">Examen global</p>
      <h2>
        <span class="label label-default" data-toggle="modal" data-target="#examen_gobal"  data-tooltip="Habilitar | Deshabilitar" style="cursor:pointer">
          {{ $curso->CUR_estatus_examen}}
        </span>
      </h2>
    </center>
  </div>
  <div class="col-sm-3">
    <center>
      <p id="centradop">Lista de alumnos</p>
      <a href="{{ route('detallecurso', $curso->CUR_id) }}" style="text-decoration: none;">
      <h2>
        <span class="label label-success">
          Detalle
        </span>
      </h2>
      </a>
    </center>
  </div>
</div>
<hr>
<div class="row">
  <div class="col-sm-6">
  <div class="container-fluid">
    <div class="row">
    @if ($verificar->count())
    @else
        <div class="alert alert-dismissable alert-danger">
          <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>Lo sentinos !</strong> por el momento no hay alumnos inscritos en el curso
        </div>
      @endif
      <!-- Alumnos inicio -->
    @if ($pendiente->count())
      <h3>Alumnos Pendientes</h3>
      @foreach($pendiente as $pen)
      <hr>
      <!-- Alumnos pendiente -->
      <div class="col-sm-12 cuadro">
        <div class="col-sm-1">
          <img id="alumnosimg" src="/img/{{ $pen->foto }}" alt="">
        </div>
        <div class="col-sm-5">
         <center> <p id="textcenter">{{ $pen->ALU_nombre }} {{ $pen->ALU_apellido_p }} {{ $pen->ALU_apellido_m }}</p></center>
        </div>
        <div class="col-sm-3">
        {{Form::open(['route'=>['curso.update',$pen->CUAL_id],'method'=>'PUT'])}}
          {!! Form::hidden('status','denegado',['reloady','readonly'])!!}
          {!! Form::hidden('curso',$pen->CUR_id,['reloady','readonly'])!!}
          {{ Form::button('Denegar <span class="glyphicon glyphicon-remove"></span>', array('class'=>'btn-denegar', 'type'=>'submit')) }}
        {!! Form::close() !!}
        </div>

        <div class="col-sm-3">
        @if($cupos<=0)
        @else
        {{Form::open(['route'=>['curso.update',$pen->CUAL_id],'method'=>'PUT'])}}
          {!! Form::hidden('status','aprobado',['reloady','readonly'])!!}
          {!! Form::hidden('curso',$pen->CUR_id,['reloady','readonly'])!!}
          {{ Form::button('Aprobar <span class="glyphicon glyphicon-ok"></span>', array('class'=>'btn-aprobar', 'type'=>'submit')) }}
        {!! Form::close() !!}
        @endif
        </div>
      </div>
      @endforeach
      @endif
      <!-- pendiente fin -->

      <!-- Alumnos aprobado -->
    @if ($aprobado->count())
      <h3>Alumnos Aprobados</h3>
      <hr>
      @foreach($aprobado as $apro)
      <div class="col-sm-12 cuadro">
        <div class="col-sm-1">
          <img id="alumnosimg" src="/img/{{ $apro->foto }}" alt="">
        </div>
        <div class="col-sm-5">
         <center> <p id="textcenter">{{ $apro->ALU_nombre }} {{ $apro->ALU_apellido_p }} {{ $apro->ALU_apellido_m }}</p></center>
        </div>
        <div class="col-sm-3">
          {{Form::open(['route'=>['curso.update',$apro->CUAL_id],'method'=>'PUT'])}}
          {!! Form::hidden('status','denegado',['reloady','readonly'])!!}
          {!! Form::hidden('curso',$apro->CUR_id,['reloady','readonly'])!!}
          {{ Form::button('Denegar <span class="glyphicon glyphicon-remove"></span>', array('class'=>'btn-denegar', 'type'=>'submit')) }}
        {!! Form::close() !!}
        </div>
        <div class="col-sm-3">
          <button class="btn-ver">Ver... <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></button>
        </div>
      </div>
      @endforeach
      @endif
      <!-- fin aprobado -->

      <!-- alumno denegado -->
    @if ($denegado->count())
    <h3>Alumnos Rechazados</h3>
      <hr>
      @foreach($denegado as $dene)

      <div class="col-sm-12 cuadro">
        <div class="col-sm-1">
          <img id="alumnosimg" src="/img/{{ $dene->foto }}" alt="">
        </div>
        <div class="col-sm-7">
         <center> <p id="textcenter">{{ $dene->ALU_nombre }} {{ $dene->ALU_apellido_p }} {{ $dene->ALU_apellido_m }}</p></center>
        </div>
        <div class="col-sm-4">
        @if($cupos<=0)
        @else
          {{Form::open(['route'=>['curso.update',$dene->CUAL_id],'method'=>'PUT'])}}
          {!! Form::hidden('status','aprobado',['reloady','readonly'])!!}
          {!! Form::hidden('curso',$dene->CUR_id,['reloady','readonly'])!!}
          {{ Form::button('Aprobar <span class="glyphicon glyphicon-ok"></span>', array('class'=>'btn-aprobar', 'type'=>'submit')) }}
        {!! Form::close() !!}
        @endif
        </div>
      </div>
      @endforeach
      @endif
      <!-- fin denegado -->
      <!-- Alumnos fin -->
    </div>
  </div>
  </div>
  <div class="col-sm-6">
  <div class="container-fluid">
      <h3>Unidades del curso</h3>
      <hr>
    <div class="row">
    @if ($unidad->count())
    @foreach ($unidad as $uni)
      <a href="{{ route('unidad.show', $uni->UNI_id) }}">
      <div class="col-sm-12 cuadro">
        <div class="col-sm-2">
          <div class="numero">
            {{$a++}}
          </div>
        </div>
        <div class="col-sm-6"><br>
          <p id="textcenterunidad">{{ $uni->UNI_nombre }}</p>
        </div>
        <div class="col-sm-4"><br>
          <p id="textcenterunidad"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> {{ $uni->UNI_fecha_final }}</p>
        </div>
      </div>
      </a>
    @endforeach
    @else
    <div class="alert alert-dismissable alert-danger">
      <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>Porfavor!</strong> agrege una unidad al curso
      </div>
    @endif
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

<div class="contenedor">
<button class="botonF1" data-toggle="modal" data-target="#unidad"  data-tooltip="Nueva unidad">
  <span>+</span>
</button>


<!--
<button class="btn-m botonF4 tooltip-right tooltip-right3" data-toggle="modal" data-target="#login"  data-tooltip="ffff">
  <span>+</span>
</button>
<button class="btn-m botonF5 tooltip-right tooltip-right4" data-toggle="modal" data-target="#login"  data-tooltip="ffff">
  <span>+</span>
</button>
-->
</div>
@endsection
<!-- Fin Section Contenido -->

@section('subcontenido')
<div class="row">
  <div class="col-sm-4"></div>
  <div class="col-sm-4"></div>
  <div class="col-sm-4"></div>
</div>
@endsection


<!-- Inicio Section Modal -->

@section('modal')


<!-- Modal Unidad -->
<div class="modal" id="unidad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
         <h3 class="modal-title colordiv" id="myModalLabel">Registro de  Examenes</h3>
      </div>
      <div class="modal-body">
        {!! Form::open(['route'=>'unidad.store','method'=>'POST','files' => true]) !!}
        <div class="form-group">
          {!! Form::text('curso',$curso->CUR_id,['class'=>'inputoculto','readonly'])!!}
        </div>
        <div class="form-group">
        {!! Form::label('file','Material de apoyo') !!}
        {!! Form::file('file',['class'=>'apo','onchange'=>'previewFile()']) !!}</p>
        </div>
        <br>
        <div class="form-group">
          {!! Form::text('nombre',null,['class'=>'uni','placeholder'=>'Nombre de unidad','required'])!!}
          <p>Solo puede contener 34 caracteres A-Z | 0-9</p>
        </div>
        <br>
        <div class="form-group">
          {!! Form::label('fecha','Fecha de inicio') !!}
          {!! Form::date('fecha_inicio',null,['class'=>'fec','placeholder'=>'fecha de inicio','required'])!!}
        </div>
        <div class="form-group">
          {!! Form::label('fecha','Fecha final') !!}
          {!! Form::date('fecha',null,['class'=>'fec','required'])!!}
        </div>
        <br>
        <div class="form-group">
          {!! Form::number('tiempo',null,['class'=>'min','placeholder'=>'tiempo de examen en minutos, ejemplo 30','required'])!!}
        </div>
        <br>
        <div class="form-group">
          {!! Form::number('numero',null,['class'=>'nopre','placeholder'=>'Numero de preguntas de examen final','required'])!!}
        </div>
        <br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn-button-c" data-dismiss="modal">Cancelar
        <span class="glyphicon glyphicon-remove"></span>
        </button>
        {{ Form::button('Agregar <span class="glyphicon glyphicon-ok"></span>',
          array('class'=>'btn-button-a pull-right', 'type'=>'submit')) }}
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>
<!-- Modal Final Unidad -->

<!-- Modal examen global -->
<div class="modal" id="examen_gobal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
         <h3 class="modal-title colordiv" id="myModalLabel">Examen Global</h3>
      </div>
      <div class="modal-body">
        {!! Form::open(['route'=>['updateexamenglobal',$curso->CUR_id],'method'=>'PUT']) !!}
        <div class="form-group">
          {!! Form::label('curso','Fecha de inicio') !!}
          {!! Form::date('fechainicio',$curso->CUR_fecha_inicio,['class'=>'uni','required'])!!}
        </div>
        <div class="form-group">
          {!! Form::label('curso','Fecha final') !!}
          {!! Form::date('fechafinal',$curso->CUR_fecha_final,['class'=>'uni','required'])!!}
        </div>
        <div class="form-group">
            {{ Form::radio('status', 'habilitado', true) }} Habilitado
            {{ Form::radio('status', 'deshabilitado') }} Deshabilitado
        </div>
        <div class="form-group">
          {!! Form::label('curso','Timpo de examen en minutos') !!}
          {!! Form::number('tiempo',$curso->CUR_tiempo,['class'=>'uni','placeholder'=>'ejemplo:   30 minutos','required'])!!}
        </div>
        <div class="form-group">
          {!! Form::label('curso','Numero de preguntas') !!}
          {!! Form::number('numero',$curso->CUR_numero_preguntas,['class'=>'uni','placeholder'=>'ejemplo:   30 preguntas','required'])!!}
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn-button-c" data-dismiss="modal">Cancelar
        <span class="glyphicon glyphicon-remove"></span>
        </button>
        {{ Form::button('Guardar <span class="glyphicon glyphicon-ok"></span>',
          array('class'=>'btn-button-a pull-right', 'type'=>'submit')) }}
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>
<!-- Modal Final Examen Global -->

@endsection
<!-- Fin Section Modal -->

<!-- Inicio Section Script -->
@section('script')
<script type="text/javascript">
  $('.botonF1').click(function()
  {
  $('.btn-m').addClass('animacionVer');
  })
  $('.contenedor').mouseleave(function()
  {
  $('.btn-m').removeClass('animacionVer');
  })
  </script>

<!-- Fin Section Script -->


@endsection


</body>
</html>
