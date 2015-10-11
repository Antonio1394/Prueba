@extends('layouts.default')

@section('contenido')

@if(Session::has('mensaje'))
<div class="alert alert-info">{{Session::get('mensaje')}}</div>

@endif

<h1>Todos los Usuarios</h1>
<table class="table table-striped table bordered">
	 <thread>
	 	<tr>
	 		<td>Id</td>
	 		<td>Nombre</td>
	 		<td>Apellido</td>
	 		<td>Email</td>
	 		<td></td>
	 	</tr>
	 </thread>

	 <tbody>
	 	@foreach($usuarios as $valor)
	 		<tr>
	 			<td>{{ $valor->id}}</td>
	 			<td>{{ $valor->nombre}}</td>
	 			<td>{{ $valor->apellido}}</td>
	 			<td>{{ $valor->email}}</td>
	 			<td>
	 				<a class="btn btn-small btn-info" href="{{URL::to('usuarios/'.$valor->id.'/editar')}}">Editar Usuario</a>
	 			</td>
	 		</tr>
	 	@endforeach
	 </tbody>

	</table>
@stop