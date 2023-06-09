<?php

require_once "../models/crud.php";
$obj=new Crud();
$datos=$obj->listarModelUsuarios();
$tabla='<table class="table table-dark">
	<thead>
		<tr class="font-weight-bold">
			<td>ID</td>
			<td>Empleado</td>
			<td>Cargo</td>
			<td>Usuario</td>
			<td>Nivel</td>
			<td>Estado</td>
			<td>Editar</td>
			<td>Eliminar</td>
		</tr>
	</thead>
	<tbody>';
$datosTabla="";
foreach($datos as $row => $item){
    $datosTabla=$datosTabla.'<tr>
 			<td>'.$item['id_usuario'].'</td>
 			<td>'.$item['nombre'].'</td>
 			<td>'.$item['cargo'].'</td>
 			<td>'.$item['usuario'].'</td>
 			<td>'.$item['nivel'].'</td>
 			<td>'.$item['estado'].'</td>
 			<td>
 				<span class="btn btn-warning btn-sm" onclick="modificarUsuario('.$item['id_usuario'].')" data-toggle="modal" data-target="#actualizarModal">
 					<i class="fa fa-edit"></i>
 				</span>
 				
 			</td>
 			<td>
 				<span class="btn btn-danger btn-sm" onclick="eliminarUsuario('.$item['id_usuario'].')">
 					<li class="fa fa-trash"></li>
 				</span>
 			</td>
 		</tr>';
}
echo $tabla.$datosTabla;
echo "</tbody></table>";

?>