@extends('layouts.default')

@section('contenido')
<h1>Crear Clientes</h1>
<a  class="btn btn-danger" href="{{URL::to('clientes')}}">Cancelar</a>

{{Form::open(array('url'=>'clientes/crearCliente','method'=>'post'))}}

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
	{{Form::label('direccion','Direccion')}}
	{{Form::text('direccion',Input::old('direccion'),array('placeholder'=>'Escribe tu direccion','class'=>'form-control'))}}
	{{$errors->first('direccion')}}
</div>


<div class="form-group">
	{{Form::label('correo','Correo')}}
	{{Form::email('correo',Input::old('correo'),array('placeholder'=>'Escribe tu correo','class'=>'form-control'))}}
	{{$errors->first('correo')}}
</div>

{{Form::submit('Crear Cliente',array('class'=>'btn btn-primary'))}}
{{Form::close()}}


@stop