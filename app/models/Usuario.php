<?php 

	class Usuario extends Eloquent{
		
		public function SetContrasenaAttribute($contrasena){
			$this->attributes['contrasena']=Hash::make($contrasena);
		}
	}

 ?>