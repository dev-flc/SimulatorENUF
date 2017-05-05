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
<h2>Principal profesor</h2>
<h2>Principal profesor</h2>
<h2>Principal profesor</h2>
<h2>Principal profesor</h2>
<h2>Principal profesor</h2>
<h2>Principal profesor</h2>
<h2>Principal profesor</h2>

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
            {!! Form::text('calle',null,['class'=>'form-control','id'=>'calle','placeholder'=>'Calle','required'])!!}
          </div>
          <div class="form-group">
              {!! Form::text('colonia',null,['class'=>'form-control','id'=>'colonia','placeholder'=>'Colonia','required'])!!}
          </div>
          <div class="form-group">
              {!! Form::text('estado',null,['class'=>'form-control','id'=>'estado','placeholder'=>'Estado','required'])!!}
          </div>
          <div class="form-group">
              {!! Form::text('ciudad',null,['class'=>'form-control','id'=>'ciudad','placeholder'=>'Ciudad','required'])!!}
          </div>
          <div class="form-group">
              {!! Form::text('pais',null,['class'=>'form-control','id'=>'pais','placeholder'=>'Pais','required'])!!}
          </div>
          <div class="form-group">
              {!! Form::text('cp',null,['class'=>'form-control','id'=>'cp','placeholder'=>'CP','required'])!!}
          </div>
           <hr>
           <div class="form-group">
              {!! Form::text('password',null,['class'=>'form-control','id'=>'password','placeholder'=>'Contraseña','required'])!!}
          </div>
          <div class="form-group">
              {!! Form::text('password_verific',null,['class'=>'form-control','id'=>'password_verific','placeholder'=>'Verificar contraseña','required'])!!}
          </div>
      </div>
      <div class="modal-footer">
      <!--  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
            {{ Form::button('Guardar información <span class="glyphicon glyphicon-ok"></span> ', array('class'=>'btn btn-success pull-right','id'=>'generar', 'type'=>'submit')) }}

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
