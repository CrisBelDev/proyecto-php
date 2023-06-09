<?php

require_once "../models/crud.php";
$obj=new Crud();
$datos=$obj->listarModelCargos();
$tabla='<table id="cargosTabla" class="table table-dark table-striped dt-responsive">
	<thead>
		<tr class="font-weight-bold">
			<td>ID</td>
			<td>Cargo</td>
			<td>Editar</td>
			<td>Eliminar</td>
		</tr>
	</thead>
	<tbody>';
$datosTabla="";
foreach($datos as $row => $item){
    $datosTabla=$datosTabla.'<tr>
 			<td>'.$item['id_cargos'].'</td>
 			<td>'.$item['cargo'].'</td>
 			<td>
 				<span class="btn btn-warning btn-sm" onclick="modificarCargo('.$item['id_cargos'].')" data-toggle="modal" data-target="#actualizarModal">
 					<i class="fa fa-edit"></i>
 				</span>
 				
 			</td>
 			<td>
 				<span class="btn btn-danger btn-sm" onclick="eliminarCargo('.$item['id_cargos'].')">
 					<li class="fa fa-trash"></li>
 				</span>
 			</td>
 		</tr>';
}
echo $tabla.$datosTabla;
echo "</tbody></table>";

?>