@extends('Main.main')

@section('title', 'Examenes')

@section('styles')
  <link rel="stylesheet" href="{{ asset('css/alumnocursoprueba.css') }}">
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
    <center><h1>{{ $unidad->UNI_nombre }}

    </h1>

    </center>

  </div>
  <div class="col-sm-12">

 <!-- ini -->
@if ($pregunta->count())
  {!! Form::open(['route'=>'cursos_examen.store','method'=>'POST','id'=>'examenfinal']) !!}
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
                <center>
                <span class="label label-success" data-toggle="modal" data-target="#{{$pre->PRE_id}}" style="cursor: pointer;">
                Ayuda <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span></span>
                </center>
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
@foreach($pregunta as $pregunt)
  <div class="modal fade" id="{{$pregunt->PRE_id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">{{$pregunt->PRE_nombre}}</h4>
      </div>
      <div class="modal-body">
        <div class="container-flui">
          <style type="text/css">
            #fotoayuda
            {
              width: 100%;
              height: auto;
            }
          </style>
          <img src="/files/documents/{{$pregunt->PRE_file}}" id="fotoayuda">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
@endforeach

@endsection

<!--Script -->
@section('script')

<script  src="{{ asset('plugins/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
<script type="text/javascript">

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

