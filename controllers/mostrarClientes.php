<?php

require_once "../models/crud.php";
$obj=new Crud();
$datos=$obj->listarModelClientes();
$tabla='<table class="table table-dark">
	<thead>
		<tr class="font-weight-bold">
			<td>ID</td>
			<td>Razon Social</td>
			<td>NIT / CI</td>
			<td>Editar</td>
			<td>Eliminar</td>
		</tr>
	</thead>
	<tbody>';
$datosTabla="";
foreach($datos as $row => $item){
    $datosTabla=$datosTabla.'<tr>
 			<td>'.$item['id_cliente'].'</td>
 			<td>'.$item['razonsocial'].'</td>
 			<td>'.$item['nit_cc'].'</td>
 			<td>
 				<span class="btn btn-warning btn-sm" onclick="modificarCliente('.$item['id_cliente'].')" data-toggle="modal" data-target="#actualizarModal">
 					<i class="fa fa-edit"></i>
 				</span>
 				
 			</td>
 			<td>
 				<span class="btn btn-danger btn-sm" onclick="eliminarCliente('.$item['id_cliente'].')">
 					<li class="fa fa-trash"></li>
 				</span>
 			</td>
 		</tr>';
}
echo $tabla.$datosTabla;
echo "</tbody></table>";

?>