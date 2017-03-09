<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cursos</title>
</head>
<body>
	<h1>Lista de cursos</h1>
	<table border="1">
		<tr>
			<th>Nombre</th>
			<th>Apelldio Paterno</th>
			<th>Apellido Materno</th>
			<th>Sexo</th>
		</tr>
		@foreach ($profesor as $pro)
		<tr>
			<td>{{ $pro->PRO_nombre }}</td>
			<td>{{ $pro->PRO_apellido_p }}</td>
			<td>{{ $pro->PRO_apellido_m }}</td>
			<td>{{ $pro->PRO_sexo }}</td>
		</tr>
		@endforeach
	</table>
</body>
</html>