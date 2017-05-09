@extends('Main.mainprofesor')
@section('title', 'Curso')
@section('styles')
  <link rel="stylesheet" href="{{ asset('css/button-menu.css') }}">
  <link rel="stylesheet" href="{{ asset('css/profesorcursosshow.css') }}">
@endsection
@section('imagenprincipal')
  <div class="seccionone">
    <img id="pri1" src="/img/pri2.png" alt="">
  </div>

  <style type="text/css">
    .modal-header
    {
      background: url(/img/desing/12.jpg);
      height: 150px;
    }
    .modal-header h3
    {
      color: rgb(255, 255, 255);
      font-size: 40px;
    }
    .apo, .uni, .fec, .min, .pre, .nopre
    {
      width: 100%;
      outline: none;
      padding: 15px;
      background: none;
      border: none;
      border-bottom: 2px solid rgb(220,220,220);
      color: rgb(52, 152, 219);
      font-size: 15px;
    }
    .apo:focus, .apo:active ,.uni:focus, .uni:active,
    .fec:focus, .fec:active ,.min:focus, .min:active,
    .nopre:focus, .nopre:active
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
@endsection
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
          {{ $curso->CUR_cupos}}
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

<table class="table table-hover" border="1">
  <tr>
    <th>Nombre</th>
    <th>Apellidos</th>
    <th>Estatus</th>
    <th>Unidad</th>
  </tr>
  @foreach($list as $li)
  <tr>
    <td>{{$li->ALU_nombre}}</td>
    <td>{{$li->ALU_apellido_p}} {{$li->ALU_apellido_m}}</td>
    <td>{{$li->CUAL_estatus}}</td>
    <td>{{$li->UNI_calificacion}}</td>
  </tr>
  @endforeach
</table>
<br>
<br>
<br>
<br>
<br>
<br>
<table class="table table-hover">
<tr>
  <th rowspan="2"><center><br />Nombre</center></th>
  <th rowspan="2"><center><br />Apellidos</center></th>
  <th rowspan="2"><center><br />Estatus</center></th>
  <th colspan="{{$contador}}"><center>Unidades</center></th>
</tr>
<tr>
 @for ($i = 1; $i<=$contador; $i++)
    <td><center>unidad {{$i}}</center></td>
  @endfor
</tr>

@foreach($lista as $lis)
<tr>
  <td><center>{{$lis->ALU_nombre}}</center></td>
  <td><center>{{$lis->ALU_apellido_p}} {{$lis->ALU_apellido_m}}</center></td>
  <td><center>{{$lis->CUAL_estatus}}</center></td>
  @foreach($unidad as $uni)
    <td>
      @if(!$uni->UNI_calificacion)
        <center>p</center>
      @else
        <center>{{$uni->UNI_calificacion}}
        </center>
      @endif
    </td>
  @endforeach
</tr>
@endforeach
</table>
<br>
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
        {!! Form::open(['route'=>'unidad.store','method'=>'POST','files' => true]) !!}
        <div class="form-group">
          {!! Form::label('curso','Fecha de inicio') !!}
          {!! Form::date('nombre',$curso->CUR_fecha_inicio,['class'=>'uni','required'])!!}
        </div>
        <div class="form-group">
          {!! Form::label('curso','Fecha final') !!}
          {!! Form::date('nombre',$curso->CUR_fecha_inicio,['class'=>'uni','required'])!!}
        </div>
        <div class="form-group">
            {{ Form::radio('status', 'habilitado', true) }} Habilitado
            {{ Form::radio('status', 'deshabilitado') }} Deshabilitado
        </div>
        <div class="form-group">
          {!! Form::label('curso','Timpo de examen en minutos') !!}
          {!! Form::number('nombre',$curso->CUR_tiempo,['class'=>'uni','placeholder'=>'ejemplo:   30 minutos','required'])!!}
        </div>

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
