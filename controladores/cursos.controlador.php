<?php


class ControladorCursos{

	/*=============================================
	            REGISTRO DE CURSO            
	=============================================*/
	
	static public function ctrCrearCurso(){

		if (isset($_POST["nuevoNombre"])) {
			
				
				$tabla = "cursos";

				$datos = array("nombre" => $_POST["nuevoNombre"], 
								"turno" => $_POST["nuevoTurno"]);

				$respuesta = ModeloCursos::mdlIngresarCurso($tabla, $datos);

				if ($respuesta == "ok") {
					
					echo '<script>

					swal({

						type: "success",
						title: "El curso ha sido creado correctamente",
						showConfirmButton: true,
						confirmButtonText: "Cerrar",
						closeOnConfirm: false							

					}).then((result)=>{

						if(result.value){

							window.location = "cursos";
							
							}

						});

				</script>';

				

			}else{

				echo '<script>

					swal({

						type: "error",
						title: "El curso no puede ir vacío",
						showConfirmButton: true,
						confirmButtonText: "Cerrar",
						closeOnConfirm: false							

					}).then((result)=>{

						if(result.value){

							window.location = "cursos";
							
							}

						})

				</script>';

			}
		}

	}


		/*=============================================
        MOSTRAR CURSOS            
		=============================================*/

		static public function ctrMostrarCursos($item, $valor){

			$tabla = "cursos";

			$respuesta = ModeloCursos::mdlMostrarCursos($tabla, $item, $valor);

			return $respuesta;

			//var_dump($valor);
		}


		



		/*=============================================
		EDITAR CURSO
		=============================================*/

		static public function ctrEditarCurso(){

			if (isset($_POST["editarCurso"])) {
				
				if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ. ]+$/', $_POST["editarCurso"])) {
					
					$tabla = "cursos";

					$datos = array("nombre" => $_POST["editarCurso"], "id" => $_POST["idCurso"]);

					$respuesta = ModeloCursos::mdlEditarCurso($tabla, $datos);

					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El curso ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "cursos";										
								}
							})

					</script>';

					}

				}else{

					echo '<script>

						swal({
							type: "error",
							title: "El curso no puede ir vacío o llevar caracteres especiales",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "cursos";										
								}
							})

					</script>';
				}
			}
		}

		/*=============================================
		BORRAR CURSO
		=============================================*/

		static public function ctrBorrarCurso(){

			if (isset($_GET["idCurso"])) {


				$tabla = "cursos";
				
				
				$datos = $_GET["idCurso"];

				$respuesta = ModeloCursos::mdlBorrarCurso($tabla, $datos);

				if ($respuesta == "ok") {
					
					echo '<script>

						swal({
							type: "success",
							title: "El curso ha sido borrado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result) => {

								if(result.value){

									window.location = "cursos";
								}
							})

					</script>';
				}
			}
		}

}