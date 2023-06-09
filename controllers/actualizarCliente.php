<?php 

	require_once "../models/crud.php";
	$datos=array(
			'id_cliente' => $_POST['id_clienteu'],
			'razonsocial' => $_POST['razonsocialu'],
			'nit_cc' => $_POST['nit_ccu']
				);
	echo Crud::actualizarCliente($datos);

 ?>