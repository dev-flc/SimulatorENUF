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
  <h2>Alumnos: </h2>
</div>
<hr>
<table class="table table-hover">
  <tr>
    <th rowspan="2"><center>NP</center></th>
    <th rowspan="2"><center>Nombre completo</center></th>
    <th colspan="{{$a}}"><center>Unidades</center></th>
    <th><center>Examen Global</center></th>
    <th><center>Calificación</center></th>
  </tr>
<tr>
@php($call = 0)
@php($nada = null)

@foreach($unidad as $uni)
    <td><center>unidad {{$aa++}}</center></td>
@endforeach
  <td><center>Calificacion</center></td>
</tr>
  @foreach($list as $li)
 <tr>
    <td>{{$np++}}</td>
    <td>{{$li->ALU_apellido_p}}  {{$li->ALU_apellido_m}} {{$li->ALU_nombre}}</td>
@foreach($unidad as $u)
    @foreach($alusuni as $unii)
    @if($unii->UNI_id == $u->UNI_id)
      @if($li->ALU_id == $unii->ALU_id)
        <td><center>{{$unii->UNAL_calificacion}}
        @php ($call = $call + $unii->UNAL_calificacion)
        </center></td>
      @endif
    @endif
    @endforeach
@endforeach
    <td>
      @if($li->CUAL_calificacion >= 0)
        <center>{{$li->CUAL_calificacion}}</center>
      @endif
    </td>

    <td>
    @if($li->CUAL_calificacion >= 0)
    @php($call = $call + $li->CUAL_calificacion)
      @if($call >= 1)
      <center>{{$call*10/$total}}</center>
      @endif
    @endif
    </td>
  </tr>
  @php($call = $nada)
  @php($calli = $nada)
  @endforeach
</table>
<br>
<br>
<br>
</div>

<div class="contenedor">
<a href="{{ route('listapdf', $curso->CUR_id) }}">
<button class="botonF1" data-toggle="modal" data-target="#descargar"  data-tooltip="Descargar PDF">
  <span>+</span>
</button>
</a>


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
<center>
    <br>
    <br>
    <br>
        <p id="titulo">Escuela Normal Urbana Federal</p>
        <p id="subtitulo"> "Profr. Rafael Ramírez"</p>
        <hr id="hr">  </hr>
        <p id="conten"> Licenciatura en Educacion Secundaria<br>
                        con Especialidad en Telesecuandaria </p>
</center>
@endsection


<!-- Inicio Section Modal -->


<!-- Fin Section Modal -->

<!-- Inicio Section Script -->
@section('script')


<!-- Fin Section Script -->


@endsection


</body>
</html>
