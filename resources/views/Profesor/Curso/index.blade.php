@extends('Main.main')

@section('title', 'Cursos')
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
<center>
	<h1>Mis Cursos</h1>
  <hr width="400">
</center>
<br>
<div class="row">
@foreach($curso as $cur)
	<div class="col-sm-4">
    	<div class="container-fluid panelcursos">
      		<div class="row">
      			<div class="col-sm-4"><br>
      			<img class="img-circle" src="http://corpboost.com/wp-content/uploads/2014/11/laravel-cb-logo1.png" alt="" width="100" height="100">
      			</div>
      			<div class="col-sm-8"><br>
      				<label for="curso">CURSO</label>
      				<p>{{ $cur->CUR_nombre}}</p>
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
      			Ver Informacion <span class="glyphicon glyphicon glyphicon-eye-open" aria-hidden="true"></span>
      		</a>
      		</center>
      		<br>
      		<br>
    	</div>
    </div>
@endforeach
</div>
<br>
<br>
@endsection

@section('subcontenido')

@endsection


