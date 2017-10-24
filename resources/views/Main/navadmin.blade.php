
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
      <ul class="nav navbar-nav">

        <li><a href="{{ route('profesores.index') }}"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Profesores</a></li>
        @if($profesor->count())
          <li>
          <a href="{{ route('cursos.index') }}"><span class="glyphicon glyphicon-education" aria-hidden="true"></span> Cursos</a>
        </li>
        <li><a href="{{ route('profesores.index') }}"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> Activar edición</a></li>
        @endif

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Administrador <span class="caret"></span></a>
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
