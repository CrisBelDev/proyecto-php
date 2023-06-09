<?php

	require_once "../models/crud.php";
	$id=$_POST["id_empleado"];
	echo Crud::eliminarEmpleado($id);

 ?>