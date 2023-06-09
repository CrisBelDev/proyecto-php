<?php

require_once "../models/crud.php";
$a= $_FILES["logo"]["name"];
$b= $_FILES["logo"]["tmp_name"];
 @copy($b,"../views/proveedores/img/".$a);
/*
$ruta="../views/proveedores/img/";
$ruta=$ruta.basename($_FILES["logo"]["name"]);
*/
/* 		VERIFICAR MANDO DE LA COPIA	*/
/*
if(move_uploaded_file($_FILES["logo"]["tmp_name"], $ruta)){
	echo "se subio";
}else{
	echo "no se subio el archivo";
}
*/
$datos=array(
		'empresa' => $_POST['empresa'],
		'contacto' => $_POST['contacto'],
		'email' => $_POST['email'],
		'telefono' => $_POST['telefono'],
		'direccion' => $_POST['direccion'],
		'ruta' => $a
			);
echo Crud::insertarModelProveedor($datos);
?>







