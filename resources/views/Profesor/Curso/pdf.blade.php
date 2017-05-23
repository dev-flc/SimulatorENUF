<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
  <div class="container-fluid">
<div class="row">
  <div class="col-sm-12"><center><h1>{{$curso->CUR_nombre}}</h1></center><br></div>
  <center><h2>Lista de alumnos </h2></center>
</div>
<hr>
<table border="1">
  <tr>
    <th rowspan="2"><center>NP</center></th>
    <th rowspan="2"><center>Nombre</center></th>
    <th rowspan="2"><center>Apellidos</center></th>
    <th colspan="{{$a}}"><center>Unidades</center></th>
    <th><center>Examen Global</center></th>
    <th><center>Calificación</center></th>
  </tr>
<tr>
        @php($call=0)
        @php($nada=null)

@foreach($unidad as $uni)
    <td><center>unidad {{$aa++}}</center></td>
@endforeach
  <td><center>Calificacion</center></td>
</tr>
  @foreach($list as $li)
 <tr>
    <td>{{$np++}}</td>
    <td>{{$li->ALU_nombre}}</td>
    <td>{{$li->ALU_apellido_p}}  {{$li->ALU_apellido_m}}</td>
@foreach($unidad as $u)
    @foreach($alusuni as $unii)
    @if($unii->UNI_id==$u->UNI_id)
      @if($li->ALU_id==$unii->ALU_id)
        <td><center>{{$unii->UNAL_calificacion}}
        @php ($call = $call + $unii->UNAL_calificacion)
        </center></td>
      @endif
    @endif
    @endforeach
@endforeach
    <td>
      @if($li->CUAL_calificacion>=0)
        <center>{{$li->CUAL_calificacion}}</center>
      @endif
    </td>

    <td>
    @if($li->CUAL_calificacion>=0)
    @php($call=$call+$li->CUAL_calificacion)
      @if($call>=1)
      <center>{{$call*10/$total}}</center>
      @endif
    @endif
    </td>
  </tr>
  @php($call=$nada)
  @php($calli=$nada)
  @endforeach
</table>
<br>
<br>
<br>
</div>
</body>
</html>
