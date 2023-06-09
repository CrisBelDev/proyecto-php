<?php

require_once "../models/crud.php";
$intereses=$_POST['intereses'];
$interesess=" ";
foreach ($intereses as $i => $v) {
$interesess=$interesess."  ".$intereses[$i];
}
$datos=array(
		'id_cargos' => $_POST['id_cargos'],
		'ci' => $_POST['ci'],
		'nombre' => $_POST['nombre'],
		'paterno' => $_POST['paterno'],
		'materno' => $_POST['materno'],
		'direccion' => $_POST['direccion'],
		'telefono' => $_POST['telefono'],
		'fecha_nacimiento' => $_POST['fecha_nacimiento'],
		'genero' => $_POST['genero'],
		'intereses' => $interesess
			);

echo Crud::insertarModelEmpleados($datos);

?>