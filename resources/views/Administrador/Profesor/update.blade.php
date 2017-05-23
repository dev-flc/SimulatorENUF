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
  <h1 class="titulo">Editar profesor</h1>
  </div>
@endsection

@section('content')
<br>
<br>
<br>
<div class="container-fluid">
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
      <button type="button" class="btn-button-c" data-dismiss="modal">
         Cancelar
         <span class="glyphicon glyphicon-remove"></span>
      </button>
    {{ Form::button('<span class="glyphicon glyphicon-ok"></span> Actualizar', array('class'=>'btn-button-a pull-right', 'type'=>'submit')) }}
    
    </div>
  {!! Form::close() !!}
</div>
<br>
<br>
<br>
@endsection


@section('subcontenido')

@endsection


@section('script')
