<?php

	require_once "../models/crud.php";
	$id=$_POST["id_usuario"];
	echo Crud::eliminarUsuario($id);

 ?>