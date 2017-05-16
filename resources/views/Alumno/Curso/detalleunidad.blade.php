@extends('Main.main')

@section('title', 'Cursos')

<!-- Contenido Principal -->
@section('imagenprincipal')
  <div class="seccionone">
  <style type="text/css">
    #pri1
    {
      height: 350px;
      width: 100%;
    }
    .divclass
    {
        background: none;
        border: 1px solid rgb(222,222,222);
        padding: 10px;
    }
    .numero{
        width: 85px;
        height: 85px;
        border-radius: 50%;
        background: red;
        position: relative;
    }
    .panel .boder-uno
    {
       background: url(https://s-media-cache-ak0.pinimg.com/600x315/ab/47/7e/ab477e7a84ef700e14e78a77cc3032af.jpg);
       color:rgb(255,255,255);
    }
    .panel .boder-dos
    {
       background: url(https://elandroidelibre.elespanol.com/wp-content/uploads/2014/12/fondo-pantalla-android-material-9.jpg);
       color:rgb(255,255,255);
    }
    .panel-default{
        border: 1px solid rgb(222,222,222);
    }

  </style>
  <img id="pri1" src="/img/pri2.png" alt="">
  </div>
@endsection

<!-- Contenido -->
@section('content')
<center><h1>Mis Evaluaciones</h1></center><br>
<div class="container-fluid">
    <div class="row">
    <div class="col-sm-6">
        <div class="panel panel-default">
            <div class="panel-heading boder-uno"><h2>Examen de Prueba</h2></div>
            <br>
        @if ($prueba->count())

            <table class="table">
            <tr>
                <th><center>Intento</center></th>
                <th><center>Nombre</center></th>
                <th><center>Fecha</center></th>
                <th><center>Hora</center></th>
                <th><center>Calificación</center></th>
            </tr>
            @foreach($prueba as $pru)
            @if($pru->UNI_id==$id)

            @if($pru->EXA_calificacion>=7)
            <tr class="success">
                <td>
                    <center>{{ $p++ }}</center>
                </td>
                <td>
                    <center>{{ $pru->EXA_nombre}}</center>
                </td>
                <td>
                    <center>{{ $pru->EXA_fecha}}</center>
                </td>
                <td>
                    <center>{{ $pru->EXA_hora}}</center>
                </td>
                <td>
                    <center><strong>{{ $pru->EXA_calificacion}}</strong></center>
                </td>
            </tr>
            @else
            <tr class="danger">
                <td>
                    <center>{{ $p++ }}</center>
                </td>
                <td>
                    <center>{{ $pru->EXA_nombre}}</center>
                </td>
                <td>
                    <center>{{ $pru->EXA_fecha}}</center>
                </td>
                <td>
                    <center>{{ $pru->EXA_hora}}</center>
                </td>
                <td>
                    <center><strong>{{ $pru->EXA_calificacion}}</strong></center>
                </td>
            </tr>
            @endif
            @endif
            @endforeach
            </table>
        @else
            <div class="alert alert-dismissable alert-danger">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>Lo sentimos!</strong> no hay ningun registro de evaluaciones
            </div>
        @endif
        </div>
    </div>
    <div class="col-sm-6">
        <div class="panel panel-default">
            <div class="panel-heading boder-dos"><h2>Examen Final</h2></div>
            <br>
        @if ($final->count())

            <table class="table">
            <tr>
                <th><center>Intento</center></th>
                <th><center>Nombre</center></th>
                <th><center>Fecha</center></th>
                <th><center>Hora</center></th>
                <th><center>Calificación</center></th>
            </tr>
            @foreach($final as $fin)
            @if($fin->UNI_id==$id)
            @if($fin->EXA_calificacion>=7)
            <tr class="success">
                <td>
                    <center>{{ $f++ }}</center>
                </td>
                <td>
                    <center>{{ $fin->EXA_nombre}}</center>
                </td>
                <td>
                    <center>{{ $fin->EXA_fecha}}</center>
                </td>
                <td>
                    <center>{{ $fin->EXA_hora}}</center>
                </td>
                <td>
                    <center><strong>{{ $fin->EXA_calificacion}}</strong></center>
                </td>
            </tr>
            @else
            <tr class="danger">
                <td>
                    <center>{{ $f++ }}</center>
                </td>
                <td>
                    <center>{{ $fin->EXA_nombre}}</center>
                </td>
                <td>
                    <center>{{ $fin->EXA_fecha}}</center>
                </td>
                <td>
                    <center>{{ $fin->EXA_hora}}</center>
                </td>
                <td>
                    <center><strong>{{ $fin->EXA_calificacion}}</strong></center>
                </td>
            </tr>
            @endif
            @endif

            @endforeach
            </table>
        @else
            <div class="alert alert-dismissable alert-danger">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>Lo sentimos!</strong> no hay ningun registro de evaluaciones
            </div>
        @endif
        </div>
    </div>


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

