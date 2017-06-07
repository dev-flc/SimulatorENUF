@extends('Main.main')

@section('title', 'Cursos')
@section('styles')
  <link rel="stylesheet" href="{{ asset('css/prialumno.css') }}">
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
<div class="col-sm-3">
    <div class="card hovercard">
     @if($alumno->ALU_sexo=="hombre")
    <div class="cardheader"></div>
     @else
      <div class="cardheader2"></div>
       @endif
        <div class="avatar">
             <img alt="" src="/img/{{$mifotito}}">
             </div>
              <div class="info">
                    <div class="title">
                        {{$alumno->ALU_nombre}} {{$alumno->ALU_apellido_p}} {{$alumno->ALU_apellido_m}}
                    </div>
                    <div class="title"><h3>Matricula:{{$alumno->ALU_metricula}}</h3></div>
                    <div class="title"><h3>Edad:{{$alumno->ALU_edad}}</h3></div>
                    <div class="title"><h3>Sexo:{{$alumno->ALU_sexo}}</h3></div>
                </div>
            </div>
         </div>
  <div class="col-sm-8">
  <br>
  <div class="container-fluid">
    @include('flash::message')
  </div>
  <div class="container-fluid">
  <div class="row estatus">
    <div class="col-sm-4">
      <div id="colora">
        <span class="glyphicon glyphicon-stop" aria-hidden="true"></span> Aceptado
      </div>
    </div>
    <div class="col-sm-4">
      <div id="colorp">
        <span class="glyphicon glyphicon-stop" aria-hidden="true"></span> Pendiente
      </div>
    </div>
    <div class="col-sm-4">
      <div id="colorr">
        <span class="glyphicon glyphicon-stop" aria-hidden="true"></span> Rechazado
      </div>
    </div>
  </div>
  </div>
  <hr>
  </div>
  <div class="col-sm-4">
    <center><h2>Mis cursos</h2></center>
@if ($inscrito->count())
    @foreach($inscrito as $ins)
      @if($ins->CUAL_estatus=="aprobado")
       <a href="{{ route('cursos_examen.show', $ins->CUR_id) }}">
        <div class="cursoa">
          <div class="row">
            <div class="col-sm-2">
              <center>
                <img id="imgcursosa" src="/img/{{$ins->CUR_foto}}" alt="">
              </center>
            </div>
            <div class="col-sm-10">
              <h4>{{$ins->CUR_nombre}}</h4>
            </div>
          </div>
        </div>
      </a>
      @elseif($ins->CUAL_estatus=="pendiente")
        <div class="cursop">
          <div class="row">
            <div class="col-sm-2">
              <center>
                <img id="imgcursosp" src="/img/{{$ins->CUR_foto}}" alt="">
              </center>
            </div>
            <div class="col-sm-10">
              <h4>{{$ins->CUR_nombre}}</h4>
            </div>
          </div>
        </div>
      @elseif($ins->CUAL_estatus=="denegado")
        <div class="cursor">
          <div class="row">
            <div class="col-sm-2">
              <center>
                <img id="imgcursosr" src="/img/{{$ins->CUR_foto}}" alt="">
              </center>
            </div>
            <div class="col-sm-10">
              <h4>{{$ins->CUR_nombre}}</h4>
            </div>
          </div>
        </div>
        </div>
      @endif
    @endforeach
@else
<div class="alert alert-dismissable alert-danger">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <h4>No estas registrardo!</h4>
  <p>en ningun curso</p>
</div>
@endif
  </div>
  <div class="col-sm-4">
    <center><h2>Cursos disponibles</h2></center>
@if ($curso->count())
@foreach ($curso as $cur)
    <a href="{{ route('curos_registro.show', $cur->CUR_id) }}"">
    <div class="cursos">
    <div class="row">
      <div class="col-sm-2">
        <center>
          <img id="imgcursos" src="/img/{{$cur->CUR_foto}}" alt="">
        </center>
      </div>
      <div class="col-sm-10">
        <h4>{{ $cur->CUR_nombre }}</h4>
      </div>
      </div>
    </div>
    </a>
@endforeach
@else
<div class="alert alert-dismissable alert-danger">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>Lo sentimos!</strong>
  <p> por el momento no hay cursos disponibles</p>
</div>
@endif
  </div>
</div>
<br>

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

