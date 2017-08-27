@extends('Main.mainprofesor')

@section('title', 'Unidad')

@section('styles')
  <link rel="stylesheet" href="{{ asset('css/button-menu.css') }}">
  <link rel="stylesheet" href="{{ asset('css/profesorcursosshow.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/confirm/sweetalert.css') }}">
  <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">

@endsection

<!-- Contenido Principal -->
@section('imagenprincipal')
  <div class="seccionone">
  <img id="pri1" src="/img/pri2.png" alt="">
  </div>
@endsection

<!-- Contenido -->
@section('content')
<br>
<div class="container-fluid">
    @include('flash::message')
</div>
<div class="container-fluid">
<br>
<div class="row">
  <div class="col-sm-12">
    <center><h1>{{$curso->CUR_nombre}}</h1></center>
    <a href="{{ route('showunidad', [$unidad->UNI_id, $curso->CUR_id]) }}">
      <span class="btn btn-editar" style="float: right;">Editar tema <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
    </a>
    </span>
    <br><hr></div>
  <div class="col-sm-8">
    <center>
      <h3>
          Descripción del curso
      </h3>
      <h4  style="text-align: justify;">{{ $curso->CUR_descripcion}}</h4>
    </center>
  </div>
  <div class="col-sm-4">
    <center>
      <h2>
        <img src="/img/{{$curso->CUR_foto}}" alt="" style="width: 50%; border-radius: 10px;">
      </h2>
    </center>
  </div>
</div>
<hr>
<div class="row">
  <div class="col-sm-12">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6">
        <div class="container-fluid borderunidad ">
        <br>
          <center><label for=""> <span class="glyphicon glyphicon-book" aria-hidden="true"></span> Tema</label> </center>
        <center><h5>{{ $unidad->UNI_nombre }}</h5></center>

        </div>
      </div>
      <div class="col-sm-6">
        <div class="container-fluid borderunidad">
        <br>
        <table>
          <tr>
            <td><center><label for=""> <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
 Fecha de inicio</label> </center></td>
            <td><center><label for=""><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
 Fecha Final</label> </center></td>
          </tr>
          <tr>
            <td><center><h5>{{ $unidad->UNI_fecha_inicio }}</h5></td>
            <td><center><h4>{{ $unidad->UNI_fecha_final }}</h4></td>
          </tr>
        </table>
        </div>
      </div>
    </div>
    <br>
    <br>
@if ($pregunta->count())
    <div class=" container-fluid cuadro">
      <div class="row">

        <div class="col-sm-6">
          <h3>Banco de reactivos:</h3>
        </div>
        <div class="col-sm-3">
        <a href="">
           <span class="btn btn-est" style="float: right;">Ver estadisticas <span class="glyphicon glyphicon-stats" aria-hidden="true"></span>
           </span>
           </a> 
        </div>
        <div class="col-sm-3">
          <center>
          <button class="btn btn-ver " data-toggle="modal" data-target="#pregunta_id" style="float: right;">Agregar pregunta <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </button> 
          </center>
        </div>     
      </div>
    </div>
    @foreach($pregunta as $pre)
    <div class=" container-fluid cuadro">
      <div class="row">

        <div class="col-sm-6">
          <h4>
           {{$count++}} {{ $pre->PRE_nombre}}
          </h4>
        </div>
      <!--<div class="col-sm-5">
        <div class="table-responsive">
          <table>
          @foreach($respuesta as $res)
            @if($res->PRE_id == $pre->PRE_id)
            @if($res->TIP_id==1)
          <tr>
            <td id="separador">|</td>
            <td id="ress">
              <span class="glyphicon glyphicon glyphicon-ok si" aria-hidden="true"></span>
            </td>
            @else
            <td id="separador">|</td>
            <td id="ress">
              <span class="glyphicon glyphicon glyphicon-remove no" aria-hidden="true"></span>
            </td>
            @endif
            <td >{{$res->RES_nombre}}</td>
            <td id="separador">|</td>
            @endif
          </tr>
          @endforeach
          </table>
        </div>
        </div>
      </div>-->

       <div class="col-sm-1">
       {!! Form::open(['route'=>['unidad.destroy',$pre->PRE_id],'method'=>'DELETE','id'=>'destroyform']) !!}
          {{ csrf_field() }}
          {!! Form::hidden('unidad',$unidad->UNI_id)!!}

        <button class="btn-eliminar btn-pre" type="button" onclick="destroybtn()"><span class="glyphicon glyphicon glyphicon-trash" aria-hidden="true"></span></button>
           {!! Form::close() !!}
           </div>

          <div class="col-sm-1">
          <a href="{{ route('unidad.edit', $pre->PRE_id) }}"><button class="btn-editar btn-pre"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button></a>
          </div>

          <div class="col-sm-1">
          <button class="btn-ver btn-pre" type="button" onclick=" "><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
        </div>
        <div class="col-sm-3"><br>
       <h5>Fecha: 12/08/2017  hora: 2:20</h5>
        </div>
      </div>
    </div>
    @endforeach
@else
<div class="alert alert-dismissable alert-danger">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>Porfavor!</strong> agrege una pregunta como minimo
</div>
@endif
  </div>
  </div>
</div>
</div>
  <br>
  <br>
  <br>
  <br>
  <br>
<!--button -->
<div class="contenedor">
<button class="botonF1 tooltip-right1" data-toggle="modal" data-target="#pregunta_id"  data-tooltip="Nueva Pregunta">
  <span>+</span>
</button>
</div>
<!--button Fin -->
@endsection

<!-- subcontenido -->
@section('subcontenido')

@endsection

<!-- Modals-->
@section('modal')
<!-- Modal Alumnos -->
<div class="modal fade" id="pregunta_id" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h3 class="modal-title colordiv" id="myModalLabel">Nueva pregunta</h3>
      </div>
      <div class="modal-body">
      {!! Form::open(['route'=>'pregunta.store','method'=>'POST','files'=>'true']) !!}
        <div class="form-group">
          {!! Form::hidden('unidad',$unidad->UNI_id)!!}
          {!! Form::hidden('curso',$curso->CUR_id)!!}
        </div>
        <div class="form-group">
          {!! Form::label('pregunta','Descripción de la pregunta') !!}
          {!! Form::text('pregunta',null,['class'=>'ppre','id'=>'pregunta'])!!}
          @if($errors->has('pregunta'))
            <span style="color: red;">{{$errors->first('pregunta')}}</span>
          @endif
        </div>
          <div class="form-group">
              {!! Form::label('foto','Imagen de ayuda') !!}
              {!! Form::file('file',['class'=>'form-control'])!!}
          </div>
        <div class="row">
        <div class="col-sm-12">
          <h3>Seleccione las respuestas correctas</h3>
        </div>
          <div class="col-sm-8">
            <div class="form-group">
            {!! Form::label('respuesta1','Respuesta 1') !!}
            {!! Form::text('respuesta1',null,['class'=>'resp1','id'=>'respuesta1'])!!}
            @if($errors->has('respuesta1'))
              <span style="color: red;">{{$errors->first('respuesta1')}}</span>
            @endif
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <br>
              {{ Form::radio('tipo1', '2', true) }} Falsa
              {{ Form::radio('tipo1', '1') }} Correcta
            </div>
          </div>
          <div class="col-sm-8">
            <div class="form-group">
            {!! Form::label('respuesta2','Respuesta 2') !!}
            {!! Form::text('respuesta2',null,['class'=>'resp2','id'=>'respuesta2'])!!}
            @if($errors->has('respuesta2'))
              <span style="color: red;">{{$errors->first('respuesta2')}}</span>
            @endif
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <br>
              {{ Form::radio('tipo2', '2', true) }} Falsa
              {{ Form::radio('tipo2', '1') }} Correcta
            </div>
          </div>
          <div class="col-sm-8">
            <div class="form-group">
            {!! Form::label('respuesta3','Respuesta 3') !!}
            {!! Form::text('respuesta3',null,['class'=>'resp3','id'=>'respuesta3'])!!}
             @if($errors->has('respuesta3'))
              <span style="color: red;">{{$errors->first('respuesta3')}}</span>
            @endif
            </div>
          </div>
          <div class="col-sm-4">

            <div class="form-group">
              <br><!-- estoy aqui -->
              {{ Form::radio('tipo3', '2',true) }} Falsa
              {{ Form::radio('tipo3', '1') }} Correcta
            </div>
          </div>
          <div class="col-sm-8">
            <div class="form-group">
            {!! Form::label('respuesta4','Respuesta 4') !!}
            {!! Form::text('respuesta4',null,['class'=>'resp4','id'=>'respuesta4'])!!}
             @if($errors->has('respuesta4'))
              <span style="color: red;">{{$errors->first('respuesta4')}}</span>
            @endif
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <br>
              {{ Form::radio('tipo4', '2', true) }} Falsa
              {{ Form::radio('tipo4', '1') }} Correcta
            </div>
          </div>

           <div class="col-sm-8">
            <div class="form-group">
            {!! Form::label('respuesta5','Respuesta 5') !!}
            {!! Form::text('respuesta5',null,['class'=>'resp5','id'=>'respuesta5'])!!}
             @if($errors->has('respuesta5'))
              <span style="color: red;">{{$errors->first('respuesta5')}}</span>
            @endif
            </div>
          </div>
           <div class="col-sm-4">
            <div class="form-group">
              <br>
              {{ Form::radio('tipo5', '2', true) }} Falsa
              {{ Form::radio('tipo5', '1') }} Correcta
            </div>
          </div>
           <div class="col-sm-8">
            <div class="form-group">
            {!! Form::label('respuesta6','Respuesta 6') !!}
            {!! Form::text('respuesta6',null,['class'=>'resp6','id'=>'respuesta6'])!!}
             @if($errors->has('respuesta6'))
              <span style="color: red;">{{$errors->first('respuesta6')}}</span>
            @endif
            </div>
          </div>
           <div class="col-sm-4">
            <div class="form-group">
              <br>
              {{ Form::radio('tipo6', '2', true) }} Falsa
              {{ Form::radio('tipo6', '1') }} Correcta
            </div>
          </div>
           <div class="col-sm-8">
            <div class="form-group">
            {!! Form::label('respuesta7','Respuesta 7') !!}
            {!! Form::text('respuesta7',null,['class'=>'resp7','id'=>'respuesta7'])!!}
             @if($errors->has('respuesta7'))
              <span style="color: red;">{{$errors->first('respuesta7')}}</span>
            @endif
            </div>
          </div>
           <div class="col-sm-4">
            <div class="form-group">
              <br>
              {{ Form::radio('tipo7', '2', true) }} Falsa
              {{ Form::radio('tipo7', '1') }} Correcta
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn-button-c" data-dismiss="modal">
          Cancelar
          <span class="glyphicon glyphicon-remove"></span>
        </button>
        {{ Form::button('<span class="glyphicon glyphicon-ok"></span> Agregar', array('class'=>'btn-button-a pull-right','id'=>'registrar', 'type'=>'submit')) }}

      {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>
<!-- Modal Final Alumnos -->
@endsection

<!--Script -->
@section('script')
<!--verificar error modal-->
 @if($errors->all())
 <script type="text/javascript">
   $("#pregunta_id").modal("toggle");
 </script>
 @endif


<script  src="{{ asset('plugins/confirm/sweetalert.min.js') }}"></script>
<script type="text/javascript">
  function destroybtn(){
    swal({
  title: "Esta seguro de eliminar la pregunta?",
  text: "Eliminar ahora!",
  type: "success",
  showCancelButton: true,
  confirmButtonColor: '#2ECC71',
  confirmButtonText: 'Confirmar',
  cancelButtonText: "Cancelar!",
  closeOnConfirm: false,
  closeOnCancel: false
},
function(isConfirm){
  if (isConfirm) {
      $( "#destroyform" ).submit();
  }
  else {
  swal("Cancelado", ":(", "error");
  }
});
  }
</script>

@endsection

