/*=============================================
EDITAR ALUMNO
=============================================*/


$(".tablas").on("click", ".btnEditarAlumno", function(){	

	var idAlumno = $(this).attr("idAlumno");
	var tabla = $(this).attr("tabla");

	var datos = new FormData();
	datos.append("idAlumno", idAlumno);
	datos.append("tabla", tabla);	


	$.ajax({
		url: "ajax/alumnos.ajax.php",
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

				}

			})

				if (tabla == "tercero" || tabla == "cuarto" || tabla == "quinto") {

					$("#idAlumno").val(respuesta["id"]);
					$("#editarDocumento").val(respuesta["documento"]);
					$("#editarNombre").val(respuesta["nombre"]);
					$("#editarModalidad").val(respuesta["modalidad"]);
					$("#editarCurso").val(respuesta["id_curso"]);
				}else{

					$("#idAlumno").val(respuesta["id"]);
					$("#editarDocumento").val(respuesta["documento"]);
					$("#editarNombre").val(respuesta["nombre"]);
					$("#editarCurso").val(respuesta["id_curso"]);
				}

					
					

		}
	})

	
})


/*=============================================
ACTIVAR ALUMNO            
=============================================*/

$(document).on("click", ".btnActivar", function(){

	var idAlumno = $(this).attr("idAlumno");
	var estadoAlumno = $(this).attr("estadoAlumno");
	var tabla = $(this).attr("tabla");

	//console.log(tabla);

	var datos = new FormData();
	datos.append("activarId", idAlumno);
	datos.append("activarAlumno", estadoAlumno);
	datos.append("tabla", tabla);

	$.ajax({

		url: "ajax/alumnos.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		success: function(respuesta){

			if (window.matchMedia("(max-width:767px)").matches) {

				swal({
					title: "El alumno ha sido actualizado",
					type: "success",
					confirmButtonText: "Cerrar"
				}).then(function(result){

					if (result.value) {

						window.location = "1cb";
					}
				});
			}
		}
	})

	if (estadoAlumno == 0) {

		$(this).removeClass('btn-success');
		$(this).addClass('btn-danger');
		$(this).html('Desactivado');
		$(this).attr('estadoAlumno', 1);

	}else{

		$(this).addClass('btn-success');
		$(this).removeClass('btn-danger');
		$(this).html('Activado');
		$(this).attr('estadoAlumno', 0);
	}
})



/*=============================================
ELIMINAR ALUMNO            
=============================================*/

$(".btnEliminarAlumno").click(function(){

	var idAlumno = $(this).attr("idAlumno");
	var curso = $(this).attr("curso");

	//console.log(curso);


	swal({
		title: 'Está seguro de borrar el alumno?',
		text: "Si no lo está puede cancelar la acción",
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		cancelButtonText: 'Cancelar',
		confirmButtonText: 'Si, borrar alumno'
		}).then((result)=>{

			if (result.value) {

				window.location = "index.php?ruta="+curso+"&idAlumno="+idAlumno;
			}
		})
})