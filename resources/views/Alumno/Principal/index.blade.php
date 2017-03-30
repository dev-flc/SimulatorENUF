@extends('Main.main')

@section('title', 'Cursos')

<!-- Contenido Principal -->
@section('imagenprincipal')
  <div class="seccionone">
  </div>
@endsection

<!-- Contenido -->
@section('content')
<style>
  .perfildiv
  {
    background: rgb(244, 246, 246);
    height: 500px;
  }
  #imgcursos
  {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    border: 3px solid rgb(52, 152, 219);
    background: rgb(255,255,255);
  }
  #imgcursosr
  {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    border: 3px solid rgb(231, 76, 60);
    background: rgb(255,255,255);
  }
  #imgcursosa
  {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    border: 3px solid rgb(46, 204, 113);
    background: rgb(255,255,255);
  }
  #imgcursosp
  {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    border: 3px solid rgb(243, 156, 18);
    background: rgb(255,255,255);
  }
  #imgperfil
  {
    width: 175px;
    height: 250px;
    box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
  }
  .cursos
  {
    border: 1px solid rgb(52, 152, 219);
    padding: 5px;
    margin: 5px;
    transition: .7s;
  }
  .cursos:hover
  {
    background: rgb(214, 234, 248);
    color: black;
  }
  .cursop
  {
    border: 1px solid rgb(243, 156, 18);/* pendiente */
    padding: 5px;
    margin: 5px;
  }
  .cursor
  {
    border: 1px solid rgb(231, 76, 60);/* rechazado */
    padding: 5px;
    margin: 5px;
    transition: .7s;
  }
  .cursor:hover
  {
    background: rgb(250, 219, 216);
    color: black;
  }
  .cursoa
  {
    border: 1px solid rgb(46, 204, 113);/* aceptado */
    padding: 5px;
    margin: 5px;
    transition: .7s;
  }
  .cursoa:hover
  {
    background: rgb(213, 245, 227);
    color: black;
  }
  .cursop:hover
  {
    background: rgb(253, 235, 208);
    color: black;
  }
  #colora
  {
    font-size: 20px;
    color: rgb(46, 204, 113);
    text-align: center;
  }
  #colorp
  {
    font-size: 20px;
    color: rgb(243, 156, 18);
    text-align: center;
  }
  #colorr
  {
    font-size: 20px;
    color: rgb(231, 76, 60);
    text-align: center;
  }
</style>
<div class="row">
  <div class="col-sm-4">
    <br>
    <div class="container-fluid perfildiv">
      <center><br>
        <img id="imgperfil" src="/img/profesor.jpg" alt="">
      </center>
    </div>
  </div>
  <div class="col-sm-8">
  <br>
  <div class="container-fluid">
    @include('flash::message')
  </div>
  <div class="row">
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
  <div class="col-sm-4">
    <center><h2>Mis cursos</h2></center>
    @foreach($inscrito as $ins)
      @if($ins->CUAL_estatus=="aprobado")
        <div class="cursoa">
          <div class="row">
            <div class="col-sm-2">
              <center>
                <img id="imgcursosp" src="/img/reloj.png" alt="">
              </center>
            </div>
            <div class="col-sm-10">
              <p>{{$ins->CUR_nombre}}</p>
            </div>
          </div>
        </div>
      @elseif($ins->CUAL_estatus=="pendiente")
        <div class="cursop">
          <div class="row">
            <div class="col-sm-2">
              <center>
                <img id="imgcursosp" src="/img/reloj.png" alt="">
              </center>
            </div>
            <div class="col-sm-10">
              <p>{{$ins->CUR_nombre}}</p>
            </div>
          </div>
        </div>
      @elseif($ins->CUAL_estatus=="denegado")
        <div class="cursop">
          <div class="row">
            <div class="col-sm-2">
              <center>
                <img id="imgcursosp" src="/img/reloj.png" alt="">
              </center>
            </div>
            <div class="col-sm-10">
              <p>{{$ins->CUR_nombre}}</p>
            </div>
          </div>
        </div>
      @endif
    @endforeach
<!--
    <div class="cursoa">
    <div class="row">
      <div class="col-sm-2">
        <center>
          <img id="imgcursosa" src="/img/diploma.png" alt="">
        </center>
      </div>
      <div class="col-sm-10">
        <p>Aceptado</p>
      </div>
      </div>
    </div>
    <div class="cursor">
    <div class="row">
      <div class="col-sm-2">
        <center>
          <img id="imgcursosr" src="/img/reloj.png" alt="">
        </center>
      </div>
      <div class="col-sm-10">
        <p>Rechazado</p>
      </div>
      </div>
    </div> -->
  </div>
  <div class="col-sm-4">
    <center><h2>Cursos disponibles</h2></center>
    @foreach ($curso as $cur)
    <a href="{{ route('curos_registro.show', $cur->CUR_id) }}"">
    <div class="cursos">
    <div class="row">
      <div class="col-sm-2">
        <center>
          <img id="imgcursos" src="/img/reloj.png" alt="">
        </center>
      </div>
      <div class="col-sm-10">
        <p>{{ $cur->CUR_nombre }}</p>
      </div>
      </div>
    </div>
    </a>
    @endforeach
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

