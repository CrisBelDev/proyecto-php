<?php
require_once "conexion.php";
class Crud extends Conexion{
	/*************************
			CLIENTE
	**************************/
    public function listarModelClientes(){
        $sql = "SELECT * FROM cliente";
        $stmt=Conexion::conectar()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
    }
    /*public function insertarModelClientes($datos){
    	$sql="call insertCliente(:razonsocial,:nit_cc)";
    	$stmt=Conexion::conectar()->prepare($sql);
    	$stmt->bindParam(":razonsocial",$datos["razonsocial"],PDO::PARAM_STR);
    	$stmt->bindParam(":nit_cc",$datos["nit_cc"],PDO::PARAM_STR);
    	return $stmt->execute();
    	$stmt->close(); 
    }*/
    public function insertarModelClientes($datos){
    	$sql="INSERT into cliente(razonsocial,nit_cc) values(:razonsocial,:nit_cc)";
    	$stmt=Conexion::conectar()->prepare($sql);
    	$stmt->bindParam(":razonsocial",$datos["razonsocial"],PDO::PARAM_STR);
    	$stmt->bindParam(":nit_cc",$datos["nit_cc"],PDO::PARAM_STR);
    	return $stmt->execute();
    	$stmt->close(); 
    }
    public function modificarCliente($id){
		$sql="SELECT * FROM cliente where id_cliente=:id_cliente";
		$stmt=Conexion::conectar()->prepare($sql);
		$stmt->bindParam(":id_cliente",$id,PDO::PARAM_STR);
		$stmt->execute();
		return $stmt->fetch();
		$stmt->close();
	}
	public function actualizarCliente($datos){
		$sql="UPDATE cliente set razonsocial=:razonsocial,nit_cc=:nit_cc where id_cliente=:id_cliente ";
		$stmt=Conexion::conectar()->prepare($sql);
		$stmt->bindParam(":razonsocial",$datos["razonsocial"],PDO::PARAM_STR);
		$stmt->bindParam(":nit_cc",$datos["nit_cc"],PDO::PARAM_STR);
		$stmt->bindParam(":id_cliente",$datos["id_cliente"],PDO::PARAM_INT);
		return $stmt->execute();
		$stmt->close();
	}
	public function eliminarCliente($id){
		$sql="DELETE from cliente where id_cliente=:id_cliente";
		$stmt=Conexion::conectar()->prepare($sql);
		$stmt->bindParam(":id_cliente",$id,PDO::PARAM_INT);
		return $stmt->execute();
		$stmt->close();
	}
	/*************************
			CARGOS
	**************************/
	public function listarModelCargos(){
        $sql = "SELECT * FROM cargo";
        $stmt=Conexion::conectar()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
    }
    public function insertarModelCargos($datos){
    	$sql="INSERT into cargo(cargo) values(:cargo)";
    	$stmt=Conexion::conectar()->prepare($sql);
    	$stmt->bindParam(":cargo",$datos["cargo"],PDO::PARAM_STR);
    	return $stmt->execute();
    	$stmt->close(); 
    }
    public function modificarCargo($id){
		$sql="SELECT * FROM cargo where id_cargos=:id_cargos";
		$stmt=Conexion::conectar()->prepare($sql);
		$stmt->bindParam(":id_cargos",$id,PDO::PARAM_STR);
		$stmt->execute();
		return $stmt->fetch();
		$stmt->close();
	}
	public function actualizarCargo($datos){
		$sql="UPDATE cargo set cargo=:cargo where id_cargos=:id_cargos ";
		$stmt=Conexion::conectar()->prepare($sql);
		$stmt->bindParam(":cargo",$datos["cargo"],PDO::PARAM_STR);
		$stmt->bindParam(":id_cargos",$datos["id_cargos"],PDO::PARAM_INT);
		return $stmt->execute();
		$stmt->close();
	}
	public function eliminarCargo($id){
		$sql="DELETE from cargo where id_cargos=:id_cargos";
		$stmt=Conexion::conectar()->prepare($sql);
		$stmt->bindParam(":id_cargos",$id,PDO::PARAM_INT);
		return $stmt->execute();
		$stmt->close();
	}
	/*************************
			EMPLEADO
	**************************/
    public function listarModelEmpleados(){
        $sql = "call selectEmpleadoCargo()";
        $stmt=Conexion::conectar()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
    }
    public function insertarModelEmpleados($datos){
    	$sql="INSERT into empleado(id_cargos,ci,nombre,paterno,materno,direccion,telefono,fecha_nacimiento,genero,intereses) values(:id_cargos,:ci,:nombre,:paterno,:materno,:direccion,:telefono,:fecha_nacimiento,:genero,:intereses)";
    	$stmt=Conexion::conectar()->prepare($sql);
    	$stmt->bindParam(":id_cargos",$datos["id_cargos"],PDO::PARAM_INT);
    	$stmt->bindParam(":ci",$datos["ci"],PDO::PARAM_STR);
    	$stmt->bindParam(":nombre",$datos["nombre"],PDO::PARAM_STR);
    	$stmt->bindParam(":paterno",$datos["paterno"],PDO::PARAM_STR);
    	$stmt->bindParam(":materno",$datos["materno"],PDO::PARAM_STR);
    	$stmt->bindParam(":direccion",$datos["direccion"],PDO::PARAM_STR);
    	$stmt->bindParam(":telefono",$datos["telefono"],PDO::PARAM_STR);
    	$stmt->bindParam(":fecha_nacimiento",$datos["fecha_nacimiento"],PDO::PARAM_STR);
    	$stmt->bindParam(":genero",$datos["genero"],PDO::PARAM_STR);
    	$stmt->bindParam(":intereses",$datos["intereses"],PDO::PARAM_STR);
    	return $stmt->execute();
    	$stmt->close(); 
    }
    public function modificarEmpleado($id){
		$sql="SELECT * from empleado where id_empleado=:id_empleado";
		$stmt=Conexion::conectar()->prepare($sql);
		$stmt->bindParam(":id_empleado",$id,PDO::PARAM_STR);
		$stmt->execute();
		return $stmt->fetch();
		$stmt->close();
	}
	public function actualizarEmpleado($datos){
		$sql="UPDATE empleado set id_cargos=:id_cargos,ci=:ci,nombre=:nombre,paterno=:paterno,materno=:materno,direccion=:direccion,telefono=:telefono,fecha_nacimiento=:fecha_nacimiento where id_empleado=:id_empleado ";
		$stmt=Conexion::conectar()->prepare($sql);
		$stmt->bindParam(":id_cargos",$datos["id_cargos"],PDO::PARAM_STR);
		$stmt->bindParam(":ci",$datos["ci"],PDO::PARAM_STR);
		$stmt->bindParam(":nombre",$datos["nombre"],PDO::PARAM_STR);
		$stmt->bindParam(":paterno",$datos["paterno"],PDO::PARAM_STR);
		$stmt->bindParam(":materno",$datos["materno"],PDO::PARAM_STR);
		$stmt->bindParam(":direccion",$datos["direccion"],PDO::PARAM_STR);
		$stmt->bindParam(":telefono",$datos["telefono"],PDO::PARAM_STR);
		$stmt->bindParam(":fecha_nacimiento",$datos["fecha_nacimiento"],PDO::PARAM_STR);
		$stmt->bindParam(":id_empleado",$datos["id_empleado"],PDO::PARAM_INT);
		return $stmt->execute();
		$stmt->close();
	}
	public function eliminarEmpleado($id){
		$sql="DELETE from empleado where id_empleado=:id_empleado";
		$stmt=Conexion::conectar()->prepare($sql);
		$stmt->bindParam(":id_empleado",$id,PDO::PARAM_INT);
		return $stmt->execute();
		$stmt->close();
	}
	/*************************
			PROVEEDORES
	**************************/
	public function listarModelProveedores(){
        $sql = "SELECT * from provedores";
        $stmt=Conexion::conectar()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
    }
    public function insertarModelProveedor($datos){
    	$sql="INSERT into provedores(empresa,contacto,email,telefono,direccion,logo) values(:empresa,:contacto,:email,:telefono,:direccion,:logo)";
    	$stmt=Conexion::conectar()->prepare($sql);
    	$stmt->bindParam(":empresa",$datos["empresa"],PDO::PARAM_STR);
    	$stmt->bindParam(":contacto",$datos["contacto"],PDO::PARAM_STR);
    	$stmt->bindParam(":email",$datos["email"],PDO::PARAM_STR);
    	$stmt->bindParam(":telefono",$datos["telefono"],PDO::PARAM_STR);
    	$stmt->bindParam(":direccion",$datos["direccion"],PDO::PARAM_STR);
    	$stmt->bindParam(":logo",$datos["ruta"],PDO::PARAM_STR);
    	return $stmt->execute();
    	$stmt->close(); 
    }
    public function eliminarProveedor($id){
		$sql="DELETE from provedores where id_provedores=:id_provedores";
		$stmt=Conexion::conectar()->prepare($sql);
		$stmt->bindParam(":id_provedores",$id,PDO::PARAM_INT);
		return $stmt->execute();
		$stmt->close();
	}
	/*************************
			PRODUCTO
	**************************/
    public function listarModelProductos(){
        $sql = "call selectProductoProveedor()";
        $stmt=Conexion::conectar()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
    }
    public function insertarModelProductos($datos){
    	$sql="call insertProducto(:id_provedores,:nombre,:descripcion,:costocompra,:costoventa,:stock)";
    	$stmt=Conexion::conectar()->prepare($sql);
    	$stmt->bindParam(":id_provedores",$datos["id_provedores"],PDO::PARAM_INT);
    	$stmt->bindParam(":nombre",$datos["nombre"],PDO::PARAM_STR);
    	$stmt->bindParam(":descripcion",$datos["descripcion"],PDO::PARAM_STR);
    	$stmt->bindParam(":costocompra",$datos["costocompra"],PDO::PARAM_STR);
    	$stmt->bindParam(":costoventa",$datos["costoventa"],PDO::PARAM_STR);
    	$stmt->bindParam(":stock",$datos["stock"],PDO::PARAM_INT);
    	return $stmt->execute();
    	$stmt->close(); 
    }
    public function modificarProducto($id){
		$sql="SELECT * from producto where id_producto=:id_producto";
		$stmt=Conexion::conectar()->prepare($sql);
		$stmt->bindParam(":id_producto",$id,PDO::PARAM_STR);
		$stmt->execute();
		return $stmt->fetch();
		$stmt->close();
	}
	public function actualizarProducto($datos){
		$sql="UPDATE producto set id_provedores=:id_provedores,nombre=:nombre,descripcion=:descripcion,costocompra=:costocompra,costoventa=:costoventa,stock=:stock,fecha=:fecha where id_producto=:id_producto ";
		$stmt=Conexion::conectar()->prepare($sql);
		$stmt->bindParam(":id_provedores",$datos["id_provedores"],PDO::PARAM_STR);
		$stmt->bindParam(":nombre",$datos["nombre"],PDO::PARAM_STR);
		$stmt->bindParam(":descripcion",$datos["descripcion"],PDO::PARAM_STR);
		$stmt->bindParam(":costocompra",$datos["costocompra"],PDO::PARAM_STR);
		$stmt->bindParam(":costoventa",$datos["costoventa"],PDO::PARAM_STR);
		$stmt->bindParam(":stock",$datos["stock"],PDO::PARAM_STR);
		$stmt->bindParam(":fecha",$datos["fecha"],PDO::PARAM_STR);
		$stmt->bindParam(":id_producto",$datos["id_producto"],PDO::PARAM_INT);
		return $stmt->execute();
		$stmt->close();
	}
	public function eliminarProducto($id){
		$sql="DELETE from producto where id_producto=:id_producto";
		$stmt=Conexion::conectar()->prepare($sql);
		$stmt->bindParam(":id_producto",$id,PDO::PARAM_INT);
		return $stmt->execute();
		$stmt->close();
	}
	/*************************
			USUARIOS
	**************************/
	public function listarModelUsuarios(){
        $sql = "call selectUsuarioEmpleadoCargo	()";
        $stmt=Conexion::conectar()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
    }
    public function insertarModelUsuario($datos){
    	$sql="INSERT into usuario(id_empleado,usuario,pasword,nivel,estado) 
    	values(:id_empleado,:usuario,:pasword,:nivel,:estado)";
    	$stmt=Conexion::conectar()->prepare($sql);
    	$stmt->bindParam(":id_empleado",$datos["id_empleado"],PDO::PARAM_INT);
    	$stmt->bindParam(":usuario",$datos["usuario"],PDO::PARAM_STR);
    	$stmt->bindParam(":pasword",$datos["pasword"],PDO::PARAM_STR);
    	$stmt->bindParam(":nivel",$datos["nivel"],PDO::PARAM_INT);
    	$stmt->bindParam(":estado",$datos["estado"],PDO::PARAM_INT);
    	return $stmt->execute();
    	$stmt->close(); 
    }
    public function modificarUsuario($id){
		$sql="SELECT * from usuario where id_usuario=:id_usuario";
		$stmt=Conexion::conectar()->prepare($sql);
		$stmt->bindParam(":id_usuario",$id,PDO::PARAM_STR);
		$stmt->execute();
		return $stmt->fetch();
		$stmt->close();
	}
    public function eliminarUsuario($id){
		$sql="DELETE from usuario where id_usuario=:id_usuario";
		$stmt=Conexion::conectar()->prepare($sql);
		$stmt->bindParam(":id_usuario",$id,PDO::PARAM_INT);
		return $stmt->execute();
		$stmt->close();
	}

	public function listarEmpleadoCargo(){
		$sql = "SELECT ci,nombre,paterno,materno,genero,cargo from empleado e inner join cargo c on(e.id_cargos=c.id_cargos)";
		$stmt=Conexion::conectar()->prepare($sql);
		// $stmt->bindParam(":id_usuario",$id,PDO::PARAM_INT);
		if($stmt->execute()){
			return $stmt->fetchAll();
		}else{
			return "error";
		}
		
		$stmt->close();

	}
}

 ?>