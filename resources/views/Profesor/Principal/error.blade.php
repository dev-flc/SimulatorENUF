<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Deshabilitado</title>
  <link rel="icon" href="/img/curso.png">
  <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
  <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
</head>
<header>
<!-- inicio navbar -->
<nav  class="navbar navbar-default navbar-fixed-top" id="nav">
  <div class="container-fluid">
  <br>
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">ENUF</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Profesor <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li role="separator" class="divider"></li>
            <li>
              <a href="{{ url('/logout') }}" onclick="event.preventDefault();   document.getElementById('logout-form').submit();" >
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span> Cerrar sesión
              </a>
              <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>
            </li>
          </ul>
        </li>

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</header>
<body>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<style type="text/css">
  h1,h2,h3,h4
{
  font-family: 'Poiret One', cursive;
}
h1{
  font-size: 60px;
}
h4
{
  font-size: 20px;
}
</style>
<center>
<h1>
  {{ $pro->PRO_nombre }} {{ $pro->PRO_apellido_p }} {{ $pro->PRO_apellido_m }}
</h1>
<h4>Lo sentimos tu cuenta esta deshabilitada, para activarla ponte en contacto con el administrador</h4>
<p><a href="{{ url('/logout') }}" onclick="event.preventDefault();   document.getElementById('logout-form').submit();" >
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span> Cerrar sesión
              </a></p>
</center>


<script  src="{{ asset('plugins/jQuery/jquery-3.1.1.js') }}"></script>
<script  src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>

</body>
</html>
