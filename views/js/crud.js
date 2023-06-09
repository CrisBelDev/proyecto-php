/*******************
	CLIENTE
*******************/
function insertarClienteDatos(){
	$.ajax({
		type:"POST",
		url:"../../controllers/insertarClientes.php",
		data:$('#frminsertarClientes').serialize(),
		success:function(r){
			if (r==1) {
				$('#frminsertarClientes')[0].reset();
				mostrarClientes();
				swal("Agregado con exito",":D","success");
			}else{
				swal("¡Error!",":(","error");
			}
		}
	});
	return false;
}
function mostrarClientes(){
	$.ajax({
		type:"POST",
		url:"../../controllers/mostrarClientes.php",
		success:function(r){
			$('#tablaDatosClientes').html(r);
		}
	});
}
function modificarCliente(id){
    $.ajax({
		type:"POST",
		data:"id_cliente="+id,
		url:"../../controllers/modificarClientes.php",
		success:function(r){
			r=jQuery.parseJSON(r);
			$("#id_clienteu").val(r['id_cliente']);
			$("#razonsocialu").val(r['razonsocial']);
			$("#nit_ccu").val(r['nit_cc']);
		}
	});
}
function actualizarCliente(){
	$.ajax({
		type:"POST",
		url:"../../controllers/actualizarCliente.php",
		data:$('#frminsertarClienteu').serialize(),
		success:function(r){
			if (r==1) {
				mostrarClientes();
				swal("¡Actualizado con exito!",":D","success");
			}else{
				swal("¡Error!",":(","error");
			}
		}
	});
	return false;
}
function eliminarCliente(id){
	swal({
		title: "¿Estas seguro de eliminar este registro?",
		text: "!Una vez eliminado no podra recuperarse¡",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
	.then((willDelete) => {
		if (willDelete) {
			$.ajax({
				type:"POST",
				url:"../../controllers/eliminarCliente.php",
				data:"id_cliente="+id,
				success:function(r){
					console.log(r);
					if (r==1) {
						mostrarClientes();
						swal("Eliminado con exito",":D","info");
					}else{
						swal("¡Error!",":(","error");
					}
				}
			});
		} 
	});
}
/*******************
	CARGOS
*******************/

function mostrarCargos(){
	$.ajax({
		type:"POST",
		url:"../../controllers/mostrarCargos.php",
		success:function(r){
			// console.log(r);
			$('#tablaDatosCargos').html(r);
			
			$(document).ready(function(){
				$("#cargosTabla").dataTable();
				


			});
				
		}
	});
}

/*=============================================
dataTables de cargos
=============================================*/
$("#empleadoCargo").dataTable();



/*=====  dataTables de cargos  ======*/

function insertarCargoDatos(){
	$.ajax({
		type:"POST",
		url:"../../controllers/insertarCargos.php",
		data:$('#frminsertarCargo').serialize(),
		success:function(r){
			if (r==1) {
				$('#frminsertarCargo')[0].reset();
				mostrarCargos();
				swal("Agregado con exito",":D","success");
			}else{
				swal("¡Error!",":(","error");
			}
		}
	});
	return false;
}
function modificarCargo(id){
    $.ajax({
		type:"POST",
		data:"id_cargos="+id,
		url:"../../controllers/modificarCargo.php",
		success:function(r){
			r=jQuery.parseJSON(r);
			$("#id_cargosu").val(r['id_cargos']);
			$("#cargou").val(r['cargo']);
		}
	});
}
function actualizarCargo(){
	$.ajax({
		type:"POST",
		url:"../../controllers/actualizarCargo.php",
		data:$('#frminsertarCargou').serialize(),
		success:function(r){
			if (r==1) {
				mostrarCargos();
				swal("¡Actualizado con exito!",":D","success");
			}else{
				swal("¡Error!",":(","error");
			}
		}
	});
	return false;
}
function eliminarCargo(id){
	swal({
		title: "¿Estas seguro de eliminar este registro?",
		text: "!Una vez eliminado no podra recuperarse¡",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
	.then((willDelete) => {
		if (willDelete) {
			$.ajax({
				type:"POST",
				url:"../../controllers/eliminarCargo.php",
				data:"id_cargos="+id,
				success:function(r){
					console.log(r);
					if (r==1) {
						mostrarCargos();
						swal("Eliminado con exito",":D","info");
					}else{
						swal("¡Error!",":(","error");
					}
				}
			});
		} 
	});
}
/*******************
	EMPLEADOS
*******************/
function mostrarEmpleados(){
	$.ajax({
		type:"POST",
		url:"../../controllers/mostrarEmpleados.php",
		success:function(r){
			$('#tablaDatosEmpleados').html(r);
		}
	});
}
function insertarEmpleadoDatos(){
	$.ajax({
		type:"POST",
		url:"../../controllers/insertarEmpleado.php",
		data:$('#frminsertarEmpleados').serialize(),
		success:function(r){
			if (r==1) {
				$('#frminsertarEmpleados')[0].reset();
				mostrarEmpleados();
				swal("Agregado con exito",":D","success");
			}else{
				swal("¡Error!",":(","error");
			}
		}
	});
	return false;
}
function modificarEmpleado(id){
    $.ajax({
		type:"POST",
		data:"id_empleado="+id,
		url:"../../controllers/modificarEmpleado.php",
		success:function(r){
			r=jQuery.parseJSON(r);
			$("#id_empleadou").val(r['id_empleado']);
			$("#id_cargosu").val(r['id_cargos']);
			$("#ciu").val(r['ci']);
			$("#nombreu").val(r['nombre']);
			$("#paternou").val(r['paterno']);
			$("#maternou").val(r['materno']);
			$("#direccionu").val(r['direccion']);
			$("#telefonou").val(r['telefono']);
			$("#fecha_nacimientou").val(r['fecha_nacimiento']);
			//$("#generou").val(r['genero']);
			//$("#interesesu").val(r['intereses']);
		}
	});
}
function actualizarEmpleado(){
	$.ajax({
		type:"POST",
		url:"../../controllers/actualizarEmpleado.php",
		data:$('#frminsertarEmpleadou').serialize(),
		success:function(r){
			if (r==1) {
				mostrarEmpleados();
				swal("¡Actualizado con exito!",":D","success");
			}else{
				swal("¡Error!",":(","error");
			}
		}
	});
	return false;
}
function eliminarEmpleado(id){
	swal({
		title: "¿Estas seguro de eliminar este registro?",
		text: "!Una vez eliminado no podra recuperarse¡",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
	.then((willDelete) => {
		if (willDelete) {
			$.ajax({
				type:"POST",
				url:"../../controllers/eliminarEmpleado.php",
				data:"id_empleado="+id,
				success:function(r){
					console.log(r);
					if (r==1) {
						mostrarEmpleados();
						swal("Eliminado con exito",":D","info");
					}else{
						swal("¡Error!",":(","error");
					}
				}
			});
		} 
	});
}
/*******************
	PROVEEDOR
*******************/
function mostrarProveedores(){
	$.ajax({
		type:"POST",
		url:"../../controllers/mostrarProveedores.php",
		success:function(r){
			$('#tablaDatosProveedores').html(r);
		}
	});
}
function insertarProveedorDatos(){
	$.ajax({
		type:"POST",
		url:"../../controllers/insertarProveedor.php",
		data:$('#frminsertarProveedor').serialize(),
		success:function(r){
			if (r==1) {
				$('#frminsertarProveedor')[0].reset();
				mostrarProveedores();
				swal("Agregado con exito",":D","success");
			}else{
				swal("¡Error!",":(","error");
			}
		}
	});
	return false;
}
function eliminarProveedor(id){
	swal({
		title: "¿Estas seguro de eliminar este registro?",
		text: "!Una vez eliminado no podra recuperarse¡",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
	.then((willDelete) => {
		if (willDelete) {
			$.ajax({
				type:"POST",
				url:"../../controllers/eliminarProveedor.php",
				data:"id_provedores="+id,
				success:function(r){
					console.log(r);
					if (r==1) {
						mostrarProveedores();
						swal("Eliminado con exito",":D","info");
					}else{
						swal("¡Error!",":(","error");
					}
				}
			});
		} 
	});
}
/*******************
	PRODUCTO
*******************/
function mostrarProductos(){
	$.ajax({
		type:"POST",
		url:"../../controllers/mostrarProductos.php",
		success:function(r){
			$('#tablaDatosProductos').html(r);
		}
	});
}
function insertarProductoDatos(){
	$.ajax({
		type:"POST",
		url:"../../controllers/insertarProducto.php",
		data:$('#frminsertarProductos').serialize(),
		success:function(r){
			if (r==1) {
				$('#frminsertarProductos')[0].reset();
				mostrarProductos();
				swal("Agregado con exito",":D","success");
			}else{
				swal("¡Error!",":(","error");
			}
		}
	});
	return false;
}
function modificarProducto(id){
    $.ajax({
		type:"POST",
		data:"id_producto="+id,
		url:"../../controllers/modificarProducto.php",
		success:function(r){
			r=jQuery.parseJSON(r);
			$("#id_productou").val(r['id_producto']);
			$("#id_provedoresu").val(r['id_provedores']);
			$("#nombreu").val(r['nombre']);
			$("#descripcionu").val(r['descripcion']);
			$("#costocomprau").val(r['costocompra']);
			$("#costoventau").val(r['costoventa']);
			$("#stocku").val(r['stock']);
			$("#fechau").val(r['fecha']);
		}
	});
}
function actualizarProducto(){
	$.ajax({
		type:"POST",
		url:"../../controllers/actualizarProducto.php",
		data:$('#frminsertarProductou').serialize(),
		success:function(r){
			if (r==1) {
				mostrarProductos();
				swal("¡Actualizado con exito!",":D","success");
			}else{
				swal("¡Error!",":(","error");
			}
		}
	});
	return false;
}
function eliminarProducto(id){
	swal({
		title: "¿Estas seguro de eliminar este registro?",
		text: "!Una vez eliminado no podra recuperarse¡",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
	.then((willDelete) => {
		if (willDelete) {
			$.ajax({
				type:"POST",
				url:"../../controllers/eliminarProducto.php",
				data:"id_producto="+id,
				success:function(r){
					console.log(r);
					if (r==1) {
						mostrarProductos();
						swal("Eliminado con exito",":D","info");
					}else{
						swal("¡Error!",":(","error");
					}
				}
			});
		} 
	});
}
/*******************
	USUARIO
*******************/
function insertarUsuarioDatos(){
	$.ajax({
		type:"POST",
		url:"../../controllers/insertarUsuario.php",
		data:$('#frminsertarUsuarios').serialize(),
		success:function(r){
			if (r==1) {
				$('#frminsertarUsuarios')[0].reset();
				mostrarUsuarios();
				swal("Agregado con exito",":D","success");
			}else{
				swal("¡Error!",":(","error");
			}
		}
	});
	return false;
}
function mostrarUsuarios(){
	$.ajax({
		type:"POST",
		url:"../../controllers/mostrarUsuarios.php",
		success:function(r){
			$('#tablaDatosUsuarios').html(r);
		}
	});
}
function eliminarUsuario(id){
	swal({
		title: "¿Estas seguro de eliminar este registro?",
		text: "!Una vez eliminado no podra recuperarse¡",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
	.then((willDelete) => {
		if (willDelete) {
			$.ajax({
				type:"POST",
				url:"../../controllers/eliminarUsuario.php",
				data:"id_usuario="+id,
				success:function(r){
					console.log(r);
					if (r==1) {
						mostrarUsuarios();
						swal("Eliminado con exito",":D","info");
					}else{
						swal("¡Error!",":(","error");
					}
				}
			});
		} 
	});
}