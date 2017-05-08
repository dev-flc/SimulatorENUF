<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>@yield('title','Default')</title>
  <link rel="icon" href="/img/curso.png">
  <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
  <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/main.css') }}">
  <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
  <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
  @yield('styles')
</head>

<header>
  @include('Main.nav')
</header>
<body>
<br>
<br>
<br>
<br>
@yield('imagenprincipal')


<div class="container panelhistoria">
  <div class="container-fluid subpanelhistoria">

    @yield('content')
  </div>

</div>
<div class="container-fluid contenerdor1">
@yield('subcontenido')
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-4 subfinal">
    <center>
    <div class="container-fluid panelimg">
      <br>
      <img src="/img/diploma.png" alt="" id="divimg">
      <h2>Unidades Aprobadas</h2>
    </div>
    </center>
    </div>

    <div class="col-sm-4 subfinal">
    <center>
    <div class="container-fluid panelimg">
      <br>
      <img src="/img/reloj.png" alt="" id="divimg">
      <h2>Fechas Y Horas</h2>
    </div>
    </center>
    </div>

    <div class="col-sm-4 subfinal">
    <center>
    <div class="container-fluid panelimg">
      <br>
      <img src="/img/024-colaboracion.png" alt="" id="divimg">
      <h2>Examenes Aleatorios</h2>
    </div>
    </center>
    </div>
  </div><br><br>
</div>

<footer class="footer">
      <div class="container-fluid">
       <div class="row">
         <div class="col-sm-4"><br>
          <p id="pfooter">Centro Escolar Vicente Guerrero, Col. Jardines del Sur, Chilpancingo,Gro.</p>
          <p id="pfooter">C.P.39070</p>
         </div>
         <div class="col-sm-4"><br>
            <p id="pfooter">Contactanos</p>
            <p id="pfooter">Tel:(747) 47 2 52 27
            <p id="pfooter">e-mail: profesorrafaelramirez@outlook.es</p>
            <a href="https://www.facebook.com/escuelanormalurbanafederalrr/?fref=ts"><img src="/img/facebook.png" alt="" id="redes"></a>
            <a href=""><img src="/img/twiter.png" alt="" id="redes"></a>
          </div>
         <div class="col-sm-4"><br>
          <a href=""> <img src="/img/guerrero.png" alt="" id="guerrero"></a>
         </div>
       </div>
      </div>
      <!--
      <button type="button" data-toggle="modal" data-target="#myModal" id="fixedbutton" class="btn btn-danger btn-circle btn-lg">
        <span class="glyphicon glyphicon-info-sign"></span>
      </button>
      -->
</footer>

@yield('modal')


<script  src="{{ asset('plugins/jQuery/jquery-3.1.1.js') }}"></script>
<script  src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<script>
  $(window).scroll(function() {
    $('#logo').each(function(){
    var imagePos = $(this).offset().top;

    var topOfWindow = $(window).scrollTop();
      if (imagePos < topOfWindow+800) {
        $(this).addClass("hatch");
      //alert("hjdshjsd");

      }
    });
  });
</script>
  @yield('script')
</body>
</html>
