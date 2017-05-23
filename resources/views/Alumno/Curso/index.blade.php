@extends('Main.main')

@section('title', 'Registro')

@section('styles')
  <link rel="stylesheet" href="{{ asset('css/alumnocursoindex.css') }}">
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
  <div class="col-sm-4">
    <br>
       <div class="container-fluid perfildiv">
      <center><br>
        <img id="imgperfil" src="/img/{{$foto}}" alt="">
        <br />
        <br />
      </center>
        <label for="">
            Nombre:
        </label>
        <p id="texto-a">
          <center>{{$alumno->ALU_nombre}} {{$alumno->ALU_apellido_p}} {{$alumno->ALU_apellido_m}}</center>
        </p>
        <label for="">Edad:</label>
        <p id="texto-a">
          <center>{{$alumno->ALU_edad}}</center>
        </p>
        <label for="">Sexo:</label>
        <p id="texto-a">
          <center>{{$alumno->ALU_sexo}}</center>
        </p>
        <label for="">Matricula:</label>
        <p id="texto-a">
          <center>{{$alumno->ALU_metricula}}</center>
        </p>
    </div>
  </div>
  <div class="col-sm-8 ">
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
            <td><h4>{{ $uni->UNI_nombre }}</h4></td>
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
  <h2>Profesor</h2>
    <div class="thumbnail">
      <img src="/img/{{$pro->foto}}" id="profe" alt="...">
      <div class="caption">
        <center>
          <h3>{{ $pro->PRO_nombre }} {{$pro->PRO_apellido_p}} {{$pro->PRO_apellido_m}}</h3>
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
      {{ Form::text('clave',null,['class'=>'clave','placeholder'=>'Ingrese la cleve del curso','required'])}}<br><br>
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

@endsection

<!-- Modals-->
@section('modal')

@endsection

<!--Script -->
@section('script')

@endsection

