@extends('Main.main')

@section('title', 'Registro')

@section('styles')
  <link rel="stylesheet" href="{{ asset('css/alumnocursoindex.css') }}">
  <link rel="stylesheet" href="{{ asset('css/photo.css') }}">
  <link rel="stylesheet" href="{{ asset('css/adminprofesor.css') }}">
@endsection

<!-- Contenido Principal -->
@section('imagenprincipal')
  <div class="seccionone">
  <img id="pri1" src="/img/pri2.png" alt="">
  </div>
@endsection

<!-- Contenido -->
@section('content')
<div class="row">
<!--
  <div class="col-sm-3">
   <div class="card hovercard">
       <div class="cardheader">
                @if($alumno->ALU_sexo=="hombre")
                <div class="cardheader">

                </div>
            @else
                <div class="cardheader2">

                </div>
            @endif
                </div>
        <div class="avatar">
             <img id="imgperfil" src="/img/{{$foto}}" alt="">
             </div>
              <div class="info">
                    <div class="title">
                       {{$alumno->ALU_nombre}} {{$alumno->ALU_apellido_p}} {{$alumno->ALU_apellido_m}}
                    </div>
                    <div class="title"><h4>Matricula:{{$alumno->ALU_metricula}}</h4></div>
                    <div class="title"><h4>Edad:{{$alumno->ALU_edad}}</h4></div>
                    <div class="title"><h4>Sexo:{{$alumno->ALU_sexo}}</h4></div>
                </div>
            </div>
         </div>
         -->
  <div class="col-sm-12 ">
    <br>
    <div class="curse">
    <center><h1>{{ $curso->CUR_nombre }}</h1>
      <img id="tamanofoto" src="/img/{{$curso->CUR_foto}}" alt="" style="width: 100px; height: 100px; border-radius: 50%;">
    </center>
  </div>
  <div class="col-sm-12">
    <h2>Descripción</h2>
      <p>{{ $curso->CUR_descripcion }}
      </p>
    <hr>
  </div>
  <div class="col-sm-8">
  <div class="container-fluid">
@if ($unidad->count())
    <h2>Contenido</h2>
    @foreach($unidad as $uni)
    <div id="vertical-bar" table-responsive>

        <table>
          <tr>
            <td>
              <div class="btn-circle"><br>
                <span class="glyphicon glyphicon-star starr" aria-hidden="true"></span>
              </div>
            </td>
            <td class="separador"></td>
            <td><h4>{{$uni->UNI_nombre }}</h4></td>
          </tr>
        </table>
      </div>
      @endforeach
@else
<div class="alert alert-dismissable alert-danger">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>Lo sentimos!</strong> Por el momento el curso no tiene contenido
</div>
@endif
</div>
    </div>
  <div class="col-sm-4">
  <center><h3>Catedratico</h3></center>
    <div class="card hovercard">
            @if($pro->PRO_sexo=="hombre")
                <div class="cardheader">

                </div>
            @else
                <div class="cardheader2">

                </div>
            @endif
                <div class="avatar">
                   <img src="/img/{{$pro->foto}}" id="profe" alt="...">
                </div>
                <div class="info">
                    <div class="title">
                        {{ $pro->PRO_nombre }} {{ $pro->PRO_apellido_p }} {{ $pro->PRO_apellido_m }}
                    </div>
                    <div class="info">Profesor</div>
                </div>
          <span class="glyphicon glyphicon-star-empty star" aria-hidden="true"></span>
          <span class="glyphicon glyphicon-star-empty star" aria-hidden="true"></span>
          <span class="glyphicon glyphicon-star-empty star" aria-hidden="true"></span>
          <span class="glyphicon glyphicon-star-empty star" aria-hidden="true"></span>
          <span class="glyphicon glyphicon-star-empty star" aria-hidden="true"></span>
        </center>
      </div>
    </div>
  </div>
    <br>
    <div class="col-sm-12">
      <div class="container-fluid">
        @include('flash::message')
      </div>
    <hr>
    <h2>Registrarme</h2>
    {!! Form::open(['route'=>'curos_registro.store','method'=>'POST']) !!}
      {{ Form::hidden('idcurso',$curso->CUR_id)}}
      {{ Form::hidden('idalumno',$alumno->ALU_id)}}
      {{ Form::text('clave',null,['class'=>'clave','placeholder'=>'Ingrese la clave del curso','required'])}}<br><br>
      <center>
      {{ Form::button('Registrarme', array('class'=>'btn-registro', 'type'=>'submit')) }}<br><br>
      </center>
    {!! Form::close() !!}
    </div>
  </div>
</div>
@endsection

<!-- subcontenido -->
@section('subcontenido')
<center>
    <br>
    <br>
    <br><br>
        <p id="titulo">Escuela Normal Urbana Federal</p>
        <p id="subtitulo"> "Profr. Rafael Ramírez"</p>
        <hr id="hr">  </hr>
        <p id="conten"> Licenciatura en Educacion Secundaria<br>
                        con Especialidad en Telesecuandaria </p>
</center>
@endsection

<!-- Modals-->
@section('modal')

@endsection

<!--Script -->
@section('script')

@endsection
