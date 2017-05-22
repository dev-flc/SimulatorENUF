@extends('Main.mainprofesor')
@section('title', 'Curso')
@section('styles')
  <link rel="stylesheet" href="{{ asset('css/button-menu.css') }}">
  <link rel="stylesheet" href="{{ asset('css/profesorcursosshow.css') }}">
  <link rel="stylesheet" href="{{ asset('css/profesorcursolista.css') }}">
@endsection
@section('imagenprincipal')
  <div class="seccionone">
    <img id="pri1" src="/img/pri2.png" alt="">
  </div>
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
