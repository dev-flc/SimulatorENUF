@extends('Main.mainprofesor')

@section('title', 'detalle')
@section('styles')
  <link rel="stylesheet" href="{{ asset('css/button-menu.css') }}">
  <link rel="stylesheet" href="{{ asset('css/profesorcursosshow.css') }}">
@endsection
@section('imagenprincipal')
<div class="seccionone">
  <img id="pri1" src="/img/pri2.png" alt="">
</div>
@endsection
@section('content')
<!-- Contenido -->
<style type="text/css">
  #imgalumnos
  {
    width: 150px;
    height: 150px;
    border-radius: 50%;
  }
</style>
<center>
<br>
  <img id="imgalumnos" src="/img/{{ $user->foto }}" alt="">
  <h1>
  {{ $alumno->ALU_nombre }} {{ $alumno->ALU_apellido_p }} {{ $alumno->ALU_apellido_m }}
</h1>
  <hr>
  <p style="text-align: center;">Usuario: {{ $user->name }}</p>
</center>
<div class="container-fluid">
  <h2>Unidades</h2>
  <div class="row">
  @foreach($unidades as $uni)
    <div class="col-sm-12">
    <ul class="list-group">
      <li class="list-group-item"><center>{{ $uni->UNI_nombre }}</center></li>
      <li class="list-group-item list-group-item-success">Examen Final</li>
      @foreach($final as $fin)
        @if($fin->UNI_id == $uni->UNI_id)
        <li class="list-group-item">
        <span class="badge">{{ $fin->EXA_calificacion }}</span>
        {{ $fin->EXA_nombre }} | Fecha: {{ $fin->EXA_fecha }} | Hora: {{ $fin->EXA_hora }}
        </li>
        @endif
      @endforeach
      <li class="list-group-item list-group-item-info">Examen de Prueba</li>
      @foreach($prueba as $pru)
        @if($pru->UNI_id == $uni->UNI_id)
        <li class="list-group-item">
        <span class="badge">{{ $pru->EXA_calificacion }}</span>
        {{ $pru->EXA_nombre }} | Fecha: {{ $pru->EXA_fecha }} | Hora: {{ $pru->EXA_hora }}
        </li>
        @endif
      @endforeach
    </ul>
    </div>
  @endforeach
  </div>
</div>
<hr>

<ul class="list-group">
      <li class="list-group-item"><center>Examen Global</center></li>
      <li class="list-group-item list-group-item-success">Resultado de examenes</li>
      @foreach($global as $glo)
        <li class="list-group-item">
        <span class="badge">{{ $glo->EXA_calificacion }}</span>
        {{ $glo->EXA_nombre }} | Fecha: {{ $glo->EXA_fecha }} | Hora: {{ $glo->EXA_hora }}
        </li>
      @endforeach
</ul>

<br>
<br>
<br>
<div class="contenedor">
<button class="botonF1" data-toggle="modal" data-target="#unidad"  data-tooltip="Cambiar Contraseña">
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

<!-- subcontenido -->
@section('subcontenido')
<br>
<br>
<br>
<!-- Modals-->
@section('modal')
<!-- Modal Unidad -->
<div class="modal" id="unidad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
         <h3 class="modal-title colordiv" id="myModalLabel">Cambiar Contraseña</h3>
      </div>
      <div class="modal-body">
          {!! Form::open(['route' => ['updatepasswordalu', $user->id],'method' => 'put']) !!}
         <div class="form-group">
          <input type="hidden" name="curso" value="{{ $curso }}">

          {!! Form::label('contraseña','Nueva Contraseña') !!}
          {!! Form::password('password',['class'=>'form-control'])!!}
          @if($errors->has('password'))
            <span style="color: red;">{{$errors->first('password')}}</span>
          @endif
        </div>
        <div class="form-group">
          {!! Form::label('verificar_contrasena','Verificar Contraseña') !!}
          {!! Form::password('password_confirmation',['class'=>'form-control'])!!}
          @if($errors->has('password_confirmation'))
            <span style="color: red;">{{$errors->first('password_confirmation')}}</span>
          @endif
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn-button-c" data-dismiss="modal">Cancelar
        <span class="glyphicon glyphicon-remove"></span>
        </button>
        {{ Form::button('Guardar <span class="glyphicon glyphicon-ok"></span>',
          array('class'=>'btn-button-a pull-right', 'type'=>'submit')) }}
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>
<!-- Modal Final Unidad -->
@endsection

<!--Script -->
@section('script')
@endsection


