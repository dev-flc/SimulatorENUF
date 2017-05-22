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
    <th rowspan="2">Nombre</th>
    <th rowspan="2">Apellidos</th>
    <th colspan="{{$a}}"><center>Unidades</center></th>
    <th><center>Examen Global</center></th>
  </tr>
<tr>
@foreach($unidad as $uni)
    <td><center>unidad {{$aa++}}</center></td>
@endforeach
  <td><center>Calificacion</center></td>
</tr>
  @foreach($list as $li)
 <tr>
    <td>{{$li->ALU_nombre}}</td>
    <td>{{$li->ALU_apellido_p}} {{$li->ALU_apellido_m}}</td>
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
</body>
</html>
