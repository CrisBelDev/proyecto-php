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
	<script src="../librerias/sweetalert.min.js"></script>
	<script src="../js/jquery.js"></script>
	<script src="../js/crud.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/sweetalert.min.js"></script>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/portafolio.css">
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
								<a class="nav-link active" href="#">PRODUCTO</a>
							</li>
						</ul>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-sm-12">
								<span class="btn btn-primary" data-toggle="modal" data-target="#insertarModal">
									<i class="fa fa-plus-circle"></i> Nuevo registro
								</span>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-sm-12">
								
								<div id="tablaDatosProductos"></div>		
									
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php require_once "insertProducto.php" ?>
	<?php require_once "updateProducto.php" ?>
	<script type="text/javascript">
		mostrarProductos();
	</script>

</body>
</html>