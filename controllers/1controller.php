<?php 

require_once "../../models/crud.php";
class mvc{
	public function empleadoCargoLIST(){
		$data = Crud::listarEmpleadoCargo();
		// print_r($data);
		foreach ($data as $key => $valor) {
			echo "<tr>
        			<td>".$valor["ci"]."</td>
        			<td>".$valor["nombre"]."</td>
        			<td>".$valor["paterno"]."</td>
        			<td>".$valor["materno"]."</td>
        			<td>".$valor["cargo"]."</td>
        		</tr>";
		}
	}
	public function pdfAsignarCursoController(){
		$data = Crud::listarEmpleadoCargo();
	}
}