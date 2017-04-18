<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Calificación</title>
  <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
  <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
</head>
<body>
<style type="text/css">
  .divcal
  {
    border:1px solid rgb(46, 204, 113);
    width: 200px;
    height: 200px;
    border-radius: 50%;
  }
  img
  {
    width: 100px;
    height: 100px;
  }
  h1,h2,h3,p,#tiempo
{
  font-family: 'Poiret One', cursive;
}
h2
{
  font-size: 40px;
  color: rgb(46, 204, 113);
}
p
{
  font-size: 20px;
}
#tiempo
{
  font-size: 20px;
}
</style>
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
        retornara en... <div id="tiempo">10</div>
      </p>
  </center>
</div>




<script  src="{{ asset('plugins/jQuery/jquery-3.1.1.js') }}"></script>
<script  src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>

<script type="text/javascript">
$(document).ready(function(){
  var tiempo = {
    segundo:11
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
