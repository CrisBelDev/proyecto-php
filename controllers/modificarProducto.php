<?php 

	require_once "../models/crud.php";
	$id=$_POST["id_producto"];
	echo json_encode(Crud::modificarProducto($id));

 ?>