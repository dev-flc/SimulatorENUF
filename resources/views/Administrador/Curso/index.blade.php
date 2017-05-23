@extends('Main.mainadmin')
@section('title', 'Cursos')

@section('styles')
  <link rel="stylesheet" href="{{ asset('css/button-menu.css') }}">
  <link rel="stylesheet" href="{{ asset('css/profesorcursosshow.css') }}">
  <link rel="stylesheet" href="{{ asset('css/admincursoshow.css') }}">
@endsection

@section('imagenprincipal')
  <div class="seccionone">
  <img id="pri1" src="/img/pri2.png" alt="">
  <h1 class="titulo">Cursos</h1>
	</div>
@endsection

@section('content')
<br>
<div class="row">
  @foreach ($curso as $cursos)
     <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card card-inverse card-info">
                    <center>
                    <img class="card-img-top" src="/img/{{$cursos->CUR_foto}}" alt="">
                    </center>
                    <div class="card-block">
                        <figure class="profile">
                            <img class="profile-avatar" src="/img/{{$cursos->foto}}" alt="">
                        </figure>
                        <center>
                        <h4 class="card-title mt-3">{{ $cursos->PRO_nombre }} {{ $cursos->PRO_apellido_p }} {{ $cursos->PRO_apellido_m }}</h4>
                        </center>
                        <div class="meta card-text">
                            <center>
                              <label id="label-color" for="">{{ $cursos->CUR_nombre }}</label>
                            </center>
                        </div>
                       <div class="row">
                         <div class="col-sm-6 ">
                          <center>
                          <div class="container-fluid tex-body">
                          <div class="meta card-text">
                            <label id="label-color" for="">Cupos</label>
                            <p id="ptext-body">{{ $cursos->CUR_cupos }}</p>
                          </div>
                          </div>
                          </center>
                         </div>
                         <div class="col-sm-6 ">
                          <center>
                          <div class="container-fluid tex-body">
                          <div class="meta card-text">
                            <label id="label-color" for="">clave</label>
                            <p id="ptext-body">{{ $cursos->CUR_clave }}</p>
                          </div>
                          </div>
                          </center>
                         </div>
                       </div>
          
                    </div>
                    @if($cursos->CUR_estatus=="habilitado")
                    <div class="card-footer-success">
                    @else
                    <div class="card-footer-danger">
                    @endif
                        <small id="ptext">{{ $cursos->CUR_estatus }}  |  {{ $cursos->CUR_fecha }}</small>
                        <a href="{{ route('cursos.edit', $cursos->CUR_id) }}"><button class="btn-pree pull-right"><span class="glyphicon glyphicon-pencil " aria-hidden="true"></span></button></a>

                        <a class="btn btn-danger btn-sm btn-curso" rel="publisher"
                       href="#"><span class="glyphicon glyphicon glyphicon-trash" aria-hidden="true"></span>
                        </a>
                    </div>
                  
                </div>
            </div>
  @endforeach
</div>
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
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h3 class="modal-title colordiv" id="myModalLabel">Nuevo curso</h3>
      </div>
      <div class="modal-body">
      {!! Form::open(['route'=>'cursos.store','method'=>'POST','files'=>'true']) !!}
      <div class="form-group">
        {{ Form::text('nombre',null,['class'=>'noom','placeholder'=>'Nombre del curso','required']) }}
      </div>
      <select  name="profesor" class="noom" required>
        <option value="">Seleccione un profesor</option>
        @foreach ($profesor as $pro)
        <option value="{{ $pro->PRO_id}}">{{ $pro->PRO_nombre}} {{ $pro->PRO_apellido_p}} {{ $pro->PRO_apellido_m }}  </option>
        @endforeach
      </select>
      <div class="form-group">
        {{ Form::textarea('descripcion', null, ['class' => 'descrii','placeholder'=>'Descripcion del curso','rows'=>'3']) }}
      </div>
      <div class="form-group">
        {!! Form::file('file',['class'=>'cco','id'=>'files']) !!}
      </div>
      <center>
      <div class="list" id="list">
      </div>
      </center>
      <div class="form-group">
        {!! Form::number('cupos',null,['class'=>'cuup','placeholder'=>'Cupos','required'])!!}
      </div>
      <div class="form-group">
        {!! Form::text('clave',null,['class'=>'claav','placeholder'=>'Clave','required'])!!}
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn-button-c" data-dismiss="modal">
          Cancelar
          <span class="glyphicon glyphicon-remove"></span>
        </button>
        {{ Form::button('Registrar <span class="glyphicon glyphicon-ok"></span>', array('class'=>'btn-button-a pull-right', 'type'=>'submit')) }}
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
  var files = evt.target.files
  for (var i = 0, f; f = files[i]; i++) {
  if (!f.type.match('image.*')) {
    continue;
  }
  var reader = new FileReader();
  reader.onload = (function(theFile) {
  return function(e) {
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
@if (!$curso->count())
  <script type="text/javascript">
    $('#pregunta').modal('toggle');
  </script>
@endif
@endsection



