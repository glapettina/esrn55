/*=============================================
EDITAR CIUDAD            
=============================================*/

$(".btnEditarCiudad").click(function(){


	var idCiudad = $(this).attr("idCiudad");

	var datos = new FormData();
	datos.append("idCiudad", idCiudad);

	$.ajax({

		url: "ajax/ciudades.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){


			$("#editarCiudad").val(respuesta["nombre"]);
			$("#editarKilometros").val(respuesta["kilometros"]);
			$("#idCiudad").val(respuesta["id_ciudad"]);

		}
	})
})


/*=============================================
ELIMINAR CIUDAD            
=============================================*/

$(document).on("click", ".btnEliminarCiudad", function(){


	var idCiudad = $(this).attr("idCiudad");

	swal({
		title: 'Está seguro de borrar la ciudad?',
		text: "Si no lo está puede cancelar la acción",
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		cancelButtonText: 'Cancelar',
		confirmButtonText: 'Si, borrar sección'
		}).then((result)=>{

			if (result.value) {

				window.location = "index.php?ruta=ciudades&idCiudad="+idCiudad;
			}
		})
})


/*=============================================
ACTIVAR CIUDAD            
=============================================*/

function Activar(){

	console.log("Pasó");

}

$(document).on("click", "#btnActivarCiudades", function(){

	


	// var idCiudad = $(this).attr("idCiudad");
	// var estadoCiudad = $(this).attr("estadoCiudad");

	// var datos = new FormData();
	// datos.append("activarId", idCiudad);
	// datos.append("activarCiudad", estadoCiudad);

	// $.ajax({

	// 	url: "ajax/ciudades.ajax.php",
	// 	method: "POST",
	// 	data: datos,
	// 	cache: false,
	// 	contentType: false,
	// 	processData: false,
	// 	success: function(respuesta){

	// 		if (window.matchMedia("(max-width:767px)").matches) {

	// 			swal({
	// 				title: "La ciudad ha sido actualizada",
	// 				type: "success",
	// 				confirmButtonText: "Cerrar"
	// 			}).then(function(result){

	// 				if (result.value) {

	// 					window.location = "ciudades";
	// 				}
	// 			});
	// 		}
	// 	}
	// })

	// if (estadoCiudad == 0) {

	// 	$(this).removeClass('btn-success');
	// 	$(this).addClass('btn-danger');
	// 	$(this).html('Desactivado');
	// 	$(this).attr('estadoCiudad', 1);

	// }else{

	// 	$(this).addClass('btn-success');
	// 	$(this).removeClass('btn-danger');
	// 	$(this).html('Activado');
	// 	$(this).attr('estadoCiudad', 0);
	// }
})

