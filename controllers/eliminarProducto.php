
<?php

	require_once "../models/crud.php";
	$id=$_POST["id_producto"];
	echo Crud::eliminarProducto($id);

 ?>