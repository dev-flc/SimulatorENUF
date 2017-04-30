@extends('Main.mainadmin')

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
	<h1>Lista de Profesores</h1>
  <hr width="400">
</center>
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Profesores</div>
  <!-- Table -->
  <table class="table">
    <tr>
      <th>Usuario</th>
	  <th>Nombre</th>
	  <th>Apelldio Paterno</th>
	  <th>Apellido Materno</th>
      <th>Sexo</th>
	  <th>Opcion</th>
	</tr>
	@foreach ($profesor as $pro)
		<tr>
            <td>{{ $pro->name }}</td>
			<td>{{ $pro->PRO_nombre }}</td>
			<td>{{ $pro->PRO_apellido_p }}</td>
			<td>{{ $pro->PRO_apellido_m }}</td>
            <td>{{ $pro->PRO_sexo }}</td>
            <td><a href="{{ route('profesores.edit', $pro->PRO_id) }}">Editar</a></td>
		</tr>
	@endforeach
	</table>
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
  </ul>
	
</body>
</html>
