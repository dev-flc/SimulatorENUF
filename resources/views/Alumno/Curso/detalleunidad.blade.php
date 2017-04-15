@extends('Main.main')

@section('title', 'Cursos')

<!-- Contenido Principal -->
@section('imagenprincipal')
  <div class="seccionone">
  <style type="text/css">
    #pri1
    {
      height: 350px;
      width: 100%;
    }
    .divclass
    {
        background: none;
        border: 1px solid rgb(222,222,222);
        padding: 10px;
    }
    .numero{
        width: 85px;
        height: 85px;
        border-radius: 50%;
        background: red;
        position: relative;
    }
  </style>
  <img id="pri1" src="/img/pri2.png" alt="">
  </div>
@endsection

<!-- Contenido -->
@section('content')
<center><h1>Mis notas</h1></center>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6">
        <div class="container-fluid">
                <center><h2>Prueba</h2></center>
            <div class="divclass">
                <div class="row">
                    <div class="col-xs-3 col-md-3 text-center">
                        <div class="numero">
                            <h2>2</h2>
                        </div>
                    </div>
                    <div class="col-xs-9 col-md-9 section-box">
                        <h2>
                           Titulo
                        </h2>
                        <p>
                            descripcion
                        </p>
                        <hr />
                        <div class="row rating-desc">
                            <div class="col-md-12">
                                <span class="label label-primary">Calificacion: <span class="badge">42</span></span>
                                <span class="label label-success">Fecha: <span class="badge">10/09/2017</span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
         <div class="col-sm-6">
        <div class="container-fluid">
                <center><h2>Examen Final</h2></center>

            <div class="divclass">
                <div class="row">
                    <div class="col-xs-3 col-md-3 text-center">
                        <div class="numero">
                            <h2>2</h2>
                        </div>
                    </div>
                    <div class="col-xs-9 col-md-9 section-box">
                        <h2>
                           Titulo
                        </h2>
                        <p>
                            descripcion
                        </p>
                        <hr />
                        <div class="row rating-desc">
                            <div class="col-md-12">
                                <span class="label label-primary">Calificacion: <span class="badge">42</span></span>
                                <span class="label label-success">Fecha: <span class="badge">10/09/2017</span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>

<br>
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

