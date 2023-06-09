<?php 

	require_once "../models/crud.php";
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

 ?>