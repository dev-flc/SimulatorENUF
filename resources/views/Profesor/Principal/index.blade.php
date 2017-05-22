@extends('Main.mainprofesor')

@section('title', 'Cursos')
@section('styles')
  <link rel="stylesheet" href="{{ asset('css/proprincipal.css') }}">
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
    <div class="container-fluid">
    <br>
    <center>
      <img src="/img/{{$foto}}" alt="" style="width: 150px; height: 150px;">
      <h2>{{$pro->PRO_nombre}}</h2>
      <p style="text-align: center;">{{$pro->PRO_apellido_p}} {{$pro->PRO_apellido_m}}</p>
      <p style="text-align: center;">Profesor</p>
    </center>
    </div>
  </div>
  <div class="col-sm-8">
  <center>
    <h1>Cursos</h1>
  </center>
  <div class="row">
 @foreach($curso as $cur)
  <div class="col-sm-6">
      <div class="container-fluid panelcursos">
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
          <style type="text/css">
            .btn-primary-btn
            {
              border: 1px solid rgb(133, 193, 233);
              transition: .7s;
              width: 100%;
            }
            .btn-primary-btn:hover
            {
              background: rgb(52, 152, 219);
              color: rgb(255,255,255);
            }
          </style>
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

