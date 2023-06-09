<?php

	require_once "../models/crud.php";
	$id=$_POST["id_provedores"];
	echo Crud::eliminarProveedor($id);

 ?>