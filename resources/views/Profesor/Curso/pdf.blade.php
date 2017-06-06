<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
  <div class="row">
    <div class="col-sm-12">
     <br>
       <img src="img/nav.png">
    </div>
  </div>
<br><br>
<div class="col-sm-12" id="p1"><center>{{$curso->CUR_nombre}}</center><br></div>
<center>Lista de alumnos</center><br>
<table border="1" id="p" bordercolor="silver">
  <tr>
    <th rowspan="2"><center>NP</center></th>
    <th rowspan="2"><center>Nombre completo</center></th>
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
    <td>{{$li->ALU_apellido_p}}  {{$li->ALU_apellido_m}} {{$li->ALU_nombre}}</td>
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
 <div class="row">
    <div class="col-sm-12">
     <br>
       <img src="img/pie.png">
    </div>
  </div>
</div>
</body>

</html>
<style>
#p {
  font-size: 90%;
}
#p1 {
  font-size: 90%;
  font-weight: bold;
}

</style>