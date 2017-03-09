<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cursos</title>
</head>
<body>
	<h1>Lista de cursos</h1>
	<table>
		<tr>
			<th>#</th>
			<th>Nombre</th>
			<th>Cupos</th>
			<th>fecha</th>
			<th>Profesor</th>
			<th>editar</th>
			<th>Eliminar</th>
		</tr>
		@foreach ($curso as $cursos)
		<tr>
			<td>{{ $cursos->CUR_id }}</td>
			<td>{{ $cursos->CUR_nombre }}</td>
			<td>{{ $cursos->CUR_cupos }}</td>
			<td>{{ $cursos->CUR_fecha }}</td>
			<td>{{ $cursos->PRO_nombre }} {{ $cursos->PRO_apellido_p }} {{ $cursos->PRO_apellido_m }}</td>
			<td><a href="{{ route('curso.edit', $cursos->CUR_id) }}">Editar</a></td>
			<td><a href="{{ route('curso.edit', $cursos->CUR_id) }}">Eliminar</a></td>
		</tr>
		@endforeach
	</table>
</body>
</html>