<?php


class ControladorMovilidades{

	/*=============================================
	REGISTRO DE MOVILIDAD            
	=============================================*/
	
	static public function ctrCrearMovilidad(){

		if (isset($_POST["datepicker"])) {
			
				
				$tabla = "movilidad";

				$fecha = $_POST["datepicker"];
           		$date = str_replace('/', '-', $fecha);
          		$fecha_final = date("Y-m-d", strtotime($date));

				$datos = array("id_usuario" => $_SESSION["id"],
								"fecha" => $fecha_final, 
								"turno" => $_POST["nuevoTurno"]);

				$respuesta = ModeloMovilidades::mdlIngresarMovilidad($tabla, $datos);

				if ($respuesta == "ok") {
					
					echo '<script>

					swal({

						type: "success",
						title: "La movilidad ha sido cargada correctamente",
						showConfirmButton: true,
						confirmButtonText: "Cerrar",
						closeOnConfirm: false							

					}).then((result)=>{

						if(result.value){

							window.location = "movilidad";
							
							}

						});

				</script>';

				

			}else{

				echo '<script>

					swal({

						type: "error",
						title: "La movilidad no puede ir vacío",
						showConfirmButton: true,
						confirmButtonText: "Cerrar",
						closeOnConfirm: false							

					}).then((result)=>{

						if(result.value){

							window.location = "movilidad";
							
							}

						})

				</script>';

			}
		}

	}


		/*=============================================
        MOSTRAR MOVILIDADES            
		=============================================*/

		static public function ctrMostrarMovilidades($item, $valor){

			$tabla = "movilidad";

			$respuesta = ModeloMovilidades::mdlMostrarMovilidades($tabla, $item, $valor);

			return $respuesta;
		}



		/*=============================================
        LISTAR MOVILIDAD X DOCENTE         
		=============================================*/

		static public function ctrMovilidadIndividual($itemMovi, $valorMovi, $desde, $hasta){

			$tabla = "movilidad";


			$respuesta = ModeloMovilidades::mdlMovilidadIndividual($tabla, $itemMovi, $valorMovi, $desde, $hasta);

			//var_dump($respuesta);


			return $respuesta;

		}


		/*=============================================
        CUENTA MOVILIDAD X DOCENTE         
		=============================================*/

		static public function ctrCuentaMovilidad($itemMovi, $valorMovi, $desde, $hasta){

			$tabla = "movilidad";


			$respuesta = ModeloMovilidades::mdlCuentaMovilidad($tabla, $itemMovi, $valorMovi, $desde, $hasta);

			//var_dump($respuesta);


			return $respuesta;

		}




		/*=============================================
		BORRAR MOVILIDAD
		=============================================*/

		static public function ctrBorrarMovilidad(){

			if (isset($_GET["idMovilidad"])) {
				
				$tabla = "movilidad";
				$datos = $_GET["idMovilidad"];

				$respuesta = ModeloMovilidades::mdlBorrarMovilidad($tabla, $datos);

				if ($respuesta == "ok") {
					
					echo '<script>

						swal({
							type: "success",
							title: "La movilidad ha sido borrada correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result) => {

								if(result.value){

									window.location = "movilidad";
								}
							})

					</script>';
				}
			}
		}

}