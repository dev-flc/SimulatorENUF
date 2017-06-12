@extends('Main.mainadmin')

@section('title', 'Profesores')
@section('styles')
  <link rel="stylesheet" href="{{ asset('css/button-menu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/adminprofesor.css') }}">
@endsection

@section('imagenprincipal')
  <div class="seccionone">
  <img id="pri1" src="/img/pri2.png" alt="">
  <h1 class="titulo">Profesores</h1>
	</div>
@endsection

@section('content')
<br>
@include('flash::message')
  <div class="row">
  @foreach ($profesor as $pro)
    <div class="col-sm-3">
            <div class="card hovercard">
            @if($pro->PRO_sexo=="hombre")
                <div class="cardheader">

                </div>
            @else
                <div class="cardheader2">

                </div>
            @endif
                <div class="avatar">
                    <img alt="" src="/img/{{$pro->foto}}">
                </div>
                <div class="info">
                    <div class="title">
                        {{ $pro->PRO_nombre }} {{ $pro->PRO_apellido_p }} {{ $pro->PRO_apellido_m }}
                    </div>
                    <div class="desc">{{ $pro->name }}</div>
                </div>
                <div class="bottom">
                    <a class="btn btn-primary btn-sm btn-profe" rel="publisher"
                       href="{{ route('profesores.edit', $pro->PRO_id) }}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <!--<a class="btn btn-danger btn-sm btn-profe" rel="publisher"
                       href="#"><span class="glyphicon glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </a>-->

                    <a class="btn btn-success btn-twitter btn-sm btn-profe" href="#"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                    </a>
                </div>
            </div>
        </div>
  @endforeach
  </div>
<br>
<br>
<br>
<br>
<br>

<div class="contenedor">
<button class="botonF1 tooltip-right1" data-toggle="modal" data-target="#pregunta" data-tooltip="Nuevo Profesor">
  <span>+</span>
</button>
</div>
</div>

@endsection


@section('subcontenido')

@endsection

<!-- Modals-->
@section('modal')
<!-- Modal Profesor -->
<div class="modal fade" id="pregunta" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h3 class="modal-title colordiv" id="myModalLabel">Nuevo Profesor</h3>
      </div>
      <div class="modal-body">

        {!! Form::open(['route'=>'profesores.store','method'=>'POST']) !!}
    <div class="form-group">
        {!! Form::label('nombre','Nombre') !!}
        {!! Form::text('nombre',null,['class'=>'noom','id'=>'nombre','required'])!!}
    </div>
    <div class="form-group">
        {!! Form::label('apellido_p','Apellido Paterno') !!}
        {!! Form::text('apellido_p',null,['class'=>'aap','id'=>'apellido_p','required'])!!}
    </div>
    <div class="form-group">
        {!! Form::label('apellido_m','Apellido Materno') !!}
        {!! Form::text('apellido_m',null,['class'=>'aam','id'=>'apellido_m','required'])!!}
    </div>
    <center>
  <div class="form-group">
    {!! Form::label('sexo','Sexo ') !!}
    {{ Form::radio('sex', 'hombre', true) }} Hombre  {{ Form::radio('sex', 'mujer') }} Mujer
  </div>
  </center>
    <hr>
    <div class="form-group">
        {!! Form::label('usuario','Usuario') !!}
        {!! Form::text('usuario',null,['class'=>'ussu','id'=>'usuario','required','readonly'=>'readonly'])!!}
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn-button-c" data-dismiss="modal">
          Cancelar
          <span class="glyphicon glyphicon-remove"></span>
        </button>
    {{ Form::button('Generar usuario <span class="glyphicon glyphicon-ok"></span>', array('class'=>'btn-button-s pull-right','id'=>'generar', 'type'=>'button')) }}

    {{ Form::button('Guardar usuario <span class="glyphicon glyphicon-ok"></span>', array('class'=>'btn-button-a pull-right','id'=>'registrar','style'=>'display:none', 'type'=>'submit')) }}

    {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>
<!-- Modal Final  -->
@endsection
@section('script')
<script type="text/javascript">
    $(document).ready(function(){
     // $('#registrar').hide();
    $("#generar").click(function(){

        //Validar campos
        var verificar = true;
        expresion=/^([a-z ñáéíóú]{2,60})$/i;
        //validar nombre
        if ($("#nombre").val() == "" || !expresion.test($("#nombre").val()))
        {
          $( "#nombre" ).focus();
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
        var nombre = $('#nombre').val().substring(3, 1);
        var no = $('#nombre').val().charAt(0).toUpperCase();
        var ap = $('#apellido_p').val().substring(3, 1);
        var ap_p = $('#apellido_p').val().charAt(0).toUpperCase();
        var am = $('#apellido_m').val().substring(3, 1);
        var am_m = $('#apellido_m').val().charAt(0).toUpperCase();
        var max=10000;
        var min=5;
        var num = Math.round(Math.random() * (max - min) + min);
       // return string.charAt(0).toUpperCase() + string.slice(1);
        $("#usuario").val(ap_p+ap+am_m+am+no+nombre+"_"+num);
        $('#generar').hide();
        $('#registrar').show();
      }

    });
    });
</script>

@if (!$profesor->count())
  <script type="text/javascript">
    $('#pregunta').modal('toggle');
  </script>
@endif
@endsection
