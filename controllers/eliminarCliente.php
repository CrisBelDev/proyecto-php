<?php

	require_once "../models/crud.php";
	$id=$_POST["id_cliente"];
	echo Crud::eliminarCliente($id);

 ?>