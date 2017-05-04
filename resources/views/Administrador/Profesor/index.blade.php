@extends('Main.mainadmin')

@section('title', 'Profesores')
@section('styles')
  <link rel="stylesheet" href="{{ asset('css/button-menu.css') }}">
@endsection

@section('imagenprincipal')
  <div class="seccionone">
  <style type="text/css">
    #pri1
    {
      height: 350px;
      width: 100%;
    }
    .card {
    padding-top: 20px;
    margin: 10px 0 20px 0;
    background-color: rgba(214, 224, 226, 0.2);
    border-top-width: 0;
    border: 1px solid  rgb(52, 152, 219);
    border-bottom-width: 1px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

.card .card-heading {
    padding: 0 20px;
    margin: 0;
}

.card .card-heading.simple {
    font-size: 20px;
    font-weight: 300;
    color: #777;
    border-bottom: 1px solid #e5e5e5;
}
.card .card-heading.image img {
    display: inline-block;
    width: 46px;
    height: 46px;
    margin-right: 15px;
    vertical-align: top;
    border: 0;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
}

.card .card-heading.image .card-heading-header {
    display: inline-block;
    vertical-align: top;
}

.card .card-heading.image .card-heading-header h3 {
    margin: 0;
    font-size: 14px;
    line-height: 16px;
    color: #262626;
}

.card .card-heading.image .card-heading-header span {
    font-size: 12px;
    color: #999999;
}

.card .card-body {
    padding: 0 20px;
    margin-top: 20px;
}
.card .card-media {
    padding: 0 20px;
    margin: 0 -14px;
}

.card .card-media img {
    max-width: 100%;
    max-height: 100%;
}

.card .card-actions {
    min-height: 30px;
    padding: 0 20px 20px 20px;
    margin: 20px 0 0 0;
}

.card .card-comments {
    padding: 20px;
    margin: 0;
    background-color: #f8f8f8;
}

.card .card-comments .comments-collapse-toggle {
    padding: 0;
    margin: 0 20px 12px 20px;
}
.card .card-comments .comments-collapse-toggle a,
.card .card-comments .comments-collapse-toggle span {
    padding-right: 5px;
    overflow: hidden;
    font-size: 12px;
    color: #999;
    text-overflow: ellipsis;
    white-space: nowrap;
}

.card-comments .media-heading {
    font-size: 13px;
    font-weight: bold;
}

.card.people {
    position: relative;
    display: inline-block;
    width: 170px;
    height: 300px;
    padding-top: 0;
    margin-left: 20px;
    overflow: hidden;
    vertical-align: top;
}

.card.people:first-child {
    margin-left: 0;
}
.card.people .card-top {
    position: absolute;
    top: 0;
    left: 0;
    display: inline-block;
    width: 170px;
    height: 150px;
    background-color: #ffffff;
}

.card.people .card-top.green {
    background-color: #53a93f;
}

.card.people .card-top.blue {
    background-color: #427fed;
}

.card.people .card-info {
    position: absolute;
    top: 150px;
    display: inline-block;
    width: 100%;
    height: 101px;
    overflow: hidden;
    background: #ffffff;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.card.people .card-info .title {
    display: block;
    margin: 8px 14px 0 14px;
    overflow: hidden;
    font-size: 16px;
    font-weight: bold;
    line-height: 18px;
    color: #404040;
}

.card.people .card-info .desc {
    display: block;
    margin: 8px 14px 0 14px;
    overflow: hidden;
    font-size: 12px;
    line-height: 16px;
    color: #737373;
    text-overflow: ellipsis;
}
.card.people .card-bottom {
    position: absolute;
    bottom: 0;
    left: 0;
    display: inline-block;
    width: 100%;
    padding: 10px 20px;
    line-height: 29px;
    text-align: center;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

.card.hovercard {
    position: relative;
    padding-top: 0;
    overflow: hidden;
    text-align: center;
    background-color: rgba(214, 224, 226, 0.2);
}

.card.hovercard .cardheader {
    background: url("/img/desing/02.jpg");
    background-size: cover;
    height: 135px;
}

.card.hovercard .cardheader2 {
    background: url("/img/desing/00.jpg");
    background-size: cover;
    height: 135px;
}


.card.hovercard .avatar {
    position: relative;
    top: -50px;
    margin-bottom: -50px;
}
.card.hovercard .avatar img {
    width: 100px;
    height: 100px;
    max-width: 100px;
    max-height: 100px;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    border: 5px solid rgba(255,255,255,0.5);
}

.card.hovercard .info {
    padding: 4px 8px 10px;
}

.card.hovercard .info .title {
    margin-bottom: 4px;
    font-size: 24px;
    line-height: 1;
    color: #262626;
    vertical-align: middle;
}

.card.hovercard .info .desc {
    overflow: hidden;
    font-size: 12px;
    line-height: 20px;
    color: #737373;
    text-overflow: ellipsis;
}
.card.hovercard .bottom {
    padding: 0 20px;
    margin-bottom: 17px;
}

.btn-profe{ border-radius: 50%; width:32px; height:32px; line-height:20px;  }

.titulo
{
  position: relative; 
  top: -90%;
  text-align: center;
  color: rgb(255,255,255);
}
/* modal profesor */
    .modal-header
    {
      background: url("/img/desing/12.jpg");
      height: 150px;
    }
    .modal-header h3
    {
      color: rgb(255,255,255);
      font-size: 40px;
    }
    .noom, .aap, .aam, .ussu
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
    .noom:focus, .noom:active, .aap:focus, .aap:active,
    .aam:focus, .aam:active, .ussu:focus, .ussu:active
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
    .btn-button-s
    {
      background: rgb(255,255,255);
      border: none;
      border: 1px solid rgb(20, 155, 238) ;
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
    .btn-button-s:hover
    {
      background: rgb(20, 155, 238);
      color: rgb(255,255,255);
    }
  </style>
  <img id="pri1" src="/img/pri2.png" alt="">
  <h1 class="titulo">Profesores</h1>
	</div>
@endsection

@section('content')

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
                    <a class="btn btn-danger btn-sm btn-profe" rel="publisher"
                       href="#"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                    </a>
                    <a class="btn btn-success btn-twitter btn-sm btn-profe" href="#"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                    </a>
                </div>
            </div>
        </div>
  @endforeach
  </div>
</div>

 <br>
  <br>
  <br>
<div class="contenedor">
<button class="botonF1 tooltip-right1" data-toggle="modal" data-target="#pregunta" data-tooltip="Nuevo Profesor">
  <span>+</span>
</button>
</div>
@endsection


@section('subcontenido')

@endsection

<!-- Modals-->
@section('modal')
<!-- Modal Profesor -->
<div class="modal fade" id="pregunta" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h3 class="modal-title colordiv" id="myModalLabel">Registro Profesor</h3>
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
@endsection