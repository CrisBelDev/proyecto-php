<?php 

	require_once "../models/crud.php";
	$id=$_POST["id_empleado"];
	echo json_encode(Crud::modificarEmpleado($id));

 ?>