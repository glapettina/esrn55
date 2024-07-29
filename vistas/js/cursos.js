/*=============================================
EDITAR CURSO            
=============================================*/

//$(".btnEditarCurso").click(function(){

$(".tablas").on("click", ".btnEditarCurso", function(){	

	var idCurso = $(this).attr("idCurso");

	var datos = new FormData();
	datos.append("idCurso", idCurso);

	$.ajax({

		url: "ajax/cursos.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){


			$("#editarCurso").val(respuesta["nombre"]);
			$("#editarTurno").val(respuesta["turno"]);
			$("#editarTurno").html(respuesta["turno"]);
			$("#idCurso").val(respuesta["id"]);

		}
	})
})


/*=============================================
ELIMINAR CURSO            
=============================================*/

$(".btnEliminarCurso").click(function(){

	var idCurso = $(this).attr("idCurso");

	swal({
		title: 'Está seguro de borrar el curso?',
		text: "Si no lo está puede cancelar la acción",
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		cancelButtonText: 'Cancelar',
		confirmButtonText: 'Si, borrar curso'
		}).then((result)=>{

			if (result.value) {

				window.location = "index.php?ruta=cursos&idCurso="+idCurso;
			}
		})
})


/*=============================================
ACTIVAR CURSO            
=============================================*/

$(document).on("click", ".btnActivar", function(){

	var idCurso = $(this).attr("idCurso");
	var estadoCurso = $(this).attr("estadoCurso");


	var datos = new FormData();
	datos.append("activarId", idCurso);
	datos.append("activarCurso", estadoCurso);

	$.ajax({

		url: "ajax/cursos.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		success: function(respuesta){

			if (window.matchMedia("(max-width:767px)").matches) {

				swal({
					title: "El curso ha sido actualizado",
					type: "success",
					confirmButtonText: "Cerrar"
				}).then(function(result){

					if (result.value) {

						window.location = "cursos";
					}
				});
			}
		}
	})

	if (estadoCurso == 0) {

		$(this).removeClass('btn-success');
		$(this).addClass('btn-danger');
		$(this).html('Desactivado');
		$(this).attr('estadoCurso', 1);

	}else{

		$(this).addClass('btn-success');
		$(this).removeClass('btn-danger');
		$(this).html('Activado');
		$(this).attr('estadoCurso', 0);
	}
})

