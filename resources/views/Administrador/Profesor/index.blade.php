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
	<table border="1">
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
</body>
</html>
