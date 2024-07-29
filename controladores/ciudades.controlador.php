<?php


class ControladorCiudades{

	/*=============================================
	            REGISTRO DE CIUDAD            
	=============================================*/
	
	static public function ctrCrearCiudad(){

		if (isset($_POST["nuevoNombre"])) {
			
				
				$tabla = "ciudades";

				$datos = array("nombre" => $_POST["nuevoNombre"], 
								"kilometros" => $_POST["nuevoKilometros"]);

				$respuesta = ModeloCiudades::mdlIngresarCiudad($tabla, $datos);

				if ($respuesta == "ok") {
					
					echo '<script>

					swal({

						type: "success",
						title: "La ciudad ha sido creada correctamente",
						showConfirmButton: true,
						confirmButtonText: "Cerrar",
						closeOnConfirm: false							

					}).then((result)=>{

						if(result.value){

							window.location = "ciudades";
							
							}

						});

				</script>';

				

			}else{

				echo '<script>

					swal({

						type: "error",
						title: "La ciudad no puede ir vacío",
						showConfirmButton: true,
						confirmButtonText: "Cerrar",
						closeOnConfirm: false							

					}).then((result)=>{

						if(result.value){

							window.location = "ciudades";
							
							}

						})

				</script>';

			}
		}

	}


		/*=============================================
        MOSTRAR CIUDADES            
		=============================================*/

		static public function ctrMostrarCiudades($item, $valor){

			$tabla = "ciudades";

			$respuesta = ModeloCiudades::mdlMostrarCiudades($tabla, $item, $valor);

			return $respuesta;
		}


		/*=============================================
		EDITAR CIUDAD
		=============================================*/

		static public function ctrEditarCiudad(){

			if (isset($_POST["editarCiudad"])) {
				
				if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ. ]+$/', $_POST["editarCiudad"])) {
					
					$tabla = "ciudades";

					$datos = array("nombre" => $_POST["editarCiudad"], "kilometros" => $_POST["editarKilometros"], "id_ciudad" => $_POST["idCiudad"]);

					$respuesta = ModeloCiudades::mdlEditarCiudad($tabla, $datos);

					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "La ciudad ha sido modificada correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "ciudades";										
								}
							})

					</script>';

					}

				}else{

					echo '<script>

						swal({
							type: "error",
							title: "La ciudad no puede ir vacío o llevar caracteres especiales",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "ciudades";										
								}
							})

					</script>';
				}
			}
		}


		/*=============================================
		BORRAR CIUDAD
		=============================================*/

		static public function ctrBorrarCiudad(){

			if (isset($_GET["idCiudad"])) {
				
				$tabla = "ciudades";
				$datos = $_GET["idCiudad"];

				$respuesta = ModeloCursos::mdlBorrarCiudad($tabla, $datos);

				if ($respuesta == "ok") {
					
					echo '<script>

						swal({
							type: "success",
							title: "La ciudad ha sido borrada correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result) => {

								if(result.value){

									window.location = "ciudades";
								}
							})

					</script>';
				}
			}
		}

}