<?php

require_once "../models/crud.php";
$obj=new Crud();
$datos=$obj->listarModelProductos();
$tabla='<table class="table table-dark">
	<thead>
		<tr class="font-weight-bold">
			<td>ID</td>
			<td>Proveedor</td>
			<td>Nombre</td>
			<td>Descripcion</td>
			<td>Costo Compra</td>
			<td>Costo Venta</td>
			<td>Stock</td>
			<td>Fecha</td>
			<td>Editar</td>
			<td>Eliminar</td>
		</tr>
	</thead>
	<tbody>';
$datosTabla="";
foreach($datos as $row => $item){
    $datosTabla=$datosTabla.'<tr>
 			<td>'.$item['id_producto'].'</td>
 			<td>'.$item['empresa'].'</td>
 			<td>'.$item['nombre'].'</td>
 			<td>'.$item['descripcion'].'</td>
 			<td>'.$item['costocompra'].'</td>
 			<td>'.$item['costoventa'].'</td>
 			<td>'.$item['stock'].'</td>
 			<td>'.$item['fecha'].'</td>
 			<td>
 				<span class="btn btn-warning btn-sm" onclick="modificarProducto('.$item['id_producto'].')" data-toggle="modal" data-target="#actualizarModal">
 					<i class="fa fa-edit"></i>
 				</span>
 				
 			</td>
 			<td>
 				<span class="btn btn-danger btn-sm" onclick="eliminarProducto('.$item['id_producto'].')">
 					<li class="fa fa-trash"></li>
 				</span>
 			</td>
 		</tr>';
}
echo $tabla.$datosTabla;
echo "</tbody></table>";

?>