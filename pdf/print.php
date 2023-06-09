<?php  

require_once  "vendor/autoload.php";
require_once  "../controllers/pdf.php";
require_once  "../models/crud.php";
use Spipu\Html2Pdf\Html2Pdf;

	$respuesta=pdf::cargoEmpleado();
	
		ob_start();
		require_once "template/pdf.php";
		$dato=ob_get_clean();
		$pdf = new Html2Pdf('P','A4','es','true','UTF-8');
		$pdf -> writeHTML($dato);
		$pdf -> output("generar.pdf");
	

	















