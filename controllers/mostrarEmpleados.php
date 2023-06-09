<?php

require_once "../models/crud.php";
$obj=new Crud();
$datos=$obj->listarModelEmpleados();

$tabla='<table class="table table-dark">
	<thead>
		<tr class="font-weight-bold">
			<td>ID</td>
			<td>Cargo</td>
			<td>CI</td>
			<td>Nombre</td>
			<td>Paterno</td>
			<td>Materno</td>
			<td>Direccion</td>
			<td>Telefono</td>
			<td>Fecha_Nac</td>
			<td>Genero</td>
			<td>Interes</td>
			<td>Editar</td>
			<td>Eliminar</td>
		</tr>
	</thead>
	<tbody>';
$datosTabla="";
foreach($datos as $row => $item){
    $datosTabla=$datosTabla.'<tr>
 			<td>'.$item['id_empleado'].'</td>
 			<td>'.$item['cargo'].'</td>
 			<td>'.$item['ci'].'</td>
 			<td>'.$item['nombre'].'</td>
 			<td>'.$item['paterno'].'</td>
 			<td>'.$item['materno'].'</td>
 			<td>'.$item['direccion'].'</td>
 			<td>'.$item['telefono'].'</td>
 			<td>'.$item['fecha_nacimiento'].'</td>
 			<td>'.$item['genero'].'</td>
 			<td>'.$item['intereses'].'</td>
 			<td>
 				<span class="btn btn-warning btn-sm" onclick="modificarEmpleado('.$item['id_empleado'].')" data-toggle="modal" data-target="#actualizarModal">
 					<i class="fa fa-edit"></i>
 				</span>
 				
 			</td>
 			<td>
 				<span class="btn btn-danger btn-sm" onclick="eliminarEmpleado('.$item['id_empleado'].')">
 					<li class="fa fa-trash"></li>
 				</span>
 			</td>
 		</tr>';
}
echo $tabla.$datosTabla;
echo "</tbody></table>";

?>