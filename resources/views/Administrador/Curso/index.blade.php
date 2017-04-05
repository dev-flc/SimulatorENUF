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
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span> Cerrar sesión
              </a>
              <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>
  </ul>

	<table>
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
			<td><a href="{{ route('cursos.edit', $cursos->CUR_id) }}">Editar</a></td>
			<td><a href="{{ route('curso.edit', $cursos->CUR_id) }}">Eliminar</a></td>
		</tr>
		@endforeach
	</table>
</body>
</html>
