@extends('Main.main')

@section('title', 'Examenes')

@section('styles')
  <link rel="stylesheet" href="{{ asset('plugins/confirm/sweetalert.css') }}">
@endsection

<!-- Contenido Principal -->
@section('imagenprincipal')
  <div class="seccionone">
  <style type="text/css">
    #pri1
    {
      height: 350px;
      width: 100%;
    }
  </style>
  <img id="pri1" src="/img/pri2.png" alt="">
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
  #imgperfil
  {
    width: 175px;
    height: 250px;
    box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
  }
  .btn-registro
  {
    width: 50%;
    height: 50px;
    background: rgb(255,255,255);
    border:none;
    border: 1px solid rgb(220,220,220);
    font-size: 20px;
    color: #666;
    transition: .7s;
  }
  .btn-registro:hover
  {
    border: 1px solid rgb(52, 152, 219);
    background: rgb(52, 152, 219);
    color: rgb(255,255,255);
  }

.clave
{
  width: 100%;
  outline: none;
  padding: 15px;
  background: none;
  border: none;
  border-bottom: 2px solid rgb(220,220,220);
  font-size: 20px;
  text-align: center;
}
.clave:focus, .clave:active
{
  outline: none;
  border-bottom: 2px solid rgb(52, 152, 219);
  color: rgb(52, 152, 219);
}
.curse
{
  border: 1px solid rgb(220,220,220);
  padding: 10px;
}
.unidad
{
  border: 1px solid rgb(220,220,220);
  width: 100%;
  height: auto;
  padding: 15px;
  margin: 5px;
  font-size: 17px;
  transition: .7s;
}
.unidad:hover
{
  border: 1px solid rgb(52, 152, 219);
  color: rgb(52, 152, 219);
  border-radius: 5px;
}
.starr
{
  color: rgb(133, 193, 233);
  font-size: 20px;
}
#profe
{
  width: 150px;
  height: 200px;
}
.star
{
  color: rgb(245, 176, 65);
}
#uninom{
  width: 100%;
}
.separar
{
  width: 150%;
}
.final
{
  width: 95%;
  margin: 5px;
  border: none;
  background: none;
  border: 1px solid rgb(220,220,220);
  border-radius: 20px;
  color: rgb(128, 139, 150);
}
.prueba
{
  width: 95%;
  margin: 5px;
  border: none;
  background: none;
  border: 1px solid rgb(220,220,220);
  border-radius: 20px;
  color: rgb(128, 139, 150);
}
.final:hover{
  border: 1px solid rgb(46, 204, 113);
  color: rgb(46, 204, 113);
}
.prueba:hover{
  border: 1px solid rgb(142, 68, 173);
  color: rgb(142, 68, 173);
}
.ancho
{
  width: 65%;
}
.aprobado
{
  color: rgb(46, 204, 113);
}
.reprobado
{
  color: rgb(231, 76, 60);
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
  <div class="col-sm-8 ">
    <br>
    <div class="curse">
    <center><h1>{{ $curso->CUR_nombre }}<img src="/img/foto.png" alt=""></h1></center>
  </div>
  <div class="col-sm-12">
    <h2>Descripción</h2>
      <p>{{ $curso->CUR_descripcion }}
      </p>
    <hr>
  </div>
  <div class="col-sm-12">
    <h2>Unidades</h2>
    @foreach($unidad as $uni)
<div class="unidad">
<div class="table-responsive">
<table  style="width: 100%;">
  <tr>
    <td><center><h3>Nombre</h3></center></td>
    <td><center><h3>Intentos</h3></center></td>
    <td><center><h3>Fecha</h3></center></td>
    <td><center><h3>Calificación</h3></center></td>
    <td><center><h3>Tiempo</h3></center></td>
  </tr>
  <tr>
    <td>
      <center>{{$uni->UNI_nombre}}</center>
    </td>
    <td>
      <center>
        @if($uni->UNI_intento=="")
        0
        @else
        {{$uni->UNI_intento}}
        @endif
      </center>
    </td>
    <td>
      <center>{{$uni->UNI_fecha_final}}</center>
    </td>
    <td>
      <center>
        @if($uni->UNI_calificacion=="")
          Pendiente
        @elseif($uni->UNI_calificacion>=7)
           <h2 class="aprobado">{{$uni->UNI_calificacion}}</h2>
        @elseif($uni->UNI_calificacion<=6)
           <h2 class="reprobado">{{$uni->UNI_calificacion}}</h2>

        @endif
      </center>
    </td>
    <td>
       <center>{{$uni->UNI_tiempo}} minutos</center>
    </td>
  </tr>
</table>
</div>
<hr>
<center>
  @if($uni->UNI_fecha_final>$fecha)
  <a href="{{ route('examenprueba', $uni->UNI_id) }}" style="text-decoration: none;">
    <span class="label label-success">Examen de prueba</span>
  </a>
  @else
  <span class="label label-default">Examen de prueba</span>
  @endif

  @if($uni->UNI_intento>=3)
  <span class="label label-default">Examen final</span>
  @else
    @if($uni->UNI_fecha_final==$fecha )
       <span class="label label-success" style="cursor:pointer" onclick="Envio({{$uni->UNI_id}});">Examen finall</span>

    @else
  <span class="label label-default">Examen final</span>

    @endif
  @endif
  <a href="{{ route('detalleunidad', $uni->UNI_id) }}">
    <span class="label label-primary">Ver detalles</span>
  </a>

</center>
   </div>
@endforeach
      <br>
      <br>
    </div>
  </div>
</div>
<!--  AQUI ESTOY-->
@endsection

<!-- subcontenido -->
@section('subcontenido')

@endsection

<!-- Modals-->
@section('modal')

@endsection

<!--Script -->
@section('script')
<script  src="{{ asset('plugins/confirm/sweetalert.min.js') }}"></script>
<!--  AQUI tambien -->

<script type="text/javascript">

var Envio=function(id){

  swal({
                title: "Relizar Examen?",
                text: "empezar ahora!",
                type: "success",
                showCancelButton: true,
                confirmButtonColor: '#2ECC71',
                confirmButtonText: 'Confirmar',
                cancelButtonText: "Cancelar!",
                closeOnConfirm: false,
                closeOnCancel: false
            },
            function(isConfirm) {
                if (isConfirm) {

                         window.location.href = "{{url('alumno/examenfinal')}}/"+id+"";


                } else {
                    swal("Cancelado", ":)", "error");
                }
            });
}
</script>
@endsection

