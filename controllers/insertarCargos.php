<?php

require_once "../models/crud.php";

$datos=array(
		'cargo' => $_POST['cargo']
			);
echo Crud::insertarModelCargos($datos);

?>