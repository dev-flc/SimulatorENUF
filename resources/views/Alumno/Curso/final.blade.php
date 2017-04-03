@extends('Main.main')

@section('title', 'Examenes')

<!-- Contenido Principal -->
@section('imagenprincipal')
  <div class="seccionone">
  <style type="text/css">
    #pri1
    {
      height: 350px;
      width: 100%;
    }
  </style>
  <img id="pri1" src="/img/pri2.png" alt="">
  </div>
@endsection

<!-- Contenido -->
@section('content')
<style>
  .perfildiv
  {
    background: rgb(244, 246, 246);
    height: 500px;
  }
  #imgperfil
  {
    width: 175px;
    height: 250px;
    box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
  }
  .btn-registro
  {
    width: 50%;
    height: 50px;
    background: rgb(255,255,255);
    border:none;
    border: 1px solid rgb(220,220,220);
    font-size: 20px;
    color: #666;
    transition: .7s;
  }
  .btn-registro:hover
  {
    border: 1px solid rgb(52, 152, 219);
    background: rgb(52, 152, 219);
    color: rgb(255,255,255);
  }

.clave
{
  width: 100%;
  outline: none;
  padding: 15px;
  background: none;
  border: none;
  border-bottom: 2px solid rgb(220,220,220);
  font-size: 20px;
  text-align: center;
}
.clave:focus, .clave:active
{
  outline: none;
  border-bottom: 2px solid rgb(52, 152, 219);
  color: rgb(52, 152, 219);
}
.curse
{
  border: 1px solid rgb(220,220,220);
  padding: 10px;
}
.unidad
{
  border: 1px solid rgb(220,220,220);
  width: 100%;
  height: auto;
  padding: 15px;
  margin: 5px;
  font-size: 17px;
  transition: .7s;
}
.unidad:hover
{
  border: 1px solid rgb(52, 152, 219);
  color: rgb(52, 152, 219);
  border-radius: 5px;
}
.starr
{
  color: rgb(133, 193, 233);
  font-size: 20px;
}
#profe
{
  width: 150px;
  height: 200px;
}
.star
{
  color: rgb(245, 176, 65);
}
#uninom{
  width: 100%;
}
.separar
{
  width: 150%;
}
.final
{
  width: 95%;
  margin: 5px;
  border: none;
  background: none;
  border: 1px solid rgb(220,220,220);
  border-radius: 20px;
  color: rgb(128, 139, 150);
}
.prueba
{
  width: 95%;
  margin: 5px;
  border: none;
  background: none;
  border: 1px solid rgb(220,220,220);
  border-radius: 20px;
  color: rgb(128, 139, 150);
}
.final:hover{
  border: 1px solid rgb(46, 204, 113);
  color: rgb(46, 204, 113);
}
.prueba:hover{
  border: 1px solid rgb(142, 68, 173);
  color: rgb(142, 68, 173);
}
.ancho
{
  width: 65%;
}
</style>
<div class="row">
  <div class="col-sm-4">
    <br>
    <div class="container-fluid perfildiv">
      <center><br>
        <img id="imgperfil" src="/img/profesor.jpg" alt="">
      </center>
    </div>
  </div>
  <div class="col-sm-8 ">
    <br>
    <div class="curse">
    <center><h1>{{ $curso->CUR_nombre }} <img src="/img/foto.png" alt=""></h1></center>
  </div>
  <div class="col-sm-12">
    <h2>Descripción</h2>
      <p>{{ $curso->CUR_descripcion }}
      </p>
    <hr>
  </div>
  <div class="col-sm-8">
    <h2>Unidades</h2>
    @foreach($unidad as $uni)
      <div class="unidad">
       <table>
<tr>
        <td class="separar ancho">
          <p><center>{{ $uni->UNI_nombre }}</center></p>
        </td>
        <td class="separar">
          <center>
            <h2>7</h2>
          </center>
        </td>
        </tr>
        <tr>
        <td class="separar ancho">
          <a href="{{ route('examenprueba', $uni->UNI_id) }}">
            <button class="prueba">Examen de preuba</button>
          </a>
        </td>
        <td class="separar">
          <a href="{{ route('examenfinal', $uni->UNI_id) }}">
            <button class="final">Examen de Final</button>
          </a>
        </td>
        </tr>
       </table>
      </div>
      @endforeach
      <br>
    </div>
  <div class="col-sm-4">
  <h2>Profesor</h2>
    <div class="thumbnail">
      <img src="/img/profesor.jpg" id="profe" alt="...">
      <div class="caption">
        <center>
          <h3>Nombre Profesor Ahora</h3>
          <span class="glyphicon glyphicon-star-empty star" aria-hidden="true"></span>
          <span class="glyphicon glyphicon-star-empty star" aria-hidden="true"></span>
          <span class="glyphicon glyphicon-star-empty star" aria-hidden="true"></span>
          <span class="glyphicon glyphicon-star-empty star" aria-hidden="true"></span>
          <span class="glyphicon glyphicon-star-empty star" aria-hidden="true"></span>
        </center>
      </div>
    </div>
  </div>
  </div>
</div>
@endsection

<!-- subcontenido -->
@section('subcontenido')

@endsection

<!-- Modals-->
@section('modal')

@endsection

<!--Script -->
@section('script')

@endsection

