@extends('Main.main')

@section('title', 'Cursos')
@section('styles')
<link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
<link rel="stylesheet" href="{{ asset('css/alumnoperfil.css') }}">
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
        <center>
             <img alt="" src="/img/{{$mifotito}}">
             </div>
              <div class="info">
             <div class="title">
           <center> <h4> {{$alumno->ALU_nombre}} {{$alumno->ALU_apellido_p}} {{$alumno->ALU_apellido_m}}</h4>
            </center>
          </div>
          <hr>
          <table>
            <tr>
          <td colspan="2"><label for="">Usuario</label></td>
        </tr>
        <tr>
          <td><h5> </h5></td>
          <td>
            <center>
              <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
            </center>
          </td>
        </tr>
        <td colspan="2"><label for="">Matricula</label></td>
        </tr>
        <tr>
          <td><h5>{{$alumno->ALU_metricula}}</h5></td>
          <td>
            <center>
              <span class="glyphicon glyphicon-education" aria-hidden="true"></span>
            </center>
          </td>
        </tr>
        <tr>
          <td colspan="2"><label for="">Calle</label></td>
        </tr>
        <tr>
          <td><p>  </p></td>
          <td>
            <center>
              <span class="glyphicon glyphicon-road " aria-hidden="true"></span>
            </center>
          </td>
        </tr>
        <tr>
          <td colspan="2"><label for="">Colonia</label></td>
        </tr>
        <tr>
          <td><p>  </p></td>
          <td>
            <center>
              <span class="glyphicon glyphicon-flag" aria-hidden="true"></span>
            </center>
          </td>
        </tr>      
          </table>
          <center>
          <hr><h3>Redes sociales</h3>
          <a href="https://www.facebook.com/"><img src="/img/facebook.png" alt="" id="redes"></a>
          <a href="https://twitter.com"><img src="/img/twiter.png" alt="" id="redes"></a>
          <a href="https://login.live.com"><img src="/img/hotmail.png" alt="" id="redes"></a>
          </center>
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
  <div class="col-sm-12">
  <h5>Estatus de tema:</h5>
  </div>
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
    <center><h3>Mis temas</h3></center>
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
              <h5>{{$ins->CUR_nombre}}</h5>
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

<div class="container-fluid">
  @include('flash::message')
  <div class="row">
    <div class="col-sm-5 subfinal">
    <center>
     <div class="container-fluid panelimg">
     <div class="col-sm-12">
    <center><h3>Cursos disponibles</h3></center>
    <hr>
    @if ($curso->count())
    @foreach ($curso as $cur)
    <a href="{{ route('curos_registro.show', $cur->CUR_id) }}"">
    <div class="cursos">
    <div class="row">
      <div class="col-sm-1">
         <span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>
      </div>
      <div class="col-sm-11">
        <h5>{{ $cur->CUR_nombre }}</h5>
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
  <div class="container-fluid panelimg">
  <div class="cursos">
    <div class="row">
      <div class="col-sm-6">
       <a href="notificaciones">
       <h3>Notificaciones</h3>
      </div>
       <div class="col-sm-1">
         <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
      </div>
      </div>
     </center> 
    <br>
    <div class="container-fluid panelimg">
      <div class="col-sm-12">
       <h3>Calendario</h3>
      </div>
      </div>
      </div>
      </a>
    </div>
  </div>
  </div>
  </div>
<!--
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
  -->
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
