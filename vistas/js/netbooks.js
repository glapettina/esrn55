/*=============================================
EDITAR NETBOOK
=============================================*/

$(".btnEditarNetbook").click(function(){


	var idNetbook = $(this).attr("idNetbook");


	var datos = new FormData();
	datos.append("idNetbook", idNetbook);


	$.ajax({
		url: "ajax/netbooks.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){

			var datosCurso = new FormData();
			datosCurso.append("idCurso", respuesta["id_curso"]);

			$.ajax({
				url: "ajax/cursos.ajax.php",
				method: "POST",
				data: datosCurso,
				cache: false,
				contentType: false,
				processData: false,
				dataType: "json",
				success: function(respuesta){

					$("#editarCurso").val(respuesta["id"]);
					$("#editarCurso").html(respuesta["nombre"]+ " - " +respuesta["turno"]);
				}

			})

					$("#idNetbook").val(respuesta["id"]);
					$("#editarNombre").val(respuesta["nombre"]);
					$("#editarNserie").val(respuesta["nserie"]);

					

		}
	})

	
})


/*=============================================
ACTIVAR NETBOOK            
=============================================*/

$(document).on("click", ".btnActivarNetbook", function(){

	

	var idNetbook = $(this).attr("idNetbook");
	var estadoNetbook = $(this).attr("estadoNetbook");


	//console.log(tabla);

	var datos = new FormData();
	datos.append("activarId", idNetbook);
	datos.append("activarNetbook", estadoNetbook);

	$.ajax({

		url: "ajax/netbooks.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		success: function(respuesta){

			if (window.matchMedia("(max-width:767px)").matches) {

				swal({
					title: "La netbook ha sido actualizada",
					type: "success",
					confirmButtonText: "Cerrar"
				}).then(function(result){

					if (result.value) {

						window.location = "netbooks";
					}
				});
			}
		}
	})

	if (estadoNetbook == 0) {

		$(this).removeClass('btn-success');
		$(this).addClass('btn-danger');
		$(this).html('Baja');
		$(this).attr('estadoNetbook', 1);

	}else{

		$(this).addClass('btn-success');
		$(this).removeClass('btn-danger');
		$(this).html('Alta');
		$(this).attr('estadoNetbook', 0);
	}
})



/*=============================================
ELIMINAR NETBOOK            
=============================================*/

$(".btnEliminarNetbook").click(function(){

	var idNetbook = $(this).attr("idNetbook");

	//console.log(curso);


	swal({
		title: 'Está seguro de borrar la netbook?',
		text: "Si no lo está puede cancelar la acción",
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		cancelButtonText: 'Cancelar',
		confirmButtonText: 'Si, borrar netbook'
		}).then((result)=>{

			if (result.value) {

				window.location = "index.php?ruta=netbooks&idNetbook="+idNetbook;
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