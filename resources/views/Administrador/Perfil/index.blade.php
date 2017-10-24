@extends('Main.mainperfil')

@section('title', 'Cursos')

<!-- Contenido Principal -->
@section('imagenprincipal')
<div class="seccionone">
  <style type="text/css">
    .modal-header
    {
      background: url(/img/desing/12.jpg);
      height: 150px;
    }
    .modal-header h3
    {
      color: rgb(255,255,255);
    }
    #pri1
    {
      height: 350px;
      width: 100%;
    }
    #pri2
    {
      border-radius: 50%;
      width: 250px;
      height: 250px;
      position: relative;
      top: -100px;
      border: 5px solid rgb(253, 254, 254);
    }
    #updatefoto
    {
      border-radius: 50%;
      width: 250px;
      height: 250px;
      border: 5px solid rgb(93, 173, 226);
    }
    label
    {
      color: rgb(153, 163, 164);
    }
    table
    {
      width: 80%;
    }
    td
    {
      width: 50%;
    }
    #span
    {
      font-size: 20px;
    }
    #editar
    {
      float: right;
    }
    .btn-editar
    {
      border: none;
      width: 40px;
      height: 40px;
      background: rgb(255,255,255);
      border-radius: 50%;
      border: 1px solid rgb(46, 204, 113);
      color: rgb(46, 204, 113);
      margin: 0px;
      padding: 0px;
    }
    .btn-editar:hover
    {
      background:  rgb(46, 204, 113);
      color: rgb(255,255,255);
    }
    .btn-user
    {
      border: none;
      width: 40px;
      height: 40px;
      background: rgb(255,255,255);
      border-radius: 50%;
      border: 1px solid rgb(41, 128, 185);
      color: rgb(41, 128, 185);
      margin: 0px;
      padding: 0px;
    }
    .btn-user:hover
    {
      background:  rgb(41, 128, 185);
      color: rgb(255,255,255);
    }
    h1
    {
      position: relative;
      top: -50px;

    }
    #editimg
    {
      border: none;
      width: 40px;
      height: 40px;
      background: rgb(255,255,255);
      border-radius: 50%;
      border: 1px solid rgb(178, 186, 187);
      color: rgb(178, 186, 187);
      margin: 0px;
      padding: 0px;
    }
    #editimg:hover
    {
      background:  rgb(46, 204, 113);
      border: 1px solid rgb(46, 204, 113);
      color: rgb(255,255,255);
    }
     .btn-button-c
    {
      background: rgb(255,255,255);
      border: none;
      border: 1px solid rgb(192, 57, 43) ;
      width: 150px;
      height: 40px;
      margin: 5px;
      padding: 5px;
      color: rgb(192, 57, 43);
      transition: .6s;
    }
    .btn-button-a
    {
      background: rgb(255,255,255);
      border: none;
      border: 1px solid rgb(39, 174, 96) ;
      width: 150px;
      height: 40px;
      margin: 5px;
      padding: 5px;
      color: rgb(39, 174, 96);
      transition: .6s;
    }
    .btn-button-c:hover
    {
      background: rgb(192, 57, 43);
      color: rgb(255,255,255);
    }
    .btn-button-a:hover
    {
      background: rgb(39, 174, 96);
      color: rgb(255,255,255);
    }

  </style>
    <img id="pri1" src="/img/pri2.png" alt="">
  </div>
@endsection

<!-- Contenido -->
@section('content')

<center>
  <img id="pri2" src="/img/pri2.png" alt="">
   <button id="editimg" class="" data-toggle="modal" data-target="#foto">
          <span  class="glyphicon glyphicon-camera" aria-hidden="true"></span>
    </button>
  <h1>Fernando Lucena Calixto</h1>
  <hr>
</center>
<div class="container-fluid">
<div class="row">
  <div class="col-sm-6">
    <div class="container-fluid panels">
      <center>
      <h3>Datos personales</h3>
      <hr>
      <table>
        <tr>
          <td colspan="2"><label for="">Nombre</label></td>
        </tr>
        <tr>
          <td><p>Fernando Lucena Calixto</p></td>
          <td>
            <center>
              <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
            </center>
          </td>
        </tr>
        <tr>
          <td colspan="2"><label for="">Edad</label></td>
        </tr>
        <tr>
          <td><p>10</p></td>
          <td>
            <center>
              <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
            </center>
          </td>
        </tr>
        <tr>
          <td colspan="2"><label for="">Sexo</label></td>
        </tr>
        <tr>
          <td><p>Hombre</p></td>
          <td>
            <center>
              <span class="glyphicon glyphicon-gift" aria-hidden="true"></span>
            </center>
          </td>
        </tr>
        <tr>
          <td colspan="2"><label for="">Matricula</label></td>
        </tr>
        <tr>
          <td><p>123456789</p></td>
          <td>
            <center>
              <span class="glyphicon glyphicon-barcode" aria-hidden="true"></span>
            </center>
          </td>
        </tr>
      </table>
      </center>
      <hr>
      <center>
      <table>
        <tr>
          <td colspan="2"><label for="">Calle</label></td>
        </tr>
        <tr>
          <td><p>DR. Ignacio Morones prieto</p></td>
          <td>
            <center>
              <span class="glyphicon glyphicon-road " aria-hidden="true"></span>
            </center>
          </td>
        </tr>
        <tr>
          <td colspan="2"><label for="">Colonia</label></td>
        </tr>
        <tr>
          <td><p>Doctores</p></td>
          <td>
            <center>
              <span class="glyphicon glyphicon-flag" aria-hidden="true"></span>
            </center>
          </td>
        </tr>
        <tr>
          <td colspan="2"><label for="">Estado</label></td>
        </tr>
        <tr>
          <td><p>distrito federal</p></td>
          <td>
            <center>
              <span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span>
            </center>
          </td>
        </tr>
        <tr>
          <td colspan="2"><label for="">Ciudad</label></td>
        </tr>
        <tr>
          <td><p>Mexico</p></td>
          <td>
            <center>
              <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
            </center>
          </td>
        </tr>
        <tr>
          <td colspan="2"><label for="">Pais</label></td>
        </tr>
        <tr>
          <td><p>Mexico</p></td>
          <td>
            <center>
              <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
            </center>
          </td>
        </tr>
      </table>
      <button id="editar" class="btn-editar" data-toggle="modal" data-target="#personal">
          <span  class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
      </button>
      </center>
    </div>
  </div>
  <div class="col-sm-6 ">
    <div class="container-fluid panels">
      <center>
      <h3>Usuario</h3>
      <hr>
      <table>
        <tr>
          <td colspan="2"><label for="">Nombre de usuario</label></td>
        </tr>
        <tr>
          <td><p>Fernando</p></td>
          <td>
            <center>
              <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
            </center>
          </td>
        </tr>
        <tr>
          <td colspan="2"><label for="">Email</label></td>
        </tr>
        <tr>
          <td><p>Fer.lc.developer@gmail.com</p></td>
          <td>
            <center>
              <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
            </center>
          </td>
        </tr>
        <tr>
          <td colspan="2"><label for="">Tipo de usuario</label></td>
        </tr>
        <tr>
          <td><p>Alumno</p></td>
          <td>
            <center>
              <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
            </center>
          </td>
        </tr>
        <tr>
          <td colspan="2"><label for="">Contraseña</label></td>
        </tr>
        <tr>
          <td><p>* * * * *</p></td>
          <td>
            <center>
              <span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
            </center>
          </td>
        </tr>
      </table>
      </center>
       <button id="editar" class="btn-user" data-toggle="modal" data-target="#user">
          <span  class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
        </button>
    </div>
  </div>
</div>
</div>
<br>
<br>
<br>
<!--
<a href="#" >{{ Auth::user()->name }} </a>
-->
@endsection


<!-- Modals-->
@section('modal')
<!-- Modal  personal-->
<div class="modal fade" id="personal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title" id="myModalLabel">Actualizar datos personal</h3>
      </div>
      <div class="modal-body">
      {!! Form::open(['route'=>'cursos.store','method'=>'POST','files'=>'true','id'=>'datosdeformulario']) !!}
      <div class="row">
        <div class="col-sm-6">
          <div class="form-group">
          {!! Form::label('nombre','Nombre') !!}
          {!! Form::text('nombre','fernando',['class'=>'form-control','required'])!!}
        </div>
        <div class="form-group">
          {!! Form::label('ap','Apellido materno') !!}
          {!! Form::text('ap','fernando',['class'=>'form-control','required'])!!}
        </div>
        <div class="form-group">
          {!! Form::label('am','Apellido paterno') !!}
          {!! Form::text('am','fernando',['class'=>'form-control','required'])!!}
        </div>
        <div class="form-group">
          {!! Form::label('edad','Edad') !!}
          {!! Form::number('edad','fernando',['class'=>'form-control','required'])!!}
        </div>
        <div class="form-group">
          {!! Form::label('sexo','Sexo') !!}<br>
          <center>
          {{ Form::radio('sex', 'hombre',true) }} Hombre  {{ Form::radio('sex', 'mujer') }} Mujer
          </center>
        </div>
        <div class="form-group">
          {!! Form::label('matricula','Matricula') !!}
          {!! Form::number('matricula','fernando',['class'=>'form-control','required'])!!}
        </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
          {!! Form::label('calle','Calle') !!}
          {!! Form::text('calle','fernando',['class'=>'form-control','required'])!!}
        </div>
        <div class="form-group">
          {!! Form::label('colonia','Colonia') !!}
          {!! Form::text('colonia','fernando',['class'=>'form-control','required'])!!}
        </div>
        <div class="form-group">
          {!! Form::label('estado','Estado') !!}
          {!! Form::text('estado','fernando',['class'=>'form-control','required'])!!}
        </div>
        <div class="form-group">
          {!! Form::label('ciudad','Ciudad') !!}
          {!! Form::text('ciudad','fernando',['class'=>'form-control','required'])!!}
        </div>
        <div class="form-group">
          {!! Form::label('pais','Pais') !!}
          {!! Form::text('pais','fernando',['class'=>'form-control','required'])!!}
        </div>
        </div>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn-button-c" data-dismiss="modal">Cancelar <span class="glyphicon glyphicon-remove"></span></button>
        {{ Form::button('Guardar <span class="glyphicon glyphicon-ok"></span>', array('class'=>'btn-button-a pull-right', 'type'=>'submit')) }}
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>
<!-- Fin Personal-->

<!-- Modal  foto-->
<div class="modal fade" id="foto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title" id="myModalLabel">Actualizar Foto</h3>
      </div>
      <div class="modal-body">
        <center>
          <img id="updatefoto" src="/img/pri2.png" alt="">
          <br>
          <br>
          {!! Form::open(['route'=>'cursos.store','method'=>'POST','files'=>'true','id'=>'datosdeformulario']) !!}
          <div class="form-group">
            {!! Form::file('file',['class'=>'form-control','id'=>'imgInp']) !!}
          </div>
        </center>
      </div>
      <div class="modal-footer">
        <button type="button" id="cancelarfoto" class="btn-button-c" data-dismiss="modal">Cancelar <span class="glyphicon glyphicon-remove"></span>
        </button>

        {{ Form::button('Guardar <span class="glyphicon glyphicon-ok"></span>', array('class'=>'btn-button-a pull-right', 'type'=>'submit')) }}
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>
<!-- Fin Foto-->

<!-- Modal user-->
<div class="modal fade" id="user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title" id="myModalLabel">Actualizar datos de usuario</h3>
      </div>
      <div class="modal-body">
        {!! Form::open(['route'=>'cursos.store','method'=>'POST']) !!}
        <div class="form-group">
          {!! Form::label('usuario','Usuario') !!}
          {!! Form::text('usuario','fernando',['class'=>'form-control','required'])!!}
        </div>
        <div class="form-group">
          {!! Form::label('email','Email') !!}
          {!! Form::email('email','fer.lc.developer@gmail.com',['class'=>'form-control','required'])!!}
        </div>
        <div class="form-group">
        {!! Form::label('password','Contraseña') !!}
        {{ Form::password('password', ['class' => 'form-control','placeholder'=>'***','required']) }}
        </div>
        <div class="form-group">
          {!! Form::label('passwordverific','Verificar contraseña') !!}
          {{ Form::password('passwordverific', ['class' => 'form-control','placeholder'=>'***','required']) }}
        </div>
      </div>
      <div class="modal-footer">
         <button type="button"  class="btn-button-c" data-dismiss="modal">Cancelar <span class="glyphicon glyphicon-remove"></span></button>
        {{ Form::button('Guardar <span class="glyphicon glyphicon-ok"></span>', array('class'=>'btn-button-a pull-right', 'type'=>'submit')) }}
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>
<!-- Fin user-->

@endsection

<!--Script -->
@section('script')
<script type="text/javascript">
var urlimg=$('#updatefoto').attr('src');

function readURL(input)
{
  if (input.files && input.files[0])
  {
  var reader = new FileReader();
    reader.onload = function (e)
    {
      $('#updatefoto').attr('src', e.target.result);
    }
      reader.readAsDataURL(input.files[0]);
  }
}
$("#imgInp").change(function(){
    readURL(this);
});
$("#cancelarfoto").click(function(event)
{
  $("#datosdeformulario")[0].reset();
  $('#updatefoto').attr('src',urlimg);
});
</script>
@endsection


