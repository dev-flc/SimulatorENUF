@extends('Main.mainprofesor')
@section('title', 'Curso')
@section('styles')
  <link rel="stylesheet" href="{{ asset('css/button-menu.css') }}">
  <link rel="stylesheet" href="{{ asset('css/profesorcursosshow.css') }}">
@endsection
@section('imagenprincipal')
  <div class="seccionone">
    <img id="pri1" src="/img/pri2.png" alt="">
  </div>

  <style type="text/css">
    .modal-header
    {
      background: url(/img/desing/12.jpg);
      height: 150px;
    }
    .modal-header h3
    {
      color: rgb(255, 255, 255);
      font-size: 40px;
    }
    .apo, .uni, .fec, .min, .pre, .nopre
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
    .apo:focus, .apo:active ,.uni:focus, .uni:active,
    .fec:focus, .fec:active ,.min:focus, .min:active,
    .nopre:focus, .nopre:active
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

    </style>
@endsection
<!-- Inicio Section Contenido -->
@section('content')
<div class="container-fluid">
<div class="row">
  <div class="col-sm-12"><center><h1>{{$curso->CUR_nombre}}</h1></center><br></div>
  <center><h2>Lista de alumnos </h2></center>
</div>
<hr>

<table class="table table-hover">
  <tr>
    <th rowspan="2">Nombre</th>
    <th rowspan="2">Apellidos</th>
    <th colspan="2"><center>Unidades</center></th>
    <th colspan="2">Examen Global</th>

  </tr>

<tr>

   @foreach($unidad as $uni)
    <td>{{$uni->UNI_nombre}}</td>
   @endforeach
  <td>Intentos</td>
  <td>Calificacion</td>
</tr>
  @foreach($list as $li)
 <tr>
    <td>{{$li->ALU_nombre}}</td>
    <td>{{$li->ALU_apellido_p}} {{$li->ALU_apellido_m}}</td>



    @foreach($alusuni as $unii)
        @if($unii->ALU_id==$li->ALU_id)
         <td> {{$unii->UNAL_calificacion}}</td>
        @else
        <td>0</td>
        @endif
      @endforeach

    <td>{{$li->CUAL_intentos}}</td>
    <td>{{$li->CUAL_calificacion}}</td>

  </tr>

  @endforeach
</table>
<br>
<br>
<br>
</div>

<div class="contenedor">
<button class="botonF1" data-toggle="modal" data-target="#unidad"  data-tooltip="Nueva unidad">
  <span>+</span>
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


<!-- Fin Section Modal -->

<!-- Inicio Section Script -->
@section('script')


<!-- Fin Section Script -->


@endsection


</body>
</html>
