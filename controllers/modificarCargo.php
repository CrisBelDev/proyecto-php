<?php 

	require_once "../models/crud.php";
	$id=$_POST["id_cargos"];
	echo json_encode(Crud::modificarCargo($id));

 ?>