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
    /* modal curso */
    .modal-header
    {
      background: url("/img/desing/12.jpg");
      height: 150px;
    }
    .modal-header h3
    {
      color: rgb(255,255,255);
      font-size: 40px;
    }
    .noom, .descrii, .cuup, .claav, .cco
    { 
      width: 100%;
      outline: none;
      padding: 15px;
      background: none;
      border: none;
      border-bottom: 2px solid rgb(220,220,220);
      color: rgb(52, 152, 219);
      font-size: 15px;
    }
    .noom:focus, .noom:active, .descrii:focus, .descrii:active,
    .cuup:focus, .cuup:active, .claav:focus, .claav:active,
    .cco:focus, .cco:active
    {
      outline: none;
      border-bottom: 2px solid rgb(52, 152, 219);
      color: rgb(52, 152, 219);
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

@endsection

@section('imagenprincipal')
  <div class="seccionone">
  <style type="text/css">
    #pri1
    {
      height: 350px;
      width: 100%;
    }
    h5 {
    font-size: 1.28571429em;
    font-weight: 700;
    line-height: 1.2857em;
    margin: 0;
}

.card {
    margin: 5px;
    font-size: 1em;
    overflow: hidden;
    padding: 0;
    border: none;
    border-radius: .28571429rem;
    box-shadow: 0 1px 3px 0 rgb(52, 152, 219), 0 0 0 1px rgb(52, 152, 219);
}

.card-block {
    font-size: 1em;
    position: relative;
    margin: 0;
    padding: 1em;
    background: rgb(255,255,255);
    border: none;
    border-top: 1px solid rgb(93, 173, 226);
    box-shadow: none;
}

.card-img-top {
    display: block;
    width: 150px;
    height: 150px;
    border-radius: 50%;
    border: 1px solid rgb(52, 152, 219);
    margin: 3px;
}
.card-title {
    font-size: 1.28571429em;
    font-weight: 700;
    line-height: 1.2857em;
    color: rgb(44, 62, 80);
}

.card-text {
    clear: both;
    margin-top: .5em;
    color: rgb(255,255,255);
}
#ptext-body
{
  text-align: center;
  color: rgb(52, 152, 219);
}
#ptext
{
  text-align: center;
  color: rgb(255,255,255)
}
.tex-body
{
  border: 1px solid rgb(52, 152, 219);
  border-radius: 10px;
}
.card-footer-success {
    font-size: 1em;
    position: static;
    top: 0;
    left: 0;
    max-width: 100%;
    padding: .75em 1em;
    background: rgb(52, 152, 219);
    color: rgba(0, 0, 0, .4);
    border-top: 1px solid rgb(52, 152, 219) !important;
}
.card-footer-danger {
    font-size: 1em;
    position: static;
    top: 0;
    left: 0;
    max-width: 100%;
    padding: .75em 1em;
    background: rgb(231, 76, 60);
    color: rgba(0, 0, 0, .4);
    border-top: 1px solid rgb(231, 76, 60) !important;
}
.card-inverse .btn {
    border: 1px solid rgba(0, 0, 0, .05);
}
.profile {
    position: absolute;
    top: -23px;
    display: inline-block;
    overflow: hidden;
    box-sizing: border-box;
    width: 45px;
    height: 45px;
    margin: 0;
    border: 2px solid rgb(52, 152, 219);
    border-radius: 50%;
}

.profile-avatar {
    display: block;
    width: 100%;
    height: auto;
    border-radius: 50%;
}

.profile-inline {
    position: relative;
    top: 0;
    display: inline-block;
}

.profile-inline ~ .card-title {
    display: inline-block;
    margin-left: 4px;
    vertical-align: top;
}
.meta {
    font-size: 1em;
    color: rgba(0, 0, 0, .4);
}

.meta a {
    text-decoration: none;
    color: rgba(0, 0, 0, .4);
}

.meta a:hover {
    color: rgba(0, 0, 0, .87);
}
#label-color
{
  color: rgb(33, 47, 61);
}
.btn-pree
{
  border: none;;
  border-radius: 50%;
  width: 30px;
  height: 30px;
  background: rgb(255,255,255);

}
.titulo
{
  position: relative; 
  top: -90%;
  text-align: center;
  color: rgb(255,255,255);
}

  </style>
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
        {!! Form::label('nombre','Nombre ') !!}<br>
        {{ Form::text('nombre',null,['class'=>'noom','required']) }}
      </div>
      <div class="form-group">
        {{ Form::label('Descripcion','Descripcion ') }}<br>
        {{ Form::textarea('descripcion', null, ['class' => 'descrii','placeholder'=>'Descripcion','rows'=>'3']) }}
      </div>
      <div class="form-group">
        {!! Form::file('file',['class'=>'cco','id'=>'files']) !!}
      </div>
      <center>
      <div class="list" id="list">
      </div>
      </center>
      <div class="form-group">
        {!! Form::label('cupos','Cupos') !!}
        {!! Form::number('cupos',null,['class'=>'cuup','required'])!!}
      </div>
      <div class="form-group">
        {!! Form::label('clave','Clave') !!}
        {!! Form::number('clave',null,['class'=>'claav','required'])!!}
      </div>
      <select  name="profesor" class="form-control" required>
        <option value="">Seleccione un profesor</option>
        @foreach ($profesor as $pro)
        <option value="{{ $pro->PRO_id}}">{{ $pro->PRO_nombre}} {{ $pro->PRO_apellido_p}} {{ $pro->PRO_apellido_m }}  </option>
        @endforeach
      </select>
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



