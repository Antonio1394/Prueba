
@extends('layouts.default')

@section('contenido')
<h1>Crear un Usuario</h1>

{{Form::open(array('url'=>'usuarios/crearusuario','method'=>'post'))}}

<div class="form-group">
	{{Form::label('nombre','Nombre')}}
	{{Form::text('nombre',Input::old('nombre'),array('placeholder'=>'Escribe tu nombre','class'=>'form-control'))}}
	{{$errors->first('nombre')}}
</div>

<div class="form-group">
	{{Form::label('apellido','Apellido')}}
	{{Form::text('apellido',Input::old('apellido'),array('placeholder'=>'Escribe tu apellido','class'=>'form-control'))}}
	{{$errors->first('apellido')}}
</div>


<div class="form-group">
	{{Form::label('contrasena','Contraseña')}}
	{{Form::password('contrasena',array('placeholder'=>'Escribe tu password','class'=>'form-control'))}}
	{{$errors->first('contrasena')}}
</div>

<div class="form-group">
	{{Form::label('contrasena_repite','Repite contraseña')}}
	{{Form::password('contrasena_repite',array('placeholder'=>'Repite Contraseña','class'=>'form-control'))}}
	{{$errors->first('contrasena_repite')}}
</div>



<div class="form-group">
	{{Form::label('email','Email')}}
	{{Form::email('email',Input::old('email'),array('placeholder'=>'Escribe tu email','class'=>'form-control'))}}
	{{$errors->first('email')}}
</div>


{{Form::submit('Crear un nuevo usuario',array('class'=>'btn btn-primary'))}}
{{Form::close()}}


@stop