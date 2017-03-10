<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ver Curso</title>
</head>
<body>
	<h1>Curso</h1>
	<table border="table">
		<tr>
			<th>Nombre</th>
			<th>Cupos</th>
			<th>Fecha</th>
		</tr>

		<tr>
			<td>{{ $curso->CUR_nombre}}</td>
			<td>{{ $curso->CUR_cupos}}</td>
			<td>{{ $curso->CUR_cupos}}</td>
		</tr>

		
	</table>
</body>
</html>