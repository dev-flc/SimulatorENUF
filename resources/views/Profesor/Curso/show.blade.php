
@extends('Profesor.Principal.main')
@section('styles')
  <link rel="stylesheet" href="{{ asset('css/button-menu.css') }}">
@endsection
@section('imagenprincipal')
  <div class="">
  <br>
  <br>
  <br>
  <div class="row">
    <div class="col-sm-4">Hola</div>
    <div class="col-sm-4">Hola</div>
    <div class="col-sm-4">Hola</div>
  </div>
      <img src="/img/conocenoss.jpg" alt="" style="width: 100%;">
  </div>
@endsection
<!-- Inicio Section Contenido -->
@section('content')
<div class="container-fluid">
<div class="row">
  <div class="col-sm-12"><center><h1>{{ $curso->CUR_nombre}}</h1></center><br></div>

  <div class="col-sm-4">
    <center>
      <p id="centradop">Cupos del curso</p>
      <h2>
        <span class="label label-primary">
          #{{ $curso->CUR_cupos}}
        </span>
      </h2>
    </center>
  </div>
  <div class="col-sm-4">
    <center>
      <p id="centradop">Cupos disponibles</p>
      <h2>
        <span class="label label-success">
          #{{ $curso->CUR_cupos}}
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
<style type="text/css">
  #alumnosimg
  {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    margin: 5px;
  }
  .cuadro
  {
    border-radius: 6px;
    background: rgb(242, 243, 244);

  }
  #textcenter
  {
    margin: 5px;
    text-align: center;
    font-size: 17px;
  }
  .aprobada
  {
    color: rgb(72, 201, 176);
    font-size: 17px;
  }
  .pendiente
  {
    color: rgb(236, 112, 99);
    font-size: 17px;
  }
</style>
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
      <div class="col-sm-12 cuadro">
        <div class="col-sm-4">
          <img id="alumnosimg" src="http://www.imagenes-bonitas.net/wp-content/uploads/2013/12/fotos-de-caras-bonitas-1024x819.jpg" alt="">
        </div>
        <div class="col-sm-8">

        </div>
      </div>
    </div>
  </div>
  </div>
</div>
</div>
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
        <center>
        <div class="logo1" >
          <img src="img/logo.png" id="logo1" class="slideUp" alt="">
        </div>
        </center><br>

       <div class="form-group has-default">
        <center>
          <label class="control-label" for="email">Email</label>
          <input type="text" class="form-control" id="email">
        </center>
      </div>

      <div class="form-group has-default">
        <center>
          <label class="control-label" for="pass">Contraseña</label>
          <input type="password" class="form-control" id="pass">
        </center>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Acceder <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span></button>
        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div>
<!-- Modal Final Alumnos -->

<!-- Modal Unidad -->
<div class="modal fade" id="unidad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h3 class="modal-title colordiv" id="myModalLabel">Unidad</h3>
      </div>
      <div class="modal-body">
        <center>
        <div class="logo1" >
          <img src="img/logo.png" id="logo1" class="slideUp" alt="">
        </div>
        </center><br>

       <div class="form-group has-default">
        <center>
          <label class="control-label" for="email">Email</label>
          <input type="text" class="form-control" id="email">
        </center>
      </div>

      <div class="form-group has-default">
        <center>
          <label class="control-label" for="pass">Contraseña</label>
          <input type="password" class="form-control" id="pass">
        </center>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Acceder <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span></button>
        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
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
@endsection
<!-- Fin Section Script -->






</body>
</html>
