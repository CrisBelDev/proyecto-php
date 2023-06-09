<?php 

require_once "../models/crud.php";
class controller extends Crud{
	/******************
	*****************
		CLIENTE
	*****************
	******************/
	public function insertarClientes(){
		$datos=array(
		'razonsocial' => $_POST['razonsocial'],
		'nit_cc' => $_POST['nit_cc']
			);
		echo Crud::insertarModelClientes($datos);
	}
	public function mostrarClientes(){
		$obj=new Crud();
		$datos=$obj->listarModelClientes();
		$tabla='<table class="table table-dark">
			<thead>
				<tr class="font-weight-bold">
					<td>ID</td>
					<td>Razon Social</td>
					<td>NIT / CI</td>
					<td>Editar</td>
					<td>Eliminar</td>
				</tr>
			</thead>
			<tbody>';
		$datosTabla="";
		foreach($datos as $row => $item){
		    $datosTabla=$datosTabla.'<tr>
		 			<td>'.$item['id_cliente'].'</td>
		 			<td>'.$item['razonsocial'].'</td>
		 			<td>'.$item['nit_cc'].'</td>
		 			<td>
		 				<span class="btn btn-warning btn-sm" onclick="modificarCliente('.$item['id_cliente'].')" data-toggle="modal" data-target="#actualizarModal">
		 					<i class="fa fa-edit"></i>
		 				</span>
		 			</td>
		 			<td>
		 				<span class="btn btn-danger btn-sm" onclick="eliminarCliente('.$item['id_cliente'].')">
		 					<li class="fa fa-trash"></li>
		 				</span>
		 			</td>
		 		</tr>';
		}
		echo $tabla.$datosTabla;
		echo "</tbody></table>";
	}
	public function modicarCliente(){
		$id=$_POST["id_cliente"];
		echo json_encode(Crud::modificarCliente($id));
	}
	public function actualizarCliente(){
		$datos=array(
			'id_cliente' => $_POST['id_clienteu'],
			'razonsocial' => $_POST['razonsocialu'],
			'nit_cc' => $_POST['nit_ccu']
				);
		echo Crud::actualizarCliente($datos);
	}
	public function eliminarCliente(){
		$id=$_POST["id_cliente"];
		echo Crud::eliminarCliente($id);
	}
	/****************
	*****************
		CARGO
	*****************
	*****************/
	public function insertarCargos(){
		$datos=array(
			'cargo' => $_POST['cargo']
			);
		echo Crud::insertarModelCargos($datos);
	}
	public function mostrarCargos(){
		$obj=new Crud();
		$datos=$obj->listarModelCargos();
		$tabla='<table class="table table-dark">
			<thead>
				<tr class="font-weight-bold">
					<td>ID</td>
					<td>Cargo</td>
					<td>Editar</td>
					<td>Eliminar</td>
				</tr>
			</thead>
			<tbody>';
		$datosTabla="";
		foreach($datos as $row => $item){
		    $datosTabla=$datosTabla.'<tr>
		 			<td>'.$item['id_cargos'].'</td>
		 			<td>'.$item['cargo'].'</td>
		 			<td>
		 				<span class="btn btn-warning btn-sm" onclick="modificarCargo('.$item['id_cargos'].')" data-toggle="modal" data-target="#actualizarModal">
		 					<i class="fa fa-edit"></i>
		 				</span>
		 				
		 			</td>
		 			<td>
		 				<span class="btn btn-danger btn-sm" onclick="eliminarCargo('.$item['id_cargos'].')">
		 					<li class="fa fa-trash"></li>
		 				</span>
		 			</td>
		 		</tr>';
		}
		echo $tabla.$datosTabla;
		echo "</tbody></table>";
	}
	public function modicarCargo(){
		$id=$_POST["id_cargos"];
		echo json_encode(Crud::modificarCargo($id));
	}
	public function actualizarCargo(){
		$datos=array(
			'id_cargos' => $_POST['id_cargosu'],
			'cargo' => $_POST['cargou']
				);S
		echo Crud::actualizarCargo($datos);
	}
	public function eliminarCargo(){
		$id=$_POST["id_cargos"];
		echo Crud::eliminarCargo($id);
	}
	/*************
	*****************
		EMPLEADO
	**************
	*****************/
	public function insertarEmpleado(){
		$intereses=$_POST['intereses'];
		$interesess=" ";
		foreach ($intereses as $i => $v) {
		$interesess=$interesess."  ".$intereses[$i];
		}
		$datos=array(
				'id_cargos' => $_POST['id_cargos'],
				'ci' => $_POST['ci'],
				'nombre' => $_POST['nombre'],
				'paterno' => $_POST['paterno'],
				'materno' => $_POST['materno'],
				'direccion' => $_POST['direccion'],
				'telefono' => $_POST['telefono'],
				'fecha_nacimiento' => $_POST['fecha_nacimiento'],
				'genero' => $_POST['genero'],
				'intereses' => $interesess
					);
		echo Crud::insertarModelEmpleados($datos);
	}
	public function mostrarEmpleado(){
		$obj=new Crud();
		$datos=$obj->listarModelEmpleados();
		$tabla='<table class="table table-dark">
			<thead>
				<tr class="font-weight-bold">
					<td>ID</td>
					<td>Cargo</td>
					<td>CI</td>
					<td>Nombre</td>
					<td>Paterno</td>
					<td>Materno</td>
					<td>Direccion</td>
					<td>Telefono</td>
					<td>Fecha_Nac</td>
					<td>Genero</td>
					<td>Interes</td>
					<td>Editar</td>
					<td>Eliminar</td>
				</tr>
			</thead>
			<tbody>';
		$datosTabla="";
		foreach($datos as $row => $item){
		    $datosTabla=$datosTabla.'<tr>
		 			<td>'.$item['id_empleado'].'</td>
		 			<td>'.$item['cargo'].'</td>
		 			<td>'.$item['ci'].'</td>
		 			<td>'.$item['nombre'].'</td>
		 			<td>'.$item['paterno'].'</td>
		 			<td>'.$item['materno'].'</td>
		 			<td>'.$item['direccion'].'</td>
		 			<td>'.$item['telefono'].'</td>
		 			<td>'.$item['fecha_nacimiento'].'</td>
		 			<td>'.$item['genero'].'</td>
		 			<td>'.$item['intereses'].'</td>
		 			<td>
		 				<span class="btn btn-warning btn-sm" onclick="modificarEmpleado('.$item['id_empleado'].')" data-toggle="modal" data-target="#actualizarModal">
		 					<i class="fa fa-edit"></i>
		 				</span>
		 				
		 			</td>
		 			<td>
		 				<span class="btn btn-danger btn-sm" onclick="eliminarEmpleado('.$item['id_empleado'].')">
		 					<li class="fa fa-trash"></li>
		 				</span>
		 			</td>
		 		</tr>';
		}
		echo $tabla.$datosTabla;
		echo "</tbody></table>";
	}
	public function modicarEmpleado(){
		$id=$_POST["id_empleado"];
		echo json_encode(Crud::modificarEmpleado($id));
	}
	public function actualizarEmpleado(){
		$datos=array(
			'id_empleado' => $_POST['id_empleadou'],
			'id_cargos' => $_POST['id_cargosu'],
			'ci' => $_POST['ciu'],
			'nombre' => $_POST['nombreu'],
			'paterno' => $_POST['paternou'],
			'materno' => $_POST['maternou'],
			'direccion' => $_POST['direccionu'],
			'telefono' => $_POST['telefonou'],
			'fecha_nacimiento' => $_POST['fecha_nacimientou']
				);
		echo Crud::actualizarEmpleado($datos);
	}
	public function eliminarEmpleado(){
		$id=$_POST["id_empleado"];
		echo Crud::eliminarEmpleado($id);
	}
	/******************
	*****************
		PROVEEDOR
	****************
	******************/
	public function insertarProveedor(){
		# code...
	}
	public function mostrarProveedores(){
		$obj=new Crud();
		$datos=$obj->listarModelProveedores();
		$tabla='<table class="table table-dark">
			<thead>
				<tr class="font-weight-bold">
					<td>ID</td>
					<td>Empresa</td>
					<td>Contacto</td>
					<td>Correo</td>
					<td>Telefono</td>
					<td>Direccion</td>
					<td>Logo</td>
					<td>Editar</td>
					<td>Eliminar</td>
				</tr>
			</thead>
			<tbody>';
		$datosTabla="";
		foreach($datos as $row => $item){
		    $datosTabla=$datosTabla.'<tr>
		 			<td>'.$item['id_provedores'].'</td>
		 			<td>'.$item['empresa'].'</td>
		 			<td>'.$item['contacto'].'</td>
		 			<td>'.$item['email'].'</td>
		 			<td>'.$item['telefono'].'</td>
		 			<td>'.$item['direccion'].'</td>
		 			<td>'.$item['logo'].'</td>
		 			<td>
		 				<span class="btn btn-warning btn-sm" onclick="modificarProveedor('.$item['id_provedores'].')" data-toggle="modal" data-target="#actualizarModal">
		 					<i class="fa fa-edit"></i>
		 				</span>
		 				
		 			</td>
		 			<td>
		 				<span class="btn btn-danger btn-sm" onclick="eliminarProveedor('.$item['id_provedores'].')">
		 					<li class="fa fa-trash"></li>
		 				</span>
		 			</td>
		 		</tr>';
		}
		echo $tabla.$datosTabla;
		echo "</tbody></table>";
	}
	public function modicarProveedor(){
		# code...
	}
	public function actualizarProveedor(){
		$datos=array(
			'id_producto' => $_POST['id_productou'],
			'id_provedores' => $_POST['id_provedoresu'],
			'nombre' => $_POST['nombreu'],
			'descripcion' => $_POST['descripcionu'],
			'costocompra' => $_POST['costocomprau'],
			'costoventa' => $_POST['costoventau'],
			'stock' => $_POST['stocku'],
			'fecha' => $_POST['fechau']
				);
		echo Crud::actualizarProducto($datos);
	}
	public function eliminarProveedor(){
		$id=$_POST["id_provedores"];
		echo Crud::eliminarProveedor($id);
	}
	/****************
	*****************
		PRODUCTO
	*****************
	******************/
	public function insertarProducto(){
		$datos=array(
		'id_provedores' => $_POST['id_provedores'],
		'nombre' => $_POST['nombre'],
		'descripcion' => $_POST['descripcion'],
		'costocompra' => $_POST['costocompra'],
		'costoventa' => $_POST['costoventa'],
		'stock' => $_POST['stock']
			);
		echo Crud::insertarModelProductos($datos);
	}
	public function mostrarProductos(){
		$obj=new Crud();
		$datos=$obj->listarModelProductos();
		$tabla='<table class="table table-dark">
			<thead>
				<tr class="font-weight-bold">
					<td>ID</td>
					<td>Proveedor</td>
					<td>Nombre</td>
					<td>Descripcion</td>
					<td>Costo Compra</td>
					<td>Costo Venta</td>
					<td>Stock</td>
					<td>Fecha</td>
					<td>Editar</td>
					<td>Eliminar</td>
				</tr>
			</thead>
			<tbody>';
		$datosTabla="";
		foreach($datos as $row => $item){
		    $datosTabla=$datosTabla.'<tr>
		 			<td>'.$item['id_producto'].'</td>
		 			<td>'.$item['empresa'].'</td>
		 			<td>'.$item['nombre'].'</td>
		 			<td>'.$item['descripcion'].'</td>
		 			<td>'.$item['costocompra'].'</td>
		 			<td>'.$item['costoventa'].'</td>
		 			<td>'.$item['stock'].'</td>
		 			<td>'.$item['fecha'].'</td>
		 			<td>
		 				<span class="btn btn-warning btn-sm" onclick="modificarProducto('.$item['id_producto'].')" data-toggle="modal" data-target="#actualizarModal">
		 					<i class="fa fa-edit"></i>
		 				</span>
		 				
		 			</td>
		 			<td>
		 				<span class="btn btn-danger btn-sm" onclick="eliminarProducto('.$item['id_producto'].')">
		 					<li class="fa fa-trash"></li>
		 				</span>
		 			</td>
		 		</tr>';
		}
		echo $tabla.$datosTabla;
		echo "</tbody></table>";
	}
	public function modicarProducto(){
		$id=$_POST["id_producto"];
		echo json_encode(Crud::modificarProducto($id));
	}
	public function actualizarProducto(){
		$datos=array(
			'id_producto' => $_POST['id_productou'],
			'id_provedores' => $_POST['id_provedoresu'],
			'nombre' => $_POST['nombreu'],
			'descripcion' => $_POST['descripcionu'],
			'costocompra' => $_POST['costocomprau'],
			'costoventa' => $_POST['costoventau'],
			'stock' => $_POST['stocku'],
			'fecha' => $_POST['fechau']
				);
		echo Crud::actualizarProducto($datos);
	}
	public function eliminarProducto(){
		$id=$_POST["id_producto"];
		echo Crud::eliminarProducto($id);
	}
	
}
 ?>