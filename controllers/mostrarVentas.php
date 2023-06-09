<?php

require_once "../models/crud.php";
$obj=new Crud();
$datos=$obj->listarModelVentas();
$tabla='<table class="table table-dark">
	<thead>
		<tr class="font-weight-bold">
			<td>ID</td>
			<td>Vendedor</td>
			<td>Cliente</td>
			<td>Fecha</td>
			<td>Referencia</td>
			<td>Descuento</td>
			<td>Observacion</td>
			<td>Editar</td>
			<td>Eliminar</td>
		</tr>
	</thead>
	<tbody>';
$datosTabla="";
foreach($datos as $row => $item){
    $datosTabla=$datosTabla.'<tr>
 			<td>'.$item['id'].'</td>
 			<td>'.$item['nombrevendedor'].'</td>
 			<td>'.$item['razonsocial'].'</td>
 			<td>'.$item['fecha'].'</td>
 			<td>'.$item['ref'].'</td>
 			<td>'.$item['descuento'].'</td>
 			<td>'.$item['obs'].'</td>
 			<td>
 				<span class="btn btn-warning btn-sm" onclick="modificarVentas('.$item['id'].')" data-toggle="modal" data-target="#actualizarModal">
 					<i class="fa fa-edit"></i>
 				</span>
 				
 			</td>
 			<td>
 				<span class="btn btn-danger btn-sm" onclick="eliminarVentas('.$item['id'].')">
 					<li class="fa fa-trash"></li>
 				</span>
 			</td>
 		</tr>';
}
echo $tabla.$datosTabla;
echo "</tbody></table>";

?>