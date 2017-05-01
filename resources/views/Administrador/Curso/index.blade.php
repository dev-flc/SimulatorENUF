@extends('Main.mainadmin')
@section('title', 'Cursos')

@section('styles')
  <link rel="stylesheet" href="{{ asset('css/button-menu.css') }}">
  <link rel="stylesheet" href="{{ asset('css/profesorcursosshow.css') }}">

  <style type="text/css">
    .btn-pre
    {
      border-radius: 50%;
      width: 40px;
      height: 40px;
      border: none;
      margin: 2px;
    }
    .btn-editar
    {
      color: rgb(128, 139, 150);
      border: 1px solid rgb(52, 152, 219);
      background: rgb(255,255,255);
      transition: .2s;
    }
    .btn-eliminar
    {
      color: rgb(128, 139, 150);
      border: 1px solid rgb(231, 76, 60);
      background: rgb(255,255,255);
      transition: .2s;
    }
    .btn-eliminar:hover
    {
      color: rgb(255,255,255);
      background: rgb(231, 76, 60);
    }
     .btn-editar:hover
    {
      color: rgb(255,255,255);
      background: rgb(52, 152, 219);
    }
    .list
    {
      background: url("/img/file.png");
      width: 200px;
      height: 200px;
    }
    .list2
    {
      width: 200px;
      height: 200px;
    }
  </style>

@endsection

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

@section('content')
<!--<li><a href="{{ route('cursos.index') }}">cursos</a></li>
    <li><a href="{{ route('cursos.create') }}">Crear cursos</a></li>
    <li><a href="{{ route('profesores.index') }}">profesores</a></li>
    <li><a href="{{ route('profesores.create') }}">Create profesores</a></li>
    <a href="{{ url('/logout') }}" onclick="event.preventDefault();   document.getElementById('logout-form').submit();" >
             Cerrar </a>
              <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>

-->
<center>
	<h1>Cursos</h1>
  <hr width="400">
</center>

  <table class="table">
   <tr>
		<th>Nombre</th>
		<th>Cupos</th>
    <th>fecha</th>
		<th>estatus</th>
		<th>Profesor</th>
    <th>clave</th>
		<th>editar</th>
		</tr>
	@foreach ($curso as $cursos)
	<tr>
		<td>{{ $cursos->CUR_nombre }}</td>
		<td>{{ $cursos->CUR_cupos }}</td>
    <td>{{ $cursos->CUR_fecha }}</td>
		<td>{{ $cursos->CUR_estatus }}</td>
		<td>
      {{ $cursos->PRO_nombre }} {{ $cursos->PRO_apellido_p }} {{ $cursos->PRO_apellido_m }}</td>
    <td>{{ $cursos->CUR_clave }}</td>
		<td><a href="{{ route('cursos.edit', $cursos->CUR_id) }}"><button class="btn-editar btn-pre"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button></a></a></td>
		</tr>
	@endforeach
	</table>
  <br>
  <br>
  <br>
<div class="contenedor">
<button class="botonF1 tooltip-right1" data-toggle="modal" data-target="#pregunta" data-tooltip="Nuevo Curso">
  <span>+</span>
</button>
</div>
  </div>

@endsection

@section('subcontenido')

@endsection

<!-- Modals-->
@section('modal')
<!-- Modal Alumnos -->
<div class="modal fade" id="pregunta" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h3 class="modal-title colordiv" id="myModalLabel">Curso</h3>
      </div>
      <div class="modal-body">
      {!! Form::open(['route'=>'cursos.store','method'=>'POST','files'=>'true']) !!}
      <div class="form-group">
        {!! Form::label('nombre','Nombre ') !!}
        {{ Form::text('nombre',null,['class'=>'form-control','required']) }}
      </div>
      <div class="form-group">
        {{ Form::label('Descripcion','Descripcion ') }}<br>
        {{ Form::textarea('descripcion', null, ['class' => 'form-control','placeholder'=>'Descripcion','rows'=>'3']) }}
      </div>
      <div class="form-group">
        {!! Form::file('file',['class'=>'form-control','id'=>'files']) !!}
      </div>
      <center>
      <div class="list" id="list">
      </div>
      </center>
      <div class="form-group">
        {!! Form::label('cupos','Cupos') !!}
        {!! Form::number('cupos',null,['class'=>'form-control','required'])!!}
      </div>
      <div class="form-group">
        {!! Form::label('clave','Clave') !!}
        {!! Form::number('clave',null,['class'=>'form-control','required'])!!}
      </div>
      <select  name="profesor" class="form-control" required>
        <option value="">Seleccione un profesor</option>
        @foreach ($profesor as $pro)
        <option value="{{ $pro->PRO_id}}">{{ $pro->PRO_nombre}} {{ $pro->PRO_apellido_p}} {{ $pro->PRO_apellido_m }}  </option>
        @endforeach
      </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">
          Cancelar
          <span class="glyphicon glyphicon-remove"></span>
        </button>
        {{ Form::button('Registrar <span class="glyphicon glyphicon-ok"></span>', array('class'=>'btn btn-success pull-right', 'type'=>'submit')) }}
      {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>
<!-- Modal Final Alumnos -->
@endsection

@section('script')
<script type="text/javascript">
function archivo(evt) {
                  var files = evt.target.files; // FileList object

                  // Obtenemos la imagen del campo "file".
                  for (var i = 0, f; f = files[i]; i++) {
                    //Solo admitimos imágenes.
                    if (!f.type.match('image.*')) {
                        continue;
                    }

                    var reader = new FileReader();

                    reader.onload = (function(theFile) {
                        return function(e) {
                          // Insertamos la imagen
                         document.getElementById("list").innerHTML = ['<img class="thumb list2" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
                         document.getElementById("list")

                         var d = document.getElementById("list");
                        d.className += "list2";
                        };
                    })(f);

                    reader.readAsDataURL(f);
                  }
              }

              document.getElementById('files').addEventListener('change', archivo, false);

      </script>
@endsection



