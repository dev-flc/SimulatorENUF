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
    <th rowspan="2"><center>Nombre</center></th>
    <th rowspan="2"><center>Apellidos</center></th>
    <th colspan="{{$a}}"><center>Unidades</center></th>
    <th colspan="2"><center>Examen Global</center></th>

  </tr>
<tr>
@foreach($unidad as $uni)
    <td><center>unidad {{$aa++}}</center></td>
@endforeach
  <td><center>Calificacion</center></td>
</tr>
  @foreach($list as $li)
 <tr>
    <td><center>{{$li->ALU_nombre}}</center></td>
    <td><center>{{$li->ALU_apellido_p}} {{$li->ALU_apellido_m}}</center></td>
@foreach($unidad as $u)
    @foreach($alusuni as $unii)
    @if($unii->UNI_id==$u->UNI_id)
      @if($li->ALU_id==$unii->ALU_id)
        <td><center>{{$unii->UNAL_calificacion}}</center></td>
      @endif
    @endif
    @endforeach
@endforeach
    <td>
      @if($li->CUAL_calificacion== "")

      @else
        <center>{{$li->CUAL_calificacion}}</center>
      @endif
    </td>
  </tr>
  @endforeach
</table>
<br>
<br>
<br>
</div>

<div class="contenedor">
<button class="botonF1" data-toggle="modal" data-target="#descargar"  data-tooltip="Descargar PDF">
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
