<?php 

class UsuariosController extends BaseController{

	
	public function get_index(){

		$usuarios=Usuario::all();
		return View::make('usuarios.index')->with('usuarios',$usuarios);
	}

	public function get_formulario(){
		return View::make('usuarios.crearusuario');
	}

	public function post_formulario(){

		$recibir = Input::all();
		$reglas =array(
			'nombre'=>'required|min:6|max:20',
			'apellido'=>'required|min:6|max:20',
			'email'=>'required|min:6|max:100|unique:usuarios,email',
			'contrasena'=>'required|min:6|max:100',
			'contrasena_repite'=>'same:contrasena',

			);

		$mensajes=array(
				'required'=>'Campo Obligatorio',

			);

		$validar=Validator::make($recibir,$reglas,$mensajes);

		if($validar->fails()){
			return Redirect::back()->withErrors($validar);
		}
		else{
			$usuario=new Usuario;
			$usuario->nombre=Input::get('nombre');
			$usuario->apellido=Input::get('apellido');
			$usuario->contrasena=Input::get('contrasena');
			$usuario->email=Input::get('email');
			$usuario->save();

			Session::flash('mensaje','Usuario Creado Exitosamente');
			return Redirect::to('usuarios');
		}

	}

	
	public function editar($id){
		$usuario=Usuario::find($id);
		return View::make('usuarios.editar')->with('usuario',$usuario);

	}

	public function actualizar($id){

		$reglas =array(
			'nombre'=>'min:6|max:20',
			'apellido'=>'min:6|max:20',
			'contrasena'=>'min:6|max:100',
			'contrasena_repite'=>'same:contrasena',

			);

		$validar=Validator::make(Input::all(),$reglas);

		if($validar->fails())
		{
			return Redirect::to('usuarios/'.$id.'/editar')->withErrors($validar);
		}
		else
		{
			$usuario=Usuario::find($id);
			$usuario->nombre=Input::get('nombre');
			$usuario->apellido=Input::get('apellido');
			$usuario->contrasena=Input::get('contrasena');
			$usuario->save();

			Session::flash('mensaje','Usuario Actualizado Exitosamente');
			return Redirect::to('usuarios');
		
		}

	}
}
