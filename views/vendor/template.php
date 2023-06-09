<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Template</title>
	<link rel="stylesheet" href="views/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="views/css/style.default.css" id="theme-stylesheet">
	<link rel="stylesheet" href="views/css/sweetalert.css">
	<link rel="stylesheet" href="views/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="views/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" href="views/vendor/fuente/css/all.css">
    <link rel="stylesheet" href="views/css/custom.css">
    <link rel="stylesheet" href="views/sweetalert.css">
	<script src="views/js/jquery-3.0.0.min.js"></script>
	<script src="views/sweetalert.min.js"></script>
	
	
</head>

<body>

<?php include "modules/navegacion.php"; ?>


<section class="container contenido">

<?php 
ob_start();
$mvc = new MvcController();
$mvc -> enlacesPaginasController();
ob_end_flush();
 ?>

</section>

<script src="views/js/jquery.dataTables.min.js"></script>
    <script src="views/js/dataTables.bootstrap4.min.js"></script>
    <script src="views/js/dataTables.responsive.min.js"></script>
    <script src="views/js/sweetalert.min.js"></script>
    <!-- <script src="views/js/DateTimePicker.js"></script> -->
    <script src="views/vendor/popper.js/umd/popper.min.js"> </script> 
    <script src="views/js/clockpicker.js"></script>
    <script src="views/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="views/js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
    <script src="views/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="views/vendor/chart.js/Chart.min.js"></script>
    <script src="views/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="views/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Main File-->
    <script src="views/js/front.js"></script>
    <script src="views/js/bootstrap3-typeahead.js"></script>
    <script src="views/js/validaciones.js"></script>

    <script>
function mensaje(mensaje,tipo,direccion){
	swal({
		title: "¡OK!",
		text: mensaje,
		type: tipo,
		confirmButtonText: "Cerrar",
		closeOnConfirm: false
		},
		function(isConfirm){
			if (isConfirm){
				window.location = direccion;
			}
		}
		
	);
}
	var arreglo = new Array();
	var c=0;
	var costoFactura=0;
	var jObject={};
    
	$(".agregar").click(function(){
		var id=$(this).parent().parent().attr("class");
		var fabricante=$(this).parent().parent().children("td:nth-child(1)").html();
		var producto=$(this).parent().parent().children("td:nth-child(2)").html();
		var costo=$(this).parent().parent().children("td:nth-child(3)").html();
		var cantidad=$(this).parent().parent().children("td:nth-child(5)").children().val();
		var total=parseInt(costo)* parseInt(cantidad);
		costoFactura=costoFactura+total;
		$("#msg").removeClass("d-none");
		$("#fac").html(costoFactura);
		arreglo[c]=[id,cantidad,total];
		c++;
		$("#detalle").append("<tr><td>"+producto+"</td><td>"+costo+"</td><td>"+cantidad+"</td><td>"+total+"</td></tr>");
		
	});
	$(".editarProducto").click(function(){
		var id_producto=$(this).parent().parent().attr("id");
		var producto=$(this).parent().parent().children("td:nth-child(1)").html();
		$("#productoE").val(producto);

		var descripcion=$(this).parent().parent().children("td:nth-child(2)").html();
		$("#descripcionE").val(descripcion);

		var compra=$(this).parent().parent().children("td:nth-child(3)").html();
		$("#compraE").val(compra);

		var venta=$(this).parent().parent().children("td:nth-child(4)").html();
		$("#ventaE").val(venta);

		var stock=$(this).parent().parent().children("td:nth-child(5)").html();
		$("#stockE").val(stock);

		var fecha=$(this).parent().parent().children("td:nth-child(6)").html();
		$("#fechaE").val(fecha);

		$("#id_producto").val(id_producto);
	});
	$(".registrar").click(function(){

		for(i in arreglo)
	    {
	        jObject[i] = arreglo[i];
	    }
		
		jObject= JSON.stringify(jObject);
		//Obteniendo los datos del cliente

		$.ajax({
			type:'POST',
			url:"views/modules/ajax.php",
            cache:false,
            data:{jObject:  jObject},
            success: function(respuesta){
            	if(respuesta == "ok"){
					mensaje("Registro Exitoso..!!","success","venta");
				}else{
					alert("error:::"+respuesta);
					
				}
            }
     	});
	});
	$("#generarVenta").click(function(){
		var cliente=idCliente;
		$.ajax({
			type:'POST',
			url:"views/modules/ajax1.php",
            cache:false,
            data:{cliente:  cliente},
            success: function(respuesta){
				console.log(respuesta);
            	if(respuesta == "ok"){
					for(i in arreglo)
					{
						jObject[i] = arreglo[i];
					}
					
					jObject= JSON.stringify(jObject);
					$.ajax({
						type:'POST',
						url:"views/modules/ajax.php",
						cache:false,
						data:{jObject:  jObject},
						success: function(respuesta){
							if(respuesta == "ok"){
								mensaje("Registro Exitoso..!!","success","venta");
							}else{
								alert("error:::"+respuesta);
								
							}
						}
					});
				}else{
					alert("errwwwwwor:::"+respuesta);
					
				}
            }
     	});
	});
</script>
<script>
  $(".editarCliente").click(function(){
  	var ci=$(this).parent().parent().children("td:nth-child(3)").html();
  	var usuario=$(this).parent().parent().children("td:nth-child(2)").html();
  	var id=$(this).parent().parent().children("td:nth-child(1)").html();
    console.log(usuario);
    $("#nitCC").val(ci);
    $("#razonsocial").val(usuario);
    $("#id_cliente").val(id);
    $("#fm-modal-grid").modal("show");
  });

  $(".eliminar_usuario").click(function(){
  	var usuario=$(this).parent().parent().children("td:nth-child(1)").html();
  	var datos = new FormData();
  	datos.append("usuarioId",usuario);
  	console.log(datos);
  	swal({
            title: "¡Esta apunto de borrar!",
            text: "¿Esta seguro ?",
            type: "warning",
            showCancelButton: true,
            confirmButtonText: "continuar",
            cancelButtonText: "cerrar",
            closeOnConfirm: false,
        }, function(isConfirm) {
            if (!isConfirm) return;
            $.ajax({
                url: "views/ajax/consulta.php",
                method: "POST",
                data: datos,
                cache: false,
                contentType: false,
                processData: false,
                success: function(respuesta) {
                    if (respuesta == "ok") {
                        swal({
                            title: "!Eliminacion realizada¡",
                            text: "¡se borro el registro con exito.!",
                            type: "success",
                            confirmButtonText: "Cerrar",
                            closeOnConfirm: false
                        }, function(isConfirm) {
                            if (isConfirm) {
                                window.location = "registropersonal";
                            }
                        });
                    } else {
                        console.log(respuesta);
                    }
                },
                error: function() {
                    console.log("Error");
                }
            })
        });
  });

  $(document).ready(function() {
    $('#usuariosListas').DataTable();
});
$('#usuariosListas').DataTable({
    "language": {
        "sProcessing": "Procesando...",
        "sLengthMenu": "Mostrar _MENU_ registros",
        "sZeroRecords": "No se encontraron resultados",
        "sEmptyTable": "Ningún dato disponible en esta tabla",
        "sInfo": "Registros del _START_ al _END_ de un total de _TOTAL_ ",
        "sInfoEmpty": "Registros del 0 al 0 de un total de 0 registros",
        "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
        "sInfoPostFix": "",
        "sSearch": "Buscar:",
        "sUrl": "",
        "sInfoThousands": ",",
        "sLoadingRecords": "Cargando...",
        "oPaginate": {
            "sFirst": "Primero",
            "sLast": "Último",
            "sNext": "Siguiente",
            "sPrevious": "Anterior"
        },
        "oAria": {
            "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
        }
    },
    "aaSorting": []
});

  
</script>
	
</body>

</html>