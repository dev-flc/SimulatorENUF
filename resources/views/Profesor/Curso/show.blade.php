
@extends('Main.main')
@section('title', 'Curso')
@section('styles')
  <link rel="stylesheet" href="{{ asset('css/button-menu.css') }}">
  <link rel="stylesheet" href="{{ asset('css/profesorcursosshow.css') }}">
@endsection
@section('imagenprincipal')
  <div class="seccionone">
  </div>
@endsection
<!-- Inicio Section Contenido -->
@section('content')
<div class="container-fluid">
<div class="row">
  <div class="col-sm-12"><center><h1>{{$curso->CUR_nombre}}</h1></center><br></div>

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
  <div class="col-sm-6">
  <div class="container-fluid">
    <center><h2>Alumnos</h2></center>
    <div class="row">
      <div class="col-sm-12 cuadro">
        <div class="col-sm-2">
          <img id="alumnosimg" src="http://www.imagenes-bonitas.net/wp-content/uploads/2013/12/fotos-de-caras-bonitas-1024x819.jpg" alt="">
        </div>
        <div class="col-sm-6">
         <center> <p id="textcenter">Fernando Lucena Calixto hernandez</p></center>
        </div>
        <div class="col-sm-4"><br>
          <span class="glyphicon glyphicon-star aprobada" aria-hidden="true"></span>
          <span class="glyphicon glyphicon-star aprobada" aria-hidden="true"></span>
          <span class="glyphicon glyphicon-star-empty pendiente" aria-hidden="true"></span>
          <span class="glyphicon glyphicon-star-empty pendiente" aria-hidden="true"></span>
          <span class="glyphicon glyphicon-star-empty pendiente" aria-hidden="true"></span>
        </div>
      </div>
    </div>
  </div>
  </div>
  <div class="col-sm-6">
  <div class="container-fluid">
    <center><h2>Unidades</h2></center>
    <div class="row">
    @foreach ($unidad as $uni)
      <a href="{{ route('unidad.show', $uni->UNI_id) }}">
      <div class="col-sm-12 cuadro">
        <div class="col-sm-2">
          <img id="alumnosimg" src="/img/book1.png" alt="">
        </div>
        <div class="col-sm-7"><br>
          <p id="textcenterunidad">{{ $uni->UNI_nombre }}</p>
        </div>
        <div class="col-sm-3"><br>
          <p id="textcenterunidad">{{ $uni->UNI_fecha_final }}</p>
        </div>
      </div>
      </a>
    @endforeach
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
<button class="botonF1">
  <span>+</span>
</button>
<button class="btn-m botonF2 tooltip-right tooltip-right1" data-toggle="modal" data-target="#alumno"  data-tooltip="Nuevo Alumno">
  <span class="glyphicon glyphicon-user" aria-hidden="true" style="font-size: 18px"></span>
</button>
<button class="btn-m botonF3 tooltip-right tooltip-right2" data-toggle="modal" data-target="#unidad"  data-tooltip="Nueva Unidad">
  <span class="glyphicon glyphicon-book" aria-hidden="true" style="font-size: 18px"></span>
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
<!-- Modal Alumnos -->
<div class="modal fade" id="alumno" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
          {!! Form::label('nombre','Nombre') !!}
          {!! Form::text('nombre',null,['class'=>'form-control','id'=>'nombrealumno','required'])!!}
        </div>
        <div class="form-group">
          {!! Form::label('apellido_p','Apellido Paterno') !!}
          {!! Form::text('apellido_p',null,['class'=>'form-control','id'=>'apellido_p','required'])!!}
        </div>
        <div class="form-group">
          {!! Form::label('apellido_m','Apellido Materno') !!}
          {!! Form::text('apellido_m',null,['class'=>'form-control','id'=>'apellido_m','required'])!!}
        </div>
        <div class="form-group">
          {!! Form::label('sexo','Sexo ') !!}
          {{ Form::radio('sex', 'hombre', true) }} Hombre  {{ Form::radio('sex', 'mujer') }} Mujer
        </div>
        <hr>
        <div class="form-group">
          {!! Form::label('usuario','Usuario') !!}
          {!! Form::text('usuario',null,['class'=>'form-control','id'=>'usuario','required','readonly'=>'readonly'])!!}
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">
          Cancelar
          <span class="glyphicon glyphicon-remove"></span>
        </button>

          {{ Form::button('<span class="glyphicon glyphicon-ok"></span> Generar usuario', array('class'=>'btn btn-warning','id'=>'generar', 'type'=>'button')) }}

        {{ Form::button('<span class="glyphicon glyphicon-ok"></span> Registrar', array('class'=>'btn btn-success pull-right','id'=>'registrar','style'=>'display:none', 'type'=>'submit')) }}

      {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>
<!-- Modal Final Alumnos -->

<!-- Modal Unidad -->
<div class="modal" id="unidad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

      </div>
      <div class="modal-body">
        {!! Form::open(['route'=>'unidad.store','method'=>'POST']) !!}
        <div class="form-group">
          {!! Form::label('curso','Curso') !!}
          {!! Form::text('curso',$curso->CUR_id,['class'=>'inputoculto','readonly'])!!}
          <center><h2>{{ $curso->CUR_nombre }}</h2></center>
        </div>
        <div class="form-group">
          {!! Form::label('nombre','Nombre de unidad') !!}
          {!! Form::text('nombre',null,['class'=>'form-control','required'])!!}
          <p>Solo puede contener 34 caracteres A-Z | 0-9</p>
        </div>
        <div class="form-group">
          {!! Form::label('fecha','Fecha de examen') !!}
          {!! Form::date('fecha',null,['class'=>'form-control','required'])!!}
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">
          Cancelar
          <span class="glyphicon glyphicon-remove"></span>
        </button>
        {{ Form::button('Agregar <span class="glyphicon glyphicon-ok"></span>',
          array('class'=>'btn btn-success pull-right', 'type'=>'submit')) }}
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>
<!-- Modal Final Unidad -->

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

<!-- Inicio script Ventana Alumnos modal -->
<script type="text/javascript">
    $(document).ready(function(){
     // $('#registrar').hide();
    $("#generar").click(function(){
        //Validar campos
        var verificar = true;
        expresion=/^([a-z ñáéíóú]{2,60})$/i;
        //validar nombre
        if ($("#nombrealumno").val() == "" || !expresion.test($("#nombrealumno").val()))
        {
          $( "#nombrealumno" ).focus();
          verificar=false;
        }
        else if ($("#apellido_p").val() == "" || !expresion.test($("#apellido_p").val()))
        {
          $( "#apellido_p" ).focus();
          verificar=false;
        }
        else if ($("#apellido_m").val() == "" || !expresion.test($("#apellido_m").val()))
        {
          $( "#apellido_m" ).focus();
          verificar=false;
        }


        if(verificar==true)
        {
        var nombre = $('#nombrealumno').val().substring(3, 1);
        var no = $('#nombrealumno').val().charAt(0).toUpperCase();
        var ap = $('#apellido_p').val().substring(3, 1);
        var ap_p = $('#apellido_p').val().charAt(0).toUpperCase();
        var am = $('#apellido_m').val().substring(3, 1);
        var am_m = $('#apellido_m').val().charAt(0).toUpperCase();
        var max=10000;
        var min=5;
        var num = Math.round(Math.random() * (max - min) + min);
       // return string.charAt(0).toUpperCase() + string.slice(1);
        $("#usuario").val(ap_p+ap+am_m+am+no+nombre+"_"+num);
        $('#generar').hide(1000);
        $('#registrar').show(1000);
      }

    });
    });
  </script>
<!-- Fin script Ventana Alumnos modal -->
@endsection


</body>
</html>
