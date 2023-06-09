<?php 

	require_once "../models/crud.php";
	$datos=array(
			'id_empleado' => $_POST['id_empleadou'],
			'id_cargos' => $_POST['id_cargosu'],
			'ci' => $_POST['ciu'],
			'nombre' => $_POST['nombreu'],
			'paterno' => $_POST['paternou'],
			'materno' => $_POST['maternou'],
			'direccion' => $_POST['direccionu'],
			'telefono' => $_POST['telefonou'],
			'fecha_nacimiento' => $_POST['fecha_nacimientou']
				);
	echo Crud::actualizarEmpleado($datos);

 ?>