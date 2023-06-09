<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ingreso Sistema</title>
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="views/css/bootstrap.min.css">
    <link rel="stylesheet" href="views/css/estilos.css">
    <link rel="stylesheet" href="views/css/fonts.css">
	<link rel="stylesheet" href="views/css/login.css">
</head>
<body background="img/login.jpg">
	 <div class="container estatico">
	 	<div class="row mt-5 justify-content-center">
	 		<div class="col-12 col-sm-7 col-md-4  mt-5">
	 			<div class="loginbox">
					<img src="views/img/img-1.jpg" class="avatar">
					<h1>Iniciar Sesión</h1>
					<form action="control.php" id="formulario" name="formulario" method="post">
						<p>Usuario</p>
						<input type="text" id="usuario" name="usuario" placeholder="Enter Username">
						<p>Contraseña</p>
						<input type="password" name="pass1" id="pass1" placeholder="Enter password">
						<input type="submit" id="ingresar" name="ingresar" value="ingresar" value="Ingresar" class="btn btn-success">
						<a href="#">Lost you Password?</a>
						<a href="#">Dont't have an account?</a>
					</form>
				</div>
	 		</div>
	 	</div>
	 </div>
				
  <script src="js/jquery.min.js"></script>
  <script src="js/tether.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>