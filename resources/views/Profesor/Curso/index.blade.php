@extends('Profesor.Principal.main')

@section('imagenprincipal')
	<div class="">
  		<img src="/img/conocenoss.jpg" alt="" style="width: 100%;">
	</div>
@endsection
@section('content')
<center>
	<h1>Mis Cursos</h1>
</center>
<br>

<div class="row">
@foreach($curso as $cur)
	<div class="col-sm-4">
    	<div class="container-fluid panelimg">
      		<div class="row">
      			<div class="col-sm-4"><br>
      			<img class="img-circle" src="http://corpboost.com/wp-content/uploads/2014/11/laravel-cb-logo1.png" alt="" width="100" height="100">
      			</div>
      			<div class="col-sm-8"><br>
      				<label for="curso">Curso:</label>
      				<p>{{ $cur->CUR_nombre}}</p>
      				<label for="curso">Cupos:</label>
      				<p>
      					{{ $cur->CUR_cupos}}
      				</p>
      			</div>
      		</div>
      		<hr>
      		<center>
      		<a class="btn btn-primary" href="{{ route('curso.show', $cur->CUR_id) }}">
      			Ver Informacion
      		</a>
      		<button class="btn btn-danger">Eliminar</button>
      		
      		</center>
      		<br>
      		<br>
    	</div>
    </div>
@endforeach
</div>

@endsection