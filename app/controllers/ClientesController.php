<?php 	

class ClientesController extends BaseController
{
//abre la pagina principal de clientes
	public function get_index()
	{
		$clientes=Cliente::all();
		return View::make('clientes.index')->with('clientes',$clientes);
	}

//vista para crear un formulario
	public function get_formulario()
	{
		return View::make('clientes.crearcliente');
	}

	public function post_formulario()
	{
		$recibir= Input::all();
		$reglas =array(
			'nombre'=>'required|min:6|max:20',
			'apellido'=>'required|min:6|max:20',
			'direccion'=>'required|min:6|max:20',
			'correo'=>'required|min:6|max:20|unique:clientes,correo',
			);


		$mensaje=array(
			'required'=>'Campo Obligatorio',
		);

		$validar=Validator::make($recibir,$reglas,$mensaje);

		if($validar->fails()){
			return Redirect::back()->withErrors($validar);
		}
		else{
			$cliente=new Cliente;
			$cliente->nombre=Input::get('nombre');
			$cliente->apellido=Input::get('apellido');
			$cliente->direccion=Input::get('direccion');
			$cliente->correo=Input::get('correo');
			$cliente->save();	

			Session::flash('mensaje','Cliente Registrado Exitosamente');
			return Redirect::to('clientes');
		}

	}

}


