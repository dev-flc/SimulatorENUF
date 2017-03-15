<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title','Default')</title>
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
	<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
 	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">
	<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
	<link rel="stylesheet" href="{{ asset('css/footer.css') }}">
  @yield('styles')
</head>

<header>
	@include('Profesor.Principal.nav')
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
    <br>
  </div>

</div>
<div class="container-fluid contenerdor1">
<br>
<br>
<br>
<center>
  <h2>EN LA ENUF NOS GUSTARÍA ESCUCHARTE Y PODER RESOLVER TUS DUDAS PARA QUE TOMES LA MEJOR DECISIÓN PARA CONTINUAR CON TUS ESTUDIOS</h2>
  <br><br>
</center>
<br>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-4">
    <center><br>
    <div class="container-fluid panelimg">
      <img src="img/diploma.png" alt="" id="divimg">
      <p><label for="">Certificada</label></p>
    </div>
    </center>
    </div>

    <div class="col-sm-4">
    <center><br>
    <div class="container-fluid panelimg">
      <img src="img/logo.png" alt="" id="divimg">
      <p><label for=""></label></p>
    </div>
    </center>
    </div>

    <div class="col-sm-4">
    <center><br>
    <div class="container-fluid panelimg">
      <img src="img/logo.png" alt="" id="divimg">
      <p><label for=""></label></p>
    </div>
    </center>
    </div>
  </div><br>
</div>


<footer class="footer">
      <div class="container-fluid">
       <div class="row">
         <div class="col-sm-4">
         <h3>Dirección</h3>
          <p id="pfooter">Avenida: Encinos 3  </p>
          <p id="pfooter">Colonia: Jardines del Sur  </p>
          <p id="pfooter">Ciudad: Chilpancingo de los Bravo</p>
          <p id="pfooter">Cp: 39074   </p>
         </div>
         <div class="col-sm-4"><br><br>
            <h3>Redes sociales</h3>
            <a href=""><img src="img/facebook.png" alt="" id="redes"></a>
            <a href=""><img src="img/twiter.png" alt="" id="redes"></a>
           <a href=""> <img src="img/google-plus.png" alt="" id="redes"></a>
          </div>
         <div class="col-sm-4">
            <h3>Contactanos</h3>
          <p id="pfooter">Telefono:  01 747 472 5227</p>
          <p id="pfooter">Correo:   enufrr@hotmail.com</p>

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
