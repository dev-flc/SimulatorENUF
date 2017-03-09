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
			<th>editar</th>
			<th>Eliminar</th>
		</tr>
		@foreach ($curso as $cursos)
		<tr>
			<td>{{ $cursos->CUR_id }}</td>
			<td>{{ $cursos->CUR_nombre }}</td>
			<td>{{ $cursos->CUR_cupos }}</td>
			<td>{{ $cursos->CUR_fecha }}</td>
			<td><a href="{{ route('curso.edit', $cursos->CUR_id) }}">Editar</a></td>
			<td></td>
		</tr>
		@endforeach
	</table>
</body>
</html>