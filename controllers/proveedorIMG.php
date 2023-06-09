<?php  
public function registrarProvedorController(){
		if(isset($_POST["empresa"])){
			

			$ruta="views/img/";
			$ruta=$ruta . basename($_FILES["logo"]["name"]);
			echo $ruta;
			$datosController=array("empresa"=>$_POST["empresa"],
				"contacto"=>$_POST["contacto"],
				"email"=>$_POST["email"],
				"telefono"=>$_POST["telefono"],
				"direccion"=>$_POST["direccion"],"ruta"=>$ruta);

			if(move_uploaded_file($_FILES["logo"]["tmp_name"], $ruta)){
				echo "se subio";
				$respuesta=listadoModel::registrarProvedorModel($datosController,"provedores");
			}else{
				echo "no se subio el archivo";
			}
			if($respuesta=="ok"){
				header("location:listaProvedor");
				
			}else{
				echo "error de registro Provedor";
			}

		}
	}
	?>