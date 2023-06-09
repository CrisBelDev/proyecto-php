<?php

require_once "../models/crud.php";
$pas1=$_POST['pass1'];
$pas2=$_POST['pass2'];
if(strcmp($pas1, $pas2)==0){
	$pas=md5($pas1);

	$datos=array(
		'id_empleado' => $_POST['id_empleado'],
		'usuario' => $_POST['usuario'],
		'pasword'=> $pas,
		'nivel' => $_POST['nivel'],
		'estado' => $_POST['estado']
			);

echo Crud::insertarModelUsuario($datos);
}


?>