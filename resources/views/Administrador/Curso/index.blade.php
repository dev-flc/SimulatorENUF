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
<center>
	<h1>Cursos disponibles</h1>
  <hr width="400">
</center>
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Cursos</div>
  <!-- Table -->
  <table class="table">
   <tr>
		<th>clave</th>
		<th>Nombre</th>
		<th>Cupos</th>
        <th>fecha</th>
		<th>estatus</th>
		<th>Profesor</th>
		<th>editar</th>
		<th>Eliminar</th>
		</tr>
	@foreach ($curso as $cursos)
	<tr>
		<td>{{ $cursos->CUR_clave }}</td>
		<td>{{ $cursos->CUR_nombre }}</td>
		<td>{{ $cursos->CUR_cupos }}</td>
        <td>{{ $cursos->CUR_fecha }}</td>
		<td>{{ $cursos->CUR_estatus }}</td>
		<td>{{ $cursos->PRO_nombre }} {{ $cursos->PRO_apellido_p }} {{ $cursos->PRO_apellido_m }}</td>
		<td><a href="{{ route('cursos.edit', $cursos->CUR_id) }}"><button class="btn-editar btn-pre"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button></a></a></td>

		<td><a href="{{ route('curso.edit', $cursos->CUR_id) }}"><button class="btn-eliminar btn-pre"><span class="glyphicon glyphicon glyphicon-trash" aria-hidden="true"></span></button></a></td>

		</tr>
	@endforeach
	</table>
</div>
@endsection

@section('subcontenido')

@endsection







<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cursos</title>
</head>
<body>
	<h1>Lista de cursos</h1>
  <ul>
    <li><a href="{{ route('cursos.index') }}">cursos</a></li>
    <li><a href="{{ route('cursos.create') }}">Crear cursos</a></li>
    <li><a href="{{ route('profesores.index') }}">profesores</a></li>
    <li><a href="{{ route('profesores.create') }}">Create profesores</a></li>
    <a href="{{ url('/logout') }}" onclick="event.preventDefault();   document.getElementById('logout-form').submit();" >
              </a>
              <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>
  </ul>
</body>
</html>
