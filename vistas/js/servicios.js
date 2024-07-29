/*=============================================
EDITAR SERVICIO
=============================================*/

$(".btnEditarServicio").click(function(){


	var idServicio = $(this).attr("idServicio");


	var datos = new FormData();
	datos.append("idServicio", idServicio);


	$.ajax({
		url: "ajax/servicios.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){

			var datosNetbook = new FormData();
			datosNetbook.append("idNetbook", respuesta["id_netbook"]);

			$.ajax({
				url: "ajax/netbooks.ajax.php",
				method: "POST",
				data: datosNetbook,
				cache: false,
				contentType: false,
				processData: false,
				dataType: "json",
				success: function(respuesta){

					$("#editarNetbook").val(respuesta["id"]);
					$("#editarNetbook").html(respuesta["nserie"]);
				}

			})

					$("#idServicio").val(respuesta["id"]);
					$("#editarFecha").val(respuesta["fecha_servicio"]);
					$("#editarProblema").val(respuesta["problema"]);
					$("#editarSolucion").val(respuesta["solucion"]);

					

		}
	})

	
})


/*=============================================
ACTIVAR NETBOOK            
=============================================*/

$(document).on("click", ".btnActivarServicio", function(){

	

	var idServicio = $(this).attr("idServicio");
	var estadoServicio = $(this).attr("estadoServicio");


	//console.log(tabla);

	var datos = new FormData();
	datos.append("activarId", idServicio);
	datos.append("activarServicio", estadoServicio);

	$.ajax({

		url: "ajax/servicios.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		success: function(respuesta){

			if (window.matchMedia("(max-width:767px)").matches) {

				swal({
					title: "El servicio ha sido actualizado",
					type: "success",
					confirmButtonText: "Cerrar"
				}).then(function(result){

					if (result.value) {

						window.location = "servicios";
					}
				});
			}
		}
	})

	if (estadoServicio == 0) {

		$(this).removeClass('btn-success');
		$(this).addClass('btn-danger');
		$(this).html('Pendiente');
		$(this).attr('estadoServicio', 1);

	}else{

		$(this).addClass('btn-success');
		$(this).removeClass('btn-danger');
		$(this).html('Resuelto');
		$(this).attr('estadoServicio', 0);
	}
})



/*=============================================
ELIMINAR SERVICIO            
=============================================*/

$(".btnEliminarServicio").click(function(){

	var idServicio = $(this).attr("idServicio");

	//console.log(curso);


	swal({
		title: 'Está seguro de borrar el servicio?',
		text: "Si no lo está puede cancelar la acción",
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		cancelButtonText: 'Cancelar',
		confirmButtonText: 'Si, borrar servicio'
		}).then((result)=>{

			if (result.value) {

				window.location = "index.php?ruta=servicios&idServicio="+idServicio;
			}
		})
})



/*=============================================
   REVISAR SI LA NETBOOK YA ESTÁ REGISTRADA            
=============================================*/

$("#nuevoNserie").change(function(){

	$(".alert").remove();

	var netbook = $(this).val();

	var datos = new FormData();
	datos.append("validarNetbook", netbook);

	$.ajax({

		url: "ajax/netbooks.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){

			if (respuesta) {

				$("#nuevoNserie").parent().after('<div class="alert alert-warning">Esta netbook ya existe en la base de datos</div>');

				$("#nuevoNserie").val("");

			}
		}
	})

})


/*=============================================
IMPRIMIR HISTORIAL 
=============================================*/

 $('.btnHistorial').on('change', function () {
//$(".btnHistorial").select(function(){

	let mSelect = $('option:selected', this);
	let idNetbook = mSelect.val();

	//var idNetbook = $(this).attr("idNetbook");
	//var idCurso = $(this).attr("idCurso");

	window.open("extensiones/tcpdf/pdf/historial.php?idNetbook="+idNetbook+"&idCurso="+idCurso, "_blank");

})