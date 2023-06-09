<!DOCTYPE html>
<html>
<head>
	<title>PDO</title>
	<link rel="stylesheet" type="text/css" href="../librerias/bootstrap4/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script src="../librerias/bootstrap4/jquery2.js"></script>
	<script src="../librerias/bootstrap4/popper.min.js"></script>
	<script src="../librerias/bootstrap4/bootstrap.min.js"></script>
	<script src="../librerias/bootstrap4/jquery2.js"></script>
	<script src="../librerias/sweetalert.min.js"></script>
	<script src="../js/jquery3.js"></script>
	
    <script src="../js/jquery.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/portafolio.css">
    <link rel="stylesheet" href="../vendor/dataTables/css/dataTables.bootstrap4.min.css">

</head>
<body>
	<?php require_once "../inc/menu1.php"; ?><div id="contenedorLista"></div>
	<div class="container">
		<div class="row">
			<h2>LISTA</h2>
			<div class="col-sm-12">
				<div class="card text-left">
					<div class="card-header">
						<ul class="nav nav-tabs card-header-tabs">
							<li class="nav-item">
								<a class="nav-link active" href="#">CARGOS</a>
							</li>
						</ul>

					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-sm-12">
								<span class="btn btn-primary" data-toggle="modal" data-target="#insertarModal">
									<i class="fa fa-plus-circle"></i> Nuevo registro
								</span>
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
								  buscar Personal
								</button>
								<a href="../../pdf/print.php" class="btn btn-link" target="out_blamk">reporte</a>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document" >
    <div class="modal-content" id="mdialTamanio">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Personal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table id="empleadoCargo" class="table table-striped table-dark" style="width: 100%;">
        	<thead>
        		<tr>
        			<td>ci</td>
        		<td>Nombre</td>
        		<td>paterno</td>
        		<td>materno</td>
        		<td>cargo</td>
        		</tr>
        		
        	</thead>
        	<tbody>
        		
        		<?php  
        			require_once  '../../controllers/1controller.php';
        			$lista = new mvc();
        			$lista-> empleadoCargoLIST();
        		?>
        	</tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-sm-12">
								
								<div id="tablaDatosCargos"></div>		
									
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="../js/jquery.js"></script>
	<script src="../vendor/dataTables/js/jquery.dataTables.min.js"></script>
	<script src="../vendor/dataTables/js/dataTables.bootstrap4.min.js"></script>
    <script src="../js/crud.js"></script>
	<?php require_once "insertCargo.php" ?>
	<?php require_once "updateCargo.php" ?>
	<script type="text/javascript">
		mostrarCargos();
	</script>

</body>
</html>