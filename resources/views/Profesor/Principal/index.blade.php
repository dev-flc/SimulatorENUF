@extends('Main.mainprofesor')

@section('title', 'Cursos')
@section('styles')
  <link rel="stylesheet" href="{{ asset('css/proprincipal.css') }}">
  <link rel="stylesheet" href="{{ asset('css/profesorcursosshow.css') }}">
@endsection
<!-- Contenido Principal -->
@section('imagenprincipal')
  <div class="seccionone">
    <img id="pri1" src="/img/pri2.png" alt="">
    <h1 class="titulo">Cursos</h1>
  </div>
@endsection

<!-- Contenido -->
@section('content')
<br>
<div class="row">
<div class="col-sm-3">
    <div class="card hovercard">
    <div class="cardheader">
    </div>
        <div class="avatar">
             <img alt="" src="/img/{{$foto}}">
             </div>
              <div class="info">
                    <div class="title">
                        {{ $pro->PRO_nombre }} {{ $pro->PRO_apellido_p }} {{ $pro->PRO_apellido_m }}
                    </div>
                    <div class="title"><h3>Profesor</h3></div>
                </div>
            </div>
         </div>
  <div class="col-sm-8">
  <div class="row">
 @foreach($curso as $cur)
  <div class="col-sm-6">
      <div class="panelcursos">
          <div class="row">
            <div class="col-sm-4"><br>
            <img class="img-circle" src="/img/{{ $cur->CUR_foto}}" alt="" width="100" height="100">
            </div>
            <div class="col-sm-8"><br>
              <label for="curso">CURSO</label>
              <h4>{{ $cur->CUR_nombre}}</h4>
              <label for="curso">CUPOS</label>
              <p>
                {{ $cur->CUR_cupos}}
              </p>
            </div>
          </div>
          <hr>
          <center>
          <br><br>
          <a class="btn btn-primary-btn" href="{{ route('curso.show', $cur->CUR_id) }}">
            Ver <span class="glyphicon glyphicon glyphicon-eye-open" aria-hidden="true"></span>
          </a>
          </center>
          <br>
          <br>
      </div>
    </div>
@endforeach
</div>
</div>
</div>
<br>
<br>
@endsection

<!-- subcontenido -->
@section('subcontenido')
<center>
    <br>
    <br>
    <br>
        <p id="titulo">Escuela Normal Urbana Federal</p>
        <p id="subtitulo"> "Profr. Rafael Ramírez"</p>
        <hr id="hr">  </hr>
        <p id="conten"> Licenciatura en Educacion Secundaria<br>
                        con Especialidad en Telesecuandaria </p>
</center>
@endsection

<!-- Modals-->
@section('modal')
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!--
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
        <h3 class="modal-title" id="myModalLabel">Completar información</h3>
      </div>
      <div class="modal-body">
          {!! Form::open(['route'=>['principalprofesor.update',$id],'method'=>'PUT']) !!}
          <div class="form-group">
            {!! Form::text('calle',null,['class'=>'caal','id'=>'calle','placeholder'=>'Calle','required'])!!}
          </div>
          <div class="form-group">
              {!! Form::text('colonia',null,['class'=>'cool','id'=>'colonia','placeholder'=>'Colonia','required'])!!}
          </div>
           <div class="form-group">
                        {!! Form::select('estado',[
                        ''=>'seleccione una estado',
                        'Aguascalientes'=>'Aguascalientes',
                        'Baja California'=>'Baja California',
                        'Baja California Sur'=>'Baja California Sur',
                        'Campeche'=>'Campeche',
                        'Chiapas'=>'Chiapas',
                        'Chihuahua'=>'Chihuahua',
                        'Coahuila'=>'Coahuila',
                        'Colima'=>'Colima',
                        'Distrito Federal'=>'Distrito Federal',
                        'Durango'=>'Durango',
                        'Estado de México'=>'Estado de México',
                        'Guanajuato'=>'Guanajuato',
                        'Guerrero'=>'Guerrero',
                        'Hidalgo'=>'Hidalgo',
                        'Jalisco'=>'Jalisco',
                        'Michoacán'=>'Michoacán',
                        'Morelos'=>'Morelos',
                        'Nayarit'=>'Nayarit',
                        'Nuevo Leon'=>'Nuevo Leon',
                        'Oaxaca'=>'Oaxaca',
                        'Puebla'=>'Puebla',
                        'Queretaro'=>'Queretaro',
                        'Quintana Roo'=>'Quintana Roo',
                        'San Luis Potosi'=>'San Luis Potosi',
                        'Sinaloa'=>'Sinaloa',
                        'Sonora'=>'Sonora',
                        'Tabasco'=>'Tabasco',
                        'Tamaulipas'=>'Tamaulipas',
                        'Tlaxcala'=>'Tlaxcala',
                        'Veracruz'=>'Veracruz',
                        'Yucatán'=>'Yucatán',
                        'Zacatecas'=>'Zacatecas',]
                        ,null,['class'=>'ess','required']) !!}
                </div>
          <div class="form-group">
              {!! Form::text('ciudad',null,['class'=>'ciiu','id'=>'ciudad','placeholder'=>'Ciudad','required'])!!}
          </div>
          <div class="form-group">
              {!! Form::text('pais',null,['class'=>'paai','id'=>'pais','placeholder'=>'Pais','required'])!!}
          </div>
          <div class="form-group">
              {!! Form::text('cp',null,['class'=>'cpp','id'=>'cp','placeholder'=>'CP','required'])!!}
          </div>
           <hr>
           <div class="form-group">
              {!! Form::password('password',['class'=>'pass','id'=>'password','placeholder'=>'Contraseña','required'])!!}
          </div>
          <div class="form-group">
              {!! Form::password('password_verific',['class'=>'verif','id'=>'password_verific','placeholder'=>'Verificar contraseña','required'])!!}
          </div>
      </div>
      <div class="modal-footer">
      <!--  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
            {{ Form::button('Guardar <span class="glyphicon glyphicon-ok"></span> ', array('class'=>'btn-button-a pull-right','id'=>'generar', 'type'=>'submit')) }}
         {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>
@endsection

<!--Script -->
@section('script')
@if($verifica=="true")
<script type="text/javascript">
  $('#myModal').modal('toggle');
</script>
@endif
@endsection

