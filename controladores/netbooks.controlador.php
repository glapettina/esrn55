<?php

	class ControladorNetbooks{

		/*=============================================
		CREAR NETBOOK          
		=============================================*/

		static public function ctrCrearNetbook(){

			if (isset($_POST["nuevoNombre"])) {
				
				if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoNombre"])) {
					
					
					$tabla = "netbooks";

					$datos = array("nombre" => $_POST["nuevoNombre"], 
								"id_curso" => $_POST["nuevoCurso"],
								"nserie" => $_POST["nuevoNserie"]);


					$respuesta = ModeloNetbooks::mdlCrearNetbook($tabla, $datos);

					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "La Netbook ha sido guardada correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "netbooks";										
								}
							})

					</script>';

					}

				}else{

					echo '<script>

						swal({
							type: "error",
							title: "La netbook no puede ir vacía o llevar caracteres especiales",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "netbooks";										
								}
							})

					</script>';
				}
			}
		}

		/*=============================================
		MOSTRAR NETBOOKS            
		=============================================*/		

		static public function ctrMostrarNetbooks($item, $valor){

			$tabla = "netbooks";


			$respuesta = ModeloNetbooks::mdlMostrarNetbooks($item, $valor, $tabla);

			return $respuesta;

		}

		/*=============================================
		EDITAR NETBOOK 
		=============================================*/

		static public function ctrEditarNetbook(){

			if (isset($_POST["editarNombre"])) {
				
				if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarNombre"])) {
					
					$tabla = "netbooks";

					$datos = array("nombre" => $_POST["editarNombre"], "nserie" => $_POST["editarNserie"], "id" => $_POST["idNetbook"]);


					$respuesta = ModeloNetbooks::mdlEditarNetbook($tabla, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "La Netbook ha sido modificada correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "netbooks";										
								}
							})

					</script>';

					}

				}else{

					echo '<script>

						swal({
							type: "error",
							title: "La netbook no puede ir vacía o llevar caracteres especiales",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "netbooks";										
								}
							})

					</script>';
				}
			}
		}

		/*=============================================
		BORRAR NETBOOK
		=============================================*/

		static public function ctrBorrarNetbook(){

			if (isset($_GET["idNetbook"])) {

				$tabla = "netbooks";				
				
				$datos = $_GET["idNetbook"];

				$respuesta = ModeloNetbooks::mdlBorrarNetbook($tabla, $datos);

				if ($respuesta == "ok") {
					
					echo '<script>

						swal({
							type: "success",
							title: "La netbook ha sido borrada correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result) => {

								if(result.value){

									window.location = "netbooks";
								}
							})

					</script>';
				}
			}
		}

	}