<?php 

	require_once "../models/crud.php";
	$datos=array(
			'id_cargos' => $_POST['id_cargosu'],
			'cargo' => $_POST['cargou']
				);

	echo Crud::actualizarCargo($datos);

 ?>