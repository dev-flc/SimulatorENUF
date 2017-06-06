<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Calificación</title>
  <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
  <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/alumnocursofinal.css') }}">
</head>
<body>
<br>
<br>
<div class="texto">
  <center>
    <h1>
      RESULTADO DE LA EVALUACIÓN FINAL ..!
    </h1>
  </center>
</div>
<br>
<br>
<div class="container-fluid divcal">
<center>
<br>
<br>
<br>
  <h2>{{$cal}}</h2>
</center>
</div>
<br>
<div class="tiempo">
  <center>
      <p>
        retornara en... <div id="tiempo">05</div>
      </p>
  </center>
</div>
<script  src="{{ asset('plugins/jQuery/jquery-3.1.1.js') }}"></script>
<script  src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<script type="text/javascript">



</script>
<script type="text/javascript">
$(document).ready(function(){
  window.location.hash="no-back-button";
   window.location.hash="Again-No-back-button" //chrome
   window.onhashchange=function(){window.location.hash="no-back-button";}

  var tiempo = {
    segundo:5
  };
  var tiempo_corriendo = null;
  tiempo_corriendo = setInterval(function(){
  tiempo.segundo--;
  $("#tiempo").text(tiempo.segundo < 10 ? '0' + tiempo.segundo : tiempo.segundo);
  if (tiempo.segundo==0)
  {
    clearInterval(tiempo_corriendo);
    var ruta="{{url('alumno/detalleunidad')}}/{{$id}}";
    $(location).attr('href',ruta)
  }
  }, 1000);
})

</script>
</body>
</html>
