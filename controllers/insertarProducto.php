<?php

require_once "../models/crud.php";

$datos=array(
		'id_provedores' => $_POST['id_provedores'],
		'nombre' => $_POST['nombre'],
		'descripcion' => $_POST['descripcion'],
		'costocompra' => $_POST['costocompra'],
		'costoventa' => $_POST['costoventa'],
		'stock' => $_POST['stock']
			);
echo Crud::insertarModelProductos($datos);

?>