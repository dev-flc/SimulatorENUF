@extends('Main.welcome')

@section('title', 'Inicio')

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
<div class="container-fluid"><br>
<center>
  <img src="/img/internet-of-things-IoT1.png"  class="img-responsive" alt="">
</center>
<br>
<br>
  <div class="row">
    <div class="col-sm-6">
      <center><h2>Misión</h2> <hr></center>
      <p>
        Formar profesores de calidad, para contribuir al mejoramiento de la práctica docente, competencias y desarrollo de las habilidades intelectuales básicas, que permitan responder a las características, intereses y necesidades de los educandos, ampliando los conocimientos y la tecnología, para actuar con iniciativa, eficacia e innovación en las diversas situaciones del entorno social.
      </p>
    </div>
    <div class="col-sm-6">
      <center><h2>Visión</h2> <hr></center>
      <p>
        Formar una comunidad estudiantil en continuo crecimiento de libertad responsable y capacidades cognitivas, que permitan el desarrollo de sus potencialidades, valores, habilidades, aptitudes y cualidades físicas, para acceder al nivel profesional y a su entorno social.
      </p>
    </div>
  </div>
</div>
<div class="container-fluid">
<center>
  <img src="/img/estudiantes.jpg" class="img-responsive" alt="">
</center>

</div>

<center>
  <h1>Nuestra Historia</h1>
  <hr>
</center>
<p>
  La Escuela Normal Urbana Federal “Profr. Rafael Ramírez” fue fundada en la administración del Ingeniero Rubén Figueroa, quién fungía como Gobernador del Estado. Los motivos de su fundación fueron justificados por el Coordinador de Educación en el Estado Profr. Raúl Pous Ortiz, y una de las causas fue la demanda de la juventud Guerrerense por ingresar a la Escuela Normal del Estado. Así se conjugaron estas demandas y se creó la Normal Urbana Federal en turno vespertino, el viernes 13 de enero de 1976 y sus clases se iniciaron el 16 del mismo mes y año, nombrando al Profr. Felipe Carreto Arriaga Director y al Profr. Carlos Orraca Varela, como Subdirector.
</p><br>
<p>
  La infraestructura ocupada por la naciente escuela, fue el edificio que el Gobernador Raymundo Abarca Alarcón, mandó construir para la Normal del Estado cita en la calle 18 de Marzo e Ignacio Ramírez. Por gestiones de las autoridades Educativas y del propio Gobernador Rubén Figueroa, en la parte poniente de la Ciudad de Chilpancingo se construyó el Centro Escolar “Vicente Guerrero” y en estos espacios se construyeron Escuelas de nivel Básico, Medio, Medio Superior y Superior; incluyendo la Normal Urbana Federal; Inaugurada por el Sr. Presidente de la República José López Portillo el 28 de febrero de 1981.
</p><br>
<p>
  Desde 1981 hasta 1994 se compartió la Escuela, el turno Matutino que es la Centenaria Escuela Normal del Estado “Ignacio Manuel Altamirano” y el Vespertino, Normal Urbana Federal. Desde su fundación, la institución educativa se le reconoció como Escuela Normal Urbana Federal de Chilpancingo. En 1983 el alumnado sugiere a la Dirección de la Escuela que se le asigne un nombre. La subdirección académica, asesora al alumnado y convoca a un concurso para seleccionar un nombre, acorde con los objetivos que se persiguen en la carrera. Para dar fe de la elección del nombre, se reunieron los asesores de grupo, el jefe del Departamento de promotoría cultural, jefes de grupo y Directivos de la Normal.
</p><br>
<p>
  Por su amplia trayectoria en el normalismo y por haber sido el impulsor de la Escuela Primaria Rural Mexicana, es elegido el nombre del insigne maestro Veracruzano Rafael Ramírez Castañeda. En respuesta se autoriza a la Escuela Normal por oficio fechado el 7 de julio de 1983 que se ordene la fabricación de un sello con el escudo nacional y con el nombre Escuela Normal Urbana Federal “Profr. Rafael Ramírez”.
</p><br>
<p>
  Momento importante en la historia de la Normal ha sido la construcción del nuevo edificio que actualmente se ocupa y que fue gestionado por el Profr. Israel Rivera Serrano, por la profra. Felipa Cuenca Adame y el Profr. Javier Soberanis Méndez directivos de esa época. Este edificio fue inaugurado por el Gobernador Rubén Figueroa Alcocer, 15 de septiembre de 1994
</p><br>

  <center><h2>Ubicanos</h2></center><hr>
<style type="text/css">
.scrolloff iframe   {
    pointer-events: none ;
    width: 100%;
    height: 400px;
}
</style>


<div id="map" class="scrolloff" onclick="scrollOn()" onmouseleave="scrollOff()" ><iframe style="width: 100%; height: 400px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2755299.0271340064!2d-100.56028020220437!3d17.49532668602591!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc9b249daa8e540fc!2sEscuela+Normal+Urbana+Federal+Profesor+Rafael+Ram%C3%ADrez!5e0!3m2!1ses!2smx!4v1477103528443" frameborder="0" style="border:0" allowfullscreen ></iframe></div>
<br>
@endsection


<!-- subcontenido -->
@section('subcontenido')
    <br>
    <br>
    <br>
  <div class="container-fluid">
  <div class="row">
    <div class="col-sm-4">
     <div class="secre" >
     <br>
     <center>
       <img src="img/secretaria.png" id="secre" alt="">
     </center>
    </div>
    </div>
    <div class="col-sm-4">
    <center>
        <p id="titulo">Escuela Normal Urbana Federal</p>
        <p id="subtitulo"> "Profr. Rafael Ramírez"</p>
        <hr id="hr">  </hr>
        <p id="conten"> Licenciatura en Educacion Secundaria<br>
                        con Especialidad en Telesecuandaria </p>
    </center>
    </div>
    <div class="col-sm-4">
       <div class="escudo" >
       <center>
       <img src="img/esc.png" id="escudo" class="slideUp" alt="">
       </center>
    </div>
    </div>
  </div>
</div>

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
          {{ Form::text('nombre',null,['class'=>'nom','placeholder'=>'Nombre','required'])}}
        </div>
        <div class="form-group">
          {{ Form::text('apellido_p',null,['class'=>'ap','placeholder'=>'Apellido Paterno','required'])}}
        </div>
        <div class="form-group">
          {{ Form::text('apellido_m',null,['class'=>'am','placeholder'=>'Apellido Materno','required'])}}
        </div>
        <div class="form-group">
          {{ Form::number('edad',null,['class'=>'edad','placeholder'=>'Edad','required'])}}
        </div>
        <div class="form-group">
          {{ Form::number('matricula',null,['class'=>'mat','placeholder'=>'Matricula','required'])}}
        </div>
        <div class="form-group">
          {{ Form::radio('sexo', 'hombre', true) }} Hombre  {{ Form::radio('sexo', 'mujer') }} Mujer
        </div>
        <hr>
        <div class="form-group">
          {{ Form::text('user',null,['class'=>'userr','placeholder'=>'Usuario','required'])}}
        </div>
        <div class="form-group">
          {{ Form::email('email',null,['class'=>'email','placeholder'=>'Email','required'])}}
        </div>
        <div class="form-group">
        {{ Form::password('password', ['class' => 'passs','placeholder'=>'Contraseña','required']) }}
        </div>
        <div class="form-group">
          {{ Form::password('passwordverific', ['class' => 'passs','placeholder'=>'Verificar Contraseña','required']) }}
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
