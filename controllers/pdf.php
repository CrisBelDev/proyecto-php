<?php  
require_once "../models/crud.php";
class pdf{
	public function cargoEmpleado(){
		$data = Crud::listarEmpleadoCargo();
		return $data;
	}
}