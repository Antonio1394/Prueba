
@extends('layouts.default')

@section('contenido')
<h1>Editar {{$usuario->nombre}} {{$usuario->apellido}}</h1>


{{Form::model($usuario,array('action'=>array('UsuariosController@actualizar',$usuario->id),'method'=>'post'))}}

<div class="form-group">
	{{Form::label('nombre','Nombre')}}
	{{Form::text('nombre',null,array('class'=>'form-control'))}}
	{{$errors->first('nombre')}}
</div>

<div class="form-group">
	{{Form::label('apellido','Apellido')}}
	{{Form::text('apellido',null,array('class'=>'form-control'))}}
	{{$errors->first('apellido')}}
</div>


<div class="form-group">
	{{Form::label('contrasena','Contraseña')}}
	{{Form::password('contrasena',array('class'=>'form-control'))}}
	{{$errors->first('contrasena')}}
</div>

<div class="form-group">
	{{Form::label('contrasena_repite','Repite contraseña')}}
	{{Form::password('contrasena_repite',array('class'=>'form-control'))}}
	{{$errors->first('contrasena_repite')}}
</div>



<div class="form-group">
	{{Form::label('email','Email')}}
	{{Form::email('email',null,array('class'=>'form-control','disabled'=>'disabled'))}}
	{{$errors->first('email')}}
</div>


{{Form::submit('Editar el Usuario',array('class'=>'btn btn-primary'))}}
{{Form::close()}}


@stop