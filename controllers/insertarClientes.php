<?php

require_once "../models/crud.php";

$datos=array(
		'razonsocial' => $_POST['razonsocial'],
		'nit_cc' => $_POST['nit_cc']
			);
echo Crud::insertarModelClientes($datos);

?>