<?php 
class UsuarioTableSeeder extends Seeder{
	public function run(){

		$usuario = new Usuario;

		$usuario->nombre='Steve';
		$usuario->apellido='Rogers';
		$usuario->contrasena='123';
		$usuario->email='capitan@america.com';
		$usuario->save();

		$usuario = new Usuario;

		$usuario->nombre='Natashaf';
		$usuario->apellido='Romanof';
		$usuario->contrasena='123';
		$usuario->email='viuda@negra.com';
		$usuario->save();


	}
}

 ?>