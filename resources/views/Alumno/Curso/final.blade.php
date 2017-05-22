@extends('Main.main')

@section('title', 'Examenes')

@section('styles')
  <link rel="stylesheet" href="{{ asset('css/alumnocursofinal.css') }}">
@endsection

<!-- Contenido Principal -->
@section('imagenprincipal')
  <div class="seccionone">
  <img id="pri1" src="/img/pri2.png" alt="">
  </div>
@endsection

<!-- Contenido -->
@section('content')
<div class="row">

  <div class="col-sm-12 ">
    <br>
    <div class="curse">
    <center><h1>{{ $unidad->UNI_nombre }}

    </h1>
    <h2>Tiempo definido de examen: {{ $unidad->UNI_tiempo }}minutos </h2>
    </center>

  </div>
  <div class="col-sm-12">
  <br>
@if ($pregunta->count())

<div id="rojo" class="container-fluid msj-time">
  <center>
  <h2 id="reloj" class="success"><label id="hour">00</label>:<label id="minute">00</label>:<label id="second">00</label></h2>
  <p id="mensajeerror" class="danger"></p>
</center>
</div>
@endif
<br>
 <!-- ini -->
@if ($pregunta->count())
  {!! Form::open(['route'=>'finalexamen','method'=>'POST','id'=>'examenfinal']) !!}
@foreach($pregunta as $pre)
    <div id="div{{$div++}}" class="container-fluid cuadro" >
    <br>
      <div class="row">

        <div class="col-sm-6">
          <label for="">{{$num++}}.- Pregunta:</label>
          <p>
            {{ $pre->PRE_nombre}}
            <input type="hidden" name="pre{{$p++}}" value="{{ $pre->PRE_id}}">
          </p>
        </div>
      <div class="col-sm-6">
        <div class="table-responsive">
          <table>
          <tr>
            <td><label>Respuestas</label></td>
            <td><label>Opción</label></td>

          </tr>
          <tr>
          @foreach($respuesta as $res)
            @if($res->PRE_id == $pre->PRE_id)
            <td >{{$res->RES_nombre}}</td>
            <td id="separador"><input type="checkbox" name="res{{$i++}}" id="res{{$iddd++}}" value="{!!$res->RES_id!!}"></td>
            @endif
          </tr>
          @endforeach
          <tr>
            <td colspan="2">
              <center><label for="">{{$pre->PRE_respuestas}} Respuestas</label></center>
            </td>
          </tr>
          </table>
          <br>
        </div>
      </div>

      </div>
    </div>

    @endforeach
    <input type="hidden" name="cantidad" id="cantidad" value="{{$p-1}}">
    <input type="hidden" name="unidadid" value="{{ $unidad->UNI_id }}">
    <input type="hidden" name="nombre" value="{{ $unidad->UNI_nombre }}">
    <br>
    <input type="hidden" name="tiempoexamen" id="tiempoexamen" value="{{ $unidad->UNI_tiempo }}">
    <button type="button" id="enviar" class="btn btn-primary btn-finalizar">Finalizar Examen</button>
    <br>
    <br>
    <br>
      <p id="pintar"></p>
  {!! Form::close() !!}
@else
<div class="alert alert-dismissable alert-danger">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>Lo sentimos!</strong> por el momento no hay contenido disponible
</div>
@endif
 <!-- fin -->
  </div>
</div>
</div>
@endsection

<!-- subcontenido -->
@section('subcontenido')

@endsection

<!-- Modals-->
@section('modal')

@endsection

<!--Script -->
@section('script')
<script  src="{{ asset('plugins/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
<script type="text/javascript">
  $(document).ready(function(){


    var tiempo = {
        hora: 0,
        minuto: 0,
        minuto1: 0,
        segundo: 0
    };
    var tiempoexamen=$("#tiempoexamen").val();
   // var tiempoexamen=4;


    var alerta=tiempoexamen-3;

    var tiempo_corriendo = null;
            tiempo_corriendo = setInterval(function(){

                // Segundos
                tiempo.segundo++;
                if(tiempo.segundo >= 60)
                {
                    tiempo.segundo = 0;
                    tiempo.minuto++;
                    tiempo.minuto1++;
                }

                // Minutos
                if(tiempo.minuto >= 60)
                {
                    tiempo.minuto = 0;
                    tiempo.hora++;
                }


                $("#hour").text(tiempo.hora < 10 ? '0' + tiempo.hora : tiempo.hora);
                $("#minute").text(tiempo.minuto < 10 ? '0' + tiempo.minuto : tiempo.minuto);
                $("#second").text(tiempo.segundo < 10 ? '0' + tiempo.segundo : tiempo.segundo);

                if(tiempo.minuto1==tiempoexamen)
                {
                  clearInterval(tiempo_corriendo);
                  $("#examenfinal").submit();
                  //console.log("yoa me pare");
                }
                if(alerta==tiempo.minuto1){
                $( "#reloj" ).addClass( "danger" );
                $("#mensajeerror").text("Quedan 3 minutos");
                $("#rojo").addClass("container-fluid msj-time-error");
                $.notify({
                  icon: 'glyphicon glyphicon-question-time',
                  title: "<strong>Restan</strong> ",
                  message: "solo 3 minutos"
                  },{
                  type: 'danger'
                  });
                alerta=0;
              }


            }, 1000);

    })

$("#enviar").click(function(){
   var canti =$("#cantidad").val();
   var respuestas=canti*4;
   var c=1;
   var confirmar=0;
   var b=4;
   var verificar=0;

  for(i=1; i<=canti;i++)
  {

    for(a=c;a<=respuestas;a++)
    {

      if($("#res"+a).is(':checked')) {
      verificar=verificar+1;
      //console.log("activado");
      }

      if(a==b)
      {
        if(verificar>=1)
        {

          confirmar=confirmar+1;
        }
        else{
          //console.log(i);
          $("#div"+i).addClass("container-fluid cuadro-error");
        }
        b=b+4;
        c=a+1;
        if(verificar>=1)
    {
        $("#div"+i).removeClass("container-fluid cuadro-error").addClass( "container-fluid cuadro-success" );

    }
        verificar=0;
        //console.log("--------");
        break;
      }
    }

  }

if(confirmar==canti)
{
  $("#examenfinal").submit();
}
else {
   $.notify({
  icon: 'glyphicon glyphicon-question-sign',
  title: "<strong>Error!</strong> ",
  message: "faltan preguntas por responder"
  },{
  type: 'danger'
  });
}

});
</script>

@endsection

