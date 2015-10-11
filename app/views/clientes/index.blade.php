@extends('layouts.default')

@section('contenido')

@if(Session::has('mensaje'))
<div class="alert alert-info">{{Session::get('mensaje')}}</div>

@endif

<a class="btn btn-danger" href="{{URL::to('clientes/crearCliente')}}">Crear Cliente</a>

<h1>Listado de Clientes</h1>
<table class="table table-striped table bordered">
	 <thread>
	 	<tr>
	 		<td>Codigo</td>
	 		<td>Nombre</td>
	 		<td>Apellido</td>
	 		<td>Direccion</td>
	 		<td>Corrreo</td>
	 		<td></td>
	 	</tr>
	 </thread>

	 <tbody>
	 	@foreach($clientes as $valor)
	 		<tr>
	 			<td>{{ $valor->id}}</td>
	 			<td>{{ $valor->nombre}}</td>
	 			<td>{{ $valor->apellido}}</td>
	 			<td>{{ $valor->direccion}}</td>
	 			<td>{{ $valor->correo}}</td>
	 			<!--<td>
	 				<a class="btn btn-small btn-info" href="{{URL::to('usuarios/'.$valor->id.'/editar')}}">Editar Usuario</a>
	 			</td>-->
	 		</tr>
	 	@endforeach
	 </tbody>

	</table>


@stop

