<?php 

class Paginas{
	
	public function enlacesPaginasModel($enlaces){


		if($enlaces == "ingresar" || $enlaces == "usuarios" || $enlaces == "editar" || $enlaces == "salir"){

			$module =  "views/modules/".$enlaces.".php";
		
		}

		else if($enlaces == "index"){

			$module =  "views/modules/provedor/registrarProvedor.php";
		}

		else if($enlaces == "listaProvedor"){

			$module =  "views/modules/provedor/listaProvedor.php";
		
		}

		else if($enlaces == "empleado"){

			$module =  "views/modules/empleado/registroEmpleado.php";
		
		}
		else if($enlaces == "listadoEmpleado"){
			$module =  "views/modules/empleado/listadoEmpleado.php";
		}

		else if($enlaces == "productos"){

			$module =  "views/modules/producto/registroProducto.php";
		
		}
		else if($enlaces == "cargo"){

			$module =  "views/modules/cargos/registroCargo.php";
		
		}
		else if($enlaces == "clientes"){

			$module =  "views/modules/cliente/registroCliente.php";
		}
		else if($enlaces == "listadoCliente"){
			$module =  "views/modules/cliente/listadoCliente.php";
		}


		else if($enlaces == "listadoCargo"){

			$module =  "views/modules/cargos/listadoCargo.php";
		
		}

		else if($enlaces == "registrousuario"){

			$module =  "views/modules/usuario/listaUsuario.php";
		
		}


		else{

			$module =  "views/modules/provedor/registrarProvedor.php";

		}
		
		return $module;

	}

}

