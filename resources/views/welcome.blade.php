@extends('Main.welcome')

@section('title', 'Inicio')

@section('styles')
  <link rel="stylesheet" href="{{ asset('css/cursos.css') }}">

<!-- Contenido Principal -->
@section('imagenprincipal')
  <div class="seccionone">
  <img id="pri1" src="/img/pri2.png" alt="">
  </div>
@endsection

<!-- Contenido -->
@section('content')
<div class="container-fluid"><br>
  @include('flash::message')
  <div class="row">
    <div class="col-sm-3 subfinal">
    <center>
     <div class="container-fluid panelimg"><br>
     <button type="button" class="btn btn-primary btn-block"> <object>Iniciar sesión</object></button><br>
    </div><br>
    <div class="container-fluid panelimg">
     <h4>Cursos disponibles</h4><br>
      <div class="input-group">
      <input type="text" class="form-control" placeholder="Buscar curso" aria-describedby="basic-addon2">
      <span class="input-group-addon" id="basic-addon2">Buscar</span>
      </div><br>

    <div class="col-sm-12">
     
    
      <a href=""">
      <div class="cursos">
      <div class="row">
      <div class="col-sm-2">
        <center>
          <img id="imgcursos" src="img/blade.jpg"" alt="">
        </center>
      </div>
    <div class="col-sm-10">
      <h5>Uso de los medios en el aula</h5>
      </div>
      </div>
    </div>
    </a>
    <br>
    <div class="alert alert-dismissable alert-danger">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>Lo sentimos!</strong>
    <h6> por el momento no hay cursos disponibles</h6>
    </div>
  </div>
  </div>
  </center>
  </div>
    <div class="col-sm-6 subfinal">
      <center>
      <div class="container-fluid panelimg">
      <center><h2>Bienvenido a los cursos de la ENUF</h2></center><br>
      <center><h3>Escuela Normal Urbana Federal "Profesor Rafael Ramírez"</h3></center><br>
       <h5>Los profesores y estudiantes pueden solicitar ayuda al Equipo Asesoría en Red ubicado en el Edificio C, 106-07 (oficinas que se encuentran en planta baja a un lado de la escalera central), a la extensión 3377 y también, escribiendo a<br><br>
      <center>Correo electronico: e-mail: profesorrafaelramirez@outlook.es</center><br>
      El horario de atención es de lunes a viernes, de 14:00 a 18:00 horas.</h5>
      </div>
       </center><br>
    <div class="container-fluid panelimg">
     <center>
      <h5>Centro de aprendizaje en red<br>
      encuentranos en las redes sociales</h5>
      <a href=""><img src="img/facebook.png" alt="" id="redes"></a>
      <a href=""><img src="img/twiter.png" alt="" id="redes"></a>
      </center>
    </div><br>
    </div>
    <div class="col-sm-3 subfinal">
    <div class="container-fluid panelimg">
      <a href=""> <img src="img/blade.jpg" class="img-responsive" alt=""></a>
    </div><br>
    <div class="container-fluid panelimg">
      calendario
    </div>
    </div>
    <br>
  </div>
</div>
@endsection


<!-- subcontenido -->
@section('subcontenido')

@endsection

<!-- Modals-->
@section('modal')
<!-- Modal Registro -->
<style>
  .modal-content
  {
    border-radius: 0px;
  }
</style>
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header imgheader">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h2 class="modal-title colordiv" id="myModalLabel">Registro</h2>
      </div>
      <div class="modal-body">
      <center>
        {!! Form::open(['route'=>'registroalumno.registeruser','method'=>'POST']) !!}
        <div class="form-group">
          {{ Form::text('nombre',null,['class'=>'nom','placeholder'=>'Nombre'])}}
          @if($errors->has('nombre'))
          <p style="color: red;">{{$errors->first('nombre')}}</p>
        @endif
        </div>
        <div class="form-group">
          {{ Form::text('apellido_paterno',null,['class'=>'ap','placeholder'=>'Apellido Paterno'])}}
          @if($errors->has('apellido_paterno'))
          <p style="color: red;">{{$errors->first('apellido_paterno')}}</p>
        @endif
        </div>
        <div class="form-group">
          {{ Form::text('apellido_materno',null,['class'=>'am','placeholder'=>'Apellido Materno'])}}
          @if($errors->has('apellido_materno'))
          <p style="color: red;">{{$errors->first('apellido_materno')}}</p>
        @endif
        </div>
        <div class="form-group">
          {{ Form::number('edad',null,['class'=>'edad','placeholder'=>'Edad'])}}
          @if($errors->has('edad'))
          <p style="color: red;">{{$errors->first('edad')}}</p>
        @endif
        </div>
        <div class="form-group">
          {{ Form::number('matricula',null,['class'=>'mat','placeholder'=>'Matricula'])}}
          @if($errors->has('matricula'))
          <p style="color: red;">{{$errors->first('matricula')}}</p>
        @endif
        </div>
        <div class="form-group">
          {{ Form::radio('sexo', 'hombre', true) }} Hombre  {{ Form::radio('sexo', 'mujer') }} Mujer
        </div>
        <hr>
        <div class="form-group">
          {{ Form::text('usuario',null,['class'=>'userr','placeholder'=>'Usuario'])}}
          @if($errors->has('usuario'))
          <p style="color: red;">{{$errors->first('usuario')}}</p>
        @endif
        </div>
        <div class="form-group">
          {{ Form::email('email',null,['class'=>'email','placeholder'=>'Email'])}}
          @if($errors->has('email'))
          <p style="color: red;">{{$errors->first('email')}}</p>
        @endif
        </div>
        <div class="form-group">
        {{ Form::password('password', ['class' => 'passs','placeholder'=>'Contraseña']) }}
        @if($errors->has('password'))
          <p style="color: red;">{{$errors->first('password')}}</p>
        @endif
        </div>
        <div class="form-group">
          {{ Form::password('password_confirmation', ['class' => 'passs','placeholder'=>'Verificar Contraseña']) }}
          @if($errors->has('password_confirmation'))
            <p style="color: red;">{{$errors->first('password_confirmation')}}</p>
          @endif
        </div>
        </center>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn-button-c" data-dismiss="modal">
          Cancelar
          <span class="glyphicon glyphicon-remove"></span>
        </button>
        {{ Form::button('Registrarme <span class="glyphicon glyphicon-ok"></span> ', array('class'=>'btn-button-a pull-right', 'type'=>'submit')) }}
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>
<!-- Modal Final Registro -->


<!-- Modal login -->

<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header imgheader">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <strong>
        <h2 class="modal-title colordiv" id="myModalLabel">Iniciar sesión</h2>
        </strong>
      </div>
       <div class="modal-body">
        @if(Session::has('error_message'))
          <center>
            <div class="alert alert-danger   alert-dismissible alert-login" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <strong>Error!</strong> usuario o contraseña incorrectos.
            </div>
          </center>
        @endif
        {!! Form::open(['route'=>'loginuser','method'=>'POST']) !!}
        <center>
        <div class="form-group">
          {{ Form::text('user',null,['class'=>'user','id'=>'user','placeholder'=>'Usuario','required'])}}
        </div>
        <div class="form-group">
          {{ Form::password('password', ['class' => 'pass','id'=>'pass','placeholder'=>'Contraseña','required']) }}
        </div>
        <br>
        </center>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn-button-c" data-dismiss="modal">
          Cancelar
          <span class="glyphicon glyphicon-remove"></span>
        </button>
        {{ Form::button('Acceder <span class="glyphicon glyphicon-ok"></span> ', array('class'=>'btn-button-a pull-right', 'type'=>'submit')) }}
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>
<!-- Modal Final login -->

@endsection

<!--Script -->
@section('script')
@if($errors->all())
<script type="text/javascript">
  $('#register').modal('toggle');
</script>
@endif
@if(Session::has('error_message'))
<script type="text/javascript">
//$( "#user" ).last().addClass( "userr" );
 // $( "#pass" ).last().addClass( "passs" );
  $( "#pass" ).removeClass( "pass" ).addClass("pa");
  $( "#user" ).removeClass( "user" ).addClass("us");
  $('#login').modal('toggle');

</script>
@endif
<script type="text/javascript">

function scrollOn() {
    $('#map').removeClass('scrolloff');

}
function scrollOff() {
    $('#map').addClass('scrolloff');

}
</script>
@endsection
