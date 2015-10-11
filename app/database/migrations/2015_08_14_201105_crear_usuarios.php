<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearUsuarios extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuarios',function($tabla){
			$tabla->increments('id');
			$tabla->string('nombre',50);
			$tabla->string('apellido',50);
			$tabla->string('contrasena');
			$tabla->string('email')->unique();
			$tabla->timestamps();//crea dos campos la fecha de creacion y actualizacion
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('usuarios');
	}

}
