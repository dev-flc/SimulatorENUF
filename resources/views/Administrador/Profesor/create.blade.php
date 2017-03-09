<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Nuevo Profesor</title>
</head>
<body>
<h1>Crear nuevo profesor</h1>
	
	{!! Form::open(['route'=>'profesor.store','method'=>'POST']) !!}
	<div class="form-group">
		{!! Form::label('nombre','Nombre') !!}
		{!! Form::text('nombre',null,['class'=>'form-control','id'=>'nombre','required'])!!}
	</div>
	<div class="form-group">
		{!! Form::label('apellido_p','Apellido Paterno') !!}
		{!! Form::text('apellido_p',null,['class'=>'form-control','id'=>'apellido_p','required'])!!}
	</div>
	<div class="form-group">
		{!! Form::label('apellido_m','Apellido Materno') !!}
		{!! Form::text('apellido_m',null,['class'=>'form-control','id'=>'apellido_m','required'])!!}
	</div>
  <div class="form-group">
    {!! Form::label('sexo','Sexo ') !!}
    {{ Form::radio('sex', 'hombre', true) }} Hombre  {{ Form::radio('sex', 'mujer') }} Mujer
  </div>
	<hr>
	
	<div class="form-group">
		{!! Form::label('usuario','Usuario') !!}
		{!! Form::text('usuario',null,['class'=>'form-control','id'=>'usuario','required','readonly'=>'readonly'])!!}
	</div>
  <div class="form-group">
    {{ Form::button('<span class="glyphicon glyphicon-ok"></span> Generar usuario', array('class'=>'btn btn-success pull-right','id'=>'generar', 'type'=>'button')) }}
  </div>
	<div class="form-group" >
    {{ Form::button('<span class="glyphicon glyphicon-ok"></span> Registrar', array('class'=>'btn btn-success pull-right','id'=>'registrar','style'=>'display:none', 'type'=>'submit')) }}
  </div>
    {!! Form::close() !!}


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
     // $('#registrar').hide();
    $("#generar").click(function(){

        //Validar campos
        var verificar = true;
        expresion=/^([a-z ñáéíóú]{2,60})$/i; 
        //validar nombre
        if ($("#nombre").val() == "" || !expresion.test($("#nombre").val())) 
        { 
          $( "#nombre" ).focus();
          verificar=false;
        } 
        else if ($("#apellido_p").val() == "" || !expresion.test($("#apellido_p").val())) 
        { 
          $( "#apellido_p" ).focus();
          verificar=false;
        } 
        else if ($("#apellido_m").val() == "" || !expresion.test($("#apellido_m").val())) 
        { 
          $( "#apellido_m" ).focus();
          verificar=false;
        } 


        if(verificar==true)
        {
        var nombre = $('#nombre').val().substring(3, 1);
        var no = $('#nombre').val().charAt(0).toUpperCase();
        var ap = $('#apellido_p').val().substring(3, 1);
        var ap_p = $('#apellido_p').val().charAt(0).toUpperCase();
        var am = $('#apellido_m').val().substring(3, 1);
        var am_m = $('#apellido_m').val().charAt(0).toUpperCase();
        var max=10000;
        var min=5;
        var num = Math.round(Math.random() * (max - min) + min);
       // return string.charAt(0).toUpperCase() + string.slice(1);
        $("#usuario").val(ap_p+ap+am_m+am+no+nombre+"_"+num);
        $('#generar').hide();
        $('#registrar').show();
      }

    });
    });
  </script>
</body>
</html>