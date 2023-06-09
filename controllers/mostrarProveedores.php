<?php

require_once "../models/crud.php";
$obj=new Crud();
$datos=$obj->listarModelProveedores();
$tabla='<table class="table table-dark">
	<thead>
		<tr class="font-weight-bold">
			<td>ID</td>
			<td>Empresa</td>
			<td>Contacto</td>
			<td>Correo</td>
			<td>Telefono</td>
			<td>Direccion</td>
			<td>Logo</td>
			<td>Editar</td>
			<td>Eliminar</td>
		</tr>
	</thead>
	<tbody>';
$datosTabla="";
foreach($datos as $row => $item){
    $datosTabla=$datosTabla.'<tr>
 			<td>'.$item['id_provedores'].'</td>
 			<td>'.$item['empresa'].'</td>
 			<td>'.$item['contacto'].'</td>
 			<td>'.$item['email'].'</td>
 			<td>'.$item['telefono'].'</td>
 			<td>'.$item['direccion'].'</td>
 			<td>'.$item['logo'].'</td>
 			<td>
 				<span class="btn btn-warning btn-sm" onclick="modificarProveedor('.$item['id_provedores'].')" data-toggle="modal" data-target="#actualizarModal">
 					<i class="fa fa-edit"></i>
 				</span>
 				
 			</td>
 			<td>
 				<span class="btn btn-danger btn-sm" onclick="eliminarProveedor('.$item['id_provedores'].')">
 					<li class="fa fa-trash"></li>
 				</span>
 			</td>
 		</tr>';
}
echo $tabla.$datosTabla;
echo "</tbody></table>";

?>