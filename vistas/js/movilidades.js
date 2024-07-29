
/*=============================================
ELIMINAR MOVILIDAD            
=============================================*/

$(document).on("click", ".btnEliminarMovilidad", function(){


	var idMovilidad = $(this).attr("idMovilidad");

	swal({
		title: 'Está seguro de borrar la movilidad?',
		text: "Si no lo está puede cancelar la acción",
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		cancelButtonText: 'Cancelar',
		confirmButtonText: 'Si, borrar movilidad'
		}).then((result)=>{

			if (result.value) {

				window.location = "index.php?ruta=movilidad&idMovilidad="+idMovilidad;
			}
		})
})


/*=============================================
IMPRIMIR MOVILIDAD INDIVIDUAL
=============================================*/

$(".btnListadoMovDocente").click(function(){

	var idDocente = $(this).attr("idDocente");
	let fecha_desde = document.getElementById("datepicker").value; 
	let fecha_hasta = document.getElementById("datepicker2").value; 


	window.open("extensiones/tcpdf/pdf/movilidad-individual.php?idDocente="+idDocente+"&desde="+fecha_desde+"&hasta="+fecha_hasta, "_blank");

})

/*=============================================
IMPRIMIR RESUMEN MOVILIDAD POR DOCENTE
=============================================*/

$(".btnResumenMovDocente").click(function(){

	var idDocente = $(this).attr(".valor");
	let fecha_desde = document.getElementById("datepicker").value; 
	let fecha_hasta = document.getElementById("datepicker2").value; 
	


	window.open("extensiones/tcpdf/pdf/resumen-docente.php?idDocente="+idDocente+"&desde="+fecha_desde+"&hasta="+fecha_hasta, "_blank");

})



