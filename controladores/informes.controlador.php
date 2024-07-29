<?php

	class ControladorInformes{


		/*=============================================
		MOSTRAR INFORMES CICLO BÁSICO            
		=============================================*/		

		static public function ctrMostrarInformes($item, $valor, $tabla, $periodo, $verifica){
			

			$respuesta = ModeloInformes::mdlMostrarInformes($item, $valor, $tabla, $periodo, $verifica);

			return $respuesta;

			//var_dump($respuesta);

		}

		/*=============================================
		MOSTRAR INFORMES ORIENTACIÓN            
		=============================================*/		

		static public function ctrMostrarInformesOrientacion($item, $valor1, $valor2, $valor3, $valor4, $tabla, $periodo, $modalidad, $verifica){


			if ($valor4 == 0) {
				
				$respuesta = ModeloInformes::mdlMostrarInformesOrientacion($item, $valor1, $valor2, $valor3, $valor4, $tabla, $periodo, $modalidad, $verifica);
			}else{

				$respuesta = ModeloInformes::mdlMostrarInformesOrientacion($item, $valor1, $valor2, $valor3, $valor4, $tabla, $periodo, $modalidad, $verifica);

			}
			

			

			return $respuesta;

			//var_dump($respuesta);

		

		}


		/*=============================================
		COPIAR SABERES CIENTIFICA           
		=============================================*/	

		static public function ctrCopiarSaberesCientifica($tabla, $curso, $ncurso, $periodo){

				if (isset($_POST["copiaSaberesCientifica"])) {
								

					$datos = array("saberes_cientifica" => $_POST["copiaSaberesCientifica"], "id_curso" => $ncurso);


					$respuesta = ModeloInformes::mdlCopiarSaberesCientifica($tabla, $curso, $datos, $periodo);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "Los saberes fueron copiados correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		COPIAR SABERES SOCIALES           
		=============================================*/	

		static public function ctrCopiarSaberesSociales($tabla, $curso, $ncurso, $periodo){

				if (isset($_POST["copiaSaberesSociales"])) {
								

					$datos = array("saberes_sociales" => $_POST["copiaSaberesSociales"], "id_curso" => $ncurso);


					$respuesta = ModeloInformes::mdlCopiarSaberesSociales($tabla, $curso, $datos, $periodo);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "Los saberes fueron copiados correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		COPIAR SABERES LENGUA           
		=============================================*/	

		static public function ctrCopiarSaberesLengua($tabla, $curso, $ncurso, $periodo){

				if (isset($_POST["copiaSaberesLengua"])) {
								

					$datos = array("saberes_lengua" => $_POST["copiaSaberesLengua"], "id_curso" => $ncurso);


					$respuesta = ModeloInformes::mdlCopiarSaberesLengua($tabla, $curso, $datos, $periodo);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "Los saberes fueron copiados correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		COPIAR SABERES MATEMATICA           
		=============================================*/	

		static public function ctrCopiarSaberesMatematica($tabla, $curso, $ncurso, $periodo){

				if (isset($_POST["copiaSaberesMatematica"])) {
								

					$datos = array("saberes_matematica" => $_POST["copiaSaberesMatematica"], "id_curso" => $ncurso);


					$respuesta = ModeloInformes::mdlCopiarSaberesMatematica($tabla, $curso, $datos, $periodo);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "Los saberes fueron copiados correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		COPIAR SABERES INGLES           
		=============================================*/	

		static public function ctrCopiarSaberesIngles($tabla, $curso, $ncurso, $periodo){

				if (isset($_POST["copiaSaberesIngles"])) {
								

					$datos = array("saberes_ingles" => $_POST["copiaSaberesIngles"], "id_curso" => $ncurso);


					$respuesta = ModeloInformes::mdlCopiarSaberesIngles($tabla, $curso, $datos, $periodo);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "Los saberes fueron copiados correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		COPIAR SABERES EDUCACIÓN FÍSICA           
		=============================================*/	

		static public function ctrCopiarSaberesFisica($tabla, $curso, $ncurso, $periodo){

				if (isset($_POST["copiaSaberesFisica"])) {
								

					$datos = array("saberes_fisica" => $_POST["copiaSaberesFisica"], "id_curso" => $ncurso);


					$respuesta = ModeloInformes::mdlCopiarSaberesFisica($tabla, $curso, $datos, $periodo);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "Los saberes fueron copiados correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		COPIAR SABERES EDUCACIÓN ARTÍSTICA           
		=============================================*/	

		static public function ctrCopiarSaberesArtistica($tabla, $curso, $ncurso, $periodo){

				if (isset($_POST["copiaSaberesArtistica"])) {
								

					$datos = array("saberes_artistica" => $_POST["copiaSaberesArtistica"], "id_curso" => $ncurso);


					$respuesta = ModeloInformes::mdlCopiarSaberesArtistica($tabla, $curso, $datos, $periodo);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "Los saberes fueron copiados correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		COPIAR SABERES EVE           
		=============================================*/	

		static public function ctrCopiarSaberesEve($tabla, $curso, $ncurso, $periodo){

			if (isset($_POST["copiaSaberesEve"])) {
							

				$datos = array("saberes_eve" => $_POST["copiaSaberesEve"], "id_curso" => $ncurso);


				$respuesta = ModeloInformes::mdlCopiarSaberesEve($tabla, $curso, $datos, $periodo);


				if ($respuesta == "ok") {
					
					echo '<script>

					swal({
						type: "success",
						title: "Los saberes fueron copiados correctamente",
						showConfirmButton: true,
						confirmButtonText: "Cerrar",
						closeOnConfirm: false
						}).then((result)=>{
							if(result.value){

								window.location = "'.$curso.'";										
							}
						})

				</script>';

				}

		}
	}		


		/*=============================================
		COPIAR SABERES ANTROPOLOGIA 3          
		=============================================*/	

		static public function ctrCopiarSaberesAntropologia3($tabla, $curso, $ncurso1, $ncurso2, $periodo){

				if (isset($_POST["copiaSaberesAntropologia3"])) {
								

					$datos = array("saberes_antropologia3" => $_POST["copiaSaberesAntropologia3"], "id_curso1" => $ncurso1, "id_curso2" => $ncurso2);


					$respuesta = ModeloInformes::mdlCopiarSaberesAntropologia3($tabla, $datos, $periodo);


					if ($respuesta == "ok") {
						
						echo '<script> 

						swal({
							type: "success",
							title: "Los saberes fueron copiados correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		COPIAR SABERES ANTROPOLOGIA 4           
		=============================================*/	

		static public function ctrCopiarSaberesAntropologia4($tabla, $curso, $ncurso1, $ncurso2, $periodo){

			if (isset($_POST["copiaSaberesAntropologia4"])) {
							

				$datos = array("saberes_antropologia4" => $_POST["copiaSaberesAntropologia4"], "id_curso1" => $ncurso1, "id_curso2" => $ncurso2);


				$respuesta = ModeloInformes::mdlCopiarSaberesAntropologia4($tabla, $datos, $periodo);


				if ($respuesta == "ok") {
					
					echo '<script> 

					swal({
						type: "success",
						title: "Los saberes fueron copiados correctamente",
						showConfirmButton: true,
						confirmButtonText: "Cerrar",
						closeOnConfirm: false
						}).then((result)=>{
							if(result.value){

								window.location = "'.$curso.'";										
							}
						})

				</script>';

				}

		}
	}


		/*=============================================
		COPIAR SABERES COMUNICACION (SOCIALES)          
		=============================================*/	

		static public function ctrCopiarSaberesComunicacion($tabla, $curso, $ncurso1, $ncurso2, $periodo){

			if (isset($_POST["copiaSaberesComunicacion"])) {
							

				$datos = array("saberes_comunicacion" => $_POST["copiaSaberesComunicacion"], "id_curso1" => $ncurso1, "id_curso2" => $ncurso2);


				$respuesta = ModeloInformes::mdlCopiarSaberesComunicacion($tabla, $datos, $periodo);


				if ($respuesta == "ok") {
					
					echo '<script> 

					swal({
						type: "success",
						title: "Los saberes fueron copiados correctamente",
						showConfirmButton: true,
						confirmButtonText: "Cerrar",
						closeOnConfirm: false
						}).then((result)=>{
							if(result.value){

								window.location = "'.$curso.'";										
							}
						})

				</script>';

				}

		}
	}


		/*=============================================
		COPIAR SABERES PROYECTO (SOCIALES)          
		=============================================*/	

		static public function ctrCopiarSaberesProyecto($tabla, $curso, $ncurso1, $ncurso2, $periodo){

			if (isset($_POST["copiaSaberesProyecto"])) {
							

				$datos = array("saberes_proyecto" => $_POST["copiaSaberesProyecto"], "id_curso1" => $ncurso1, "id_curso2" => $ncurso2);


				$respuesta = ModeloInformes::mdlCopiarSaberesProyecto($tabla, $datos, $periodo);


				if ($respuesta == "ok") {
					
					echo '<script> 

					swal({
						type: "success",
						title: "Los saberes fueron copiados correctamente",
						showConfirmButton: true,
						confirmButtonText: "Cerrar",
						closeOnConfirm: false
						}).then((result)=>{
							if(result.value){

								window.location = "'.$curso.'";										
							}
						})

				</script>';

				}

		}
	}	


		/*=============================================
		COPIAR SABERES COMUNICACION (SOCIALES)          
		=============================================*/	

		static public function ctrCopiarSaberesConocimiento($tabla, $curso, $ncurso1, $ncurso2, $periodo){

			if (isset($_POST["copiaSaberesConocimiento"])) {
							

				$datos = array("saberes_conocimiento" => $_POST["copiaSaberesConocimiento"], "id_curso1" => $ncurso1, "id_curso2" => $ncurso2);


				$respuesta = ModeloInformes::mdlCopiarSaberesConocimiento($tabla, $datos, $periodo);


				if ($respuesta == "ok") {
					
					echo '<script> 

					swal({
						type: "success",
						title: "Los saberes fueron copiados correctamente",
						showConfirmButton: true,
						confirmButtonText: "Cerrar",
						closeOnConfirm: false
						}).then((result)=>{
							if(result.value){

								window.location = "'.$curso.'";										
							}
						})

				</script>';

				}

		}
	}		


		/*=============================================
		COPIAR SABERES PROBLEMATICA (SOCIALES)          
		=============================================*/	

		static public function ctrCopiarSaberesProblematica($tabla, $curso, $ncurso1, $ncurso2, $periodo){

			if (isset($_POST["copiaSaberesProblematica"])) {
							

				$datos = array("saberes_problematica" => $_POST["copiaSaberesProblematica"], "id_curso1" => $ncurso1, "id_curso2" => $ncurso2);


				$respuesta = ModeloInformes::mdlCopiarSaberesProblematica($tabla, $datos, $periodo);


				if ($respuesta == "ok") {
					
					echo '<script> 

					swal({
						type: "success",
						title: "Los saberes fueron copiados correctamente",
						showConfirmButton: true,
						confirmButtonText: "Cerrar",
						closeOnConfirm: false
						}).then((result)=>{
							if(result.value){

								window.location = "'.$curso.'";										
							}
						})

				</script>';

				}

		}
	}	


		/*=============================================
		COPIAR SABERES QUIMICA (NATURALES)          
		=============================================*/	

		static public function ctrCopiarSaberesQuimica($tabla, $curso, $ncurso1, $ncurso2, $periodo){

			if (isset($_POST["copiaSaberesQuimica"])) {
							

				$datos = array("saberes_quimica" => $_POST["copiaSaberesQuimica"], "id_curso1" => $ncurso1, "id_curso2" => $ncurso2);


				$respuesta = ModeloInformes::mdlCopiarSaberesQuimica($tabla, $datos, $periodo);


				if ($respuesta == "ok") {
					
					echo '<script> 

					swal({
						type: "success",
						title: "Los saberes fueron copiados correctamente",
						showConfirmButton: true,
						confirmButtonText: "Cerrar",
						closeOnConfirm: false
						}).then((result)=>{
							if(result.value){

								window.location = "'.$curso.'";										
							}
						})

				</script>';

				}

		}
	}	


		/*=============================================
		COPIAR SABERES TIERRA 1 (NATURALES)          
		=============================================*/	

		static public function ctrCopiarSaberesTierra1($tabla, $curso, $ncurso1, $ncurso2, $periodo){

			if (isset($_POST["copiaSaberesTierra1"])) {
							

				$datos = array("saberes_tierra1" => $_POST["copiaSaberesTierra1"], "id_curso1" => $ncurso1, "id_curso2" => $ncurso2);


				$respuesta = ModeloInformes::mdlCopiarSaberesTierra1($tabla, $datos, $periodo);


				if ($respuesta == "ok") {
					
					echo '<script> 

					swal({
						type: "success",
						title: "Los saberes fueron copiados correctamente",
						showConfirmButton: true,
						confirmButtonText: "Cerrar",
						closeOnConfirm: false
						}).then((result)=>{
							if(result.value){

								window.location = "'.$curso.'";										
							}
						})

				</script>';

				}

		}
	}	


		/*=============================================
		COPIAR SABERES FISICA (NATURALES)          
		=============================================*/	

		static public function ctrCopiarSaberesFisicao($tabla, $curso, $ncurso1, $ncurso2, $periodo){

			if (isset($_POST["copiaSaberesFisica"])) {
							

				$datos = array("saberes_fisicao" => $_POST["copiaSaberesFisica"], "id_curso1" => $ncurso1, "id_curso2" => $ncurso2);


				$respuesta = ModeloInformes::mdlCopiarSaberesFisicao($tabla, $datos, $periodo);


				if ($respuesta == "ok") {
					
					echo '<script> 

					swal({
						type: "success",
						title: "Los saberes fueron copiados correctamente",
						showConfirmButton: true,
						confirmButtonText: "Cerrar",
						closeOnConfirm: false
						}).then((result)=>{
							if(result.value){

								window.location = "'.$curso.'";										
							}
						})

				</script>';

				}

		}
	}	


		/*=============================================
		COPIAR SABERES BIOTECNOLOGIA (NATURALES)          
		=============================================*/	

		static public function ctrCopiarSaberesBiotecnologia($tabla, $curso, $ncurso1, $ncurso2, $periodo){

			if (isset($_POST["copiaSaberesBiotecnologia"])) {
							

				$datos = array("saberes_biotecnologia" => $_POST["copiaSaberesBiotecnologia"], "id_curso1" => $ncurso1, "id_curso2" => $ncurso2);


				$respuesta = ModeloInformes::mdlCopiarSaberesBiotecnologia($tabla, $datos, $periodo);


				if ($respuesta == "ok") {
					
					echo '<script> 

					swal({
						type: "success",
						title: "Los saberes fueron copiados correctamente",
						showConfirmButton: true,
						confirmButtonText: "Cerrar",
						closeOnConfirm: false
						}).then((result)=>{
							if(result.value){

								window.location = "'.$curso.'";										
							}
						})

				</script>';

				}

		}
	}	


		/*=============================================
		COPIAR SABERES CIENCIAS (NATURALES)          
		=============================================*/	

		static public function ctrCopiarSaberesCiencias($tabla, $curso, $ncurso1, $ncurso2, $periodo){

			if (isset($_POST["copiaSaberesCiencias"])) {
							

				$datos = array("saberes_ciencias" => $_POST["copiaSaberesCiencias"], "id_curso1" => $ncurso1, "id_curso2" => $ncurso2);


				$respuesta = ModeloInformes::mdlCopiarSaberesCiencias($tabla, $datos, $periodo);


				if ($respuesta == "ok") {
					
					echo '<script> 

					swal({
						type: "success",
						title: "Los saberes fueron copiados correctamente",
						showConfirmButton: true,
						confirmButtonText: "Cerrar",
						closeOnConfirm: false
						}).then((result)=>{
							if(result.value){

								window.location = "'.$curso.'";										
							}
						})

				</script>';

				}

		}
	}


		/*=============================================
		COPIAR SABERES TIERRA 2 (NATURALES)          
		=============================================*/	

		static public function ctrCopiarSaberesTierra2($tabla, $curso, $ncurso1, $ncurso2, $periodo){

			if (isset($_POST["copiaSaberesTierra2"])) {
							

				$datos = array("saberes_tierra2" => $_POST["copiaSaberesTierra2"], "id_curso1" => $ncurso1, "id_curso2" => $ncurso2);


				$respuesta = ModeloInformes::mdlCopiarSaberesTierra2($tabla, $datos, $periodo);


				if ($respuesta == "ok") {
					
					echo '<script> 

					swal({
						type: "success",
						title: "Los saberes fueron copiados correctamente",
						showConfirmButton: true,
						confirmButtonText: "Cerrar",
						closeOnConfirm: false
						}).then((result)=>{
							if(result.value){

								window.location = "'.$curso.'";										
							}
						})

				</script>';

				}

		}
	}

	





		/*=============================================
		EDITAR INFORME CIENTIFICA
		=============================================*/

		static public function ctrEditarInformeCientifica($tabla,$curso){

			if (isset($_POST["saberesCientifica"])) {
								

					$datos = array("saberes_cientifica" => $_POST["saberesCientifica"], "aprecia_cientifica" => $_POST["apreciaCientifica"], "asistencia_cientifica" => $_POST["asistenciaCientifica"], "observa_cientifica" => $_POST["observaCientifica"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeCientifica($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		EDITAR INFORME SOCIALES
		=============================================*/

		static public function ctrEditarInformeSociales($tabla,$curso){

			if (isset($_POST["saberesSociales"])) {
								

					$datos = array("saberes_sociales" => $_POST["saberesSociales"], "aprecia_sociales" => $_POST["apreciaSociales"], "asistencia_sociales" => $_POST["asistenciaSociales"], "observa_sociales" => $_POST["observaSociales"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeSociales($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		EDITAR INFORME LENGUA
		=============================================*/

		static public function ctrEditarInformeLengua($tabla,$curso){

			if (isset($_POST["saberesLengua"])) {
								

					$datos = array("saberes_lengua" => $_POST["saberesLengua"], "aprecia_lengua" => $_POST["apreciaLengua"], "asistencia_lengua" => $_POST["asistenciaLengua"], "observa_lengua" => $_POST["observaLengua"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeLengua($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		EDITAR INFORME MATEMATICA
		=============================================*/

		static public function ctrEditarInformeMatematica($tabla,$curso){

			if (isset($_POST["saberesMatematica"])) {
								

					$datos = array("saberes_matematica" => $_POST["saberesMatematica"], "aprecia_matematica" => $_POST["apreciaMatematica"], "asistencia_matematica" => $_POST["asistenciaMatematica"], "observa_matematica" => $_POST["observaMatematica"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeMatematica($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		EDITAR INFORME INGLES
		=============================================*/

		static public function ctrEditarInformeIngles($tabla,$curso){

			if (isset($_POST["saberesIngles"])) {
								

					$datos = array("saberes_ingles" => $_POST["saberesIngles"], "aprecia_ingles" => $_POST["apreciaIngles"], "asistencia_ingles" => $_POST["asistenciaIngles"], "observa_ingles" => $_POST["observaIngles"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeIngles($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		EDITAR INFORME EDUCACIÓN FÍSICA
		=============================================*/

		static public function ctrEditarInformeFisica($tabla,$curso){

			if (isset($_POST["saberesFisica"])) {
								

					$datos = array("saberes_fisica" => $_POST["saberesFisica"], "aprecia_fisica" => $_POST["apreciaFisica"], "asistencia_fisica" => $_POST["asistenciaFisica"], "observa_fisica" => $_POST["observaFisica"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeFisica($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		EDITAR INFORME EDUCACIÓN ARTÍSTICA
		=============================================*/

		static public function ctrEditarInformeArtistica($tabla,$curso){

			if (isset($_POST["saberesArtistica"])) {
								

					$datos = array("saberes_artistica" => $_POST["saberesArtistica"], "aprecia_artistica" => $_POST["apreciaArtistica"], "asistencia_artistica" => $_POST["asistenciaArtistica"], "observa_artistica" => $_POST["observaArtistica"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeArtistica($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		EDITAR INFORME EVE
		=============================================*/

		static public function ctrEditarInformeEve($tabla,$curso){

			if (isset($_POST["saberesEve"])) {
								

					$datos = array("saberes_eve" => $_POST["saberesEve"], "aprecia_eve" => $_POST["apreciaEve"], "asistencia_eve" => $_POST["asistenciaEve"], "observa_eve" => $_POST["observaEve"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeEve($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}		


		/*=============================================
		EDITAR INFORME ANTROPOLOGIA 3 (SOCIALES)
		=============================================*/

		static public function ctrEditarInformeAntropologia3($tabla,$curso){

			if (isset($_POST["saberesAntropologia"])) {
								

					$datos = array("saberes_antropologia3" => $_POST["saberesAntropologia"], "aprecia_antropologia3" => $_POST["apreciaAntropologia"], "asistencia_antropologia3" => $_POST["asistenciaAntropologia"], "observa_antropologia3" => $_POST["observaAntropologia"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeAntropologia3($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}

		/*=============================================
		EDITAR INFORME ANTROPOLOGIA 4 (SOCIALES)
		=============================================*/

		static public function ctrEditarInformeAntropologia4($tabla,$curso){

			if (isset($_POST["saberesAntropologia"])) {
								

					$datos = array("saberes_antropologia4" => $_POST["saberesAntropologia"], "aprecia_antropologia4" => $_POST["apreciaAntropologia"], "asistencia_antropologia4" => $_POST["asistenciaAntropologia"], "observa_antropologia4" => $_POST["observaAntropologia"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeAntropologia4($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}		


		/*=============================================
		EDITAR INFORME COMUNICACION (SOCIALES)
		=============================================*/

		static public function ctrEditarInformeComunicacion($tabla,$curso){

			if (isset($_POST["saberesComunicacion"])) {
								

					$datos = array("saberes_comunicacion" => $_POST["saberesComunicacion"], "aprecia_comunicacion" => $_POST["apreciaComunicacion"], "asistencia_comunicacion" => $_POST["asistenciaComunicacion"], "observa_comunicacion" => $_POST["observaComunicacion"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeComunicacion($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}		


		/*=============================================
		EDITAR INFORME PROYECTO (SOCIALES)
		=============================================*/

		static public function ctrEditarInformeProyecto($tabla,$curso){

			if (isset($_POST["saberesProyecto"])) {
								

					$datos = array("saberes_proyecto" => $_POST["saberesProyecto"], "aprecia_proyecto" => $_POST["apreciaProyecto"], "asistencia_proyecto" => $_POST["asistenciaProyecto"], "observa_proyecto" => $_POST["observaProyecto"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeProyecto($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}		


		/*=============================================
		EDITAR INFORME CONOCIMIENTO (SOCIALES)
		=============================================*/

		static public function ctrEditarInformeConocimiento($tabla,$curso){

			if (isset($_POST["saberesConocimiento"])) {
								

					$datos = array("saberes_conocimiento" => $_POST["saberesConocimiento"], "aprecia_conocimiento" => $_POST["apreciaConocimiento"], "asistencia_conocimiento" => $_POST["asistenciaConocimiento"], "observa_conocimiento" => $_POST["observaConocimiento"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeConocimiento($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}		


		/*=============================================
		EDITAR INFORME PROBLEMATICA (SOCIALES)
		=============================================*/

		static public function ctrEditarInformeProblematica($tabla,$curso){

			if (isset($_POST["saberesProblematica"])) {
								

					$datos = array("saberes_problematica" => $_POST["saberesProblematica"], "aprecia_problematica" => $_POST["apreciaProblematica"], "asistencia_problematica" => $_POST["asistenciaProblematica"], "observa_problematica" => $_POST["observaProblematica"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeProblematica($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}			



		/*=============================================
		EDITAR INFORME QUIMICA (NATURALES)
		=============================================*/

		static public function ctrEditarInformeQuimica($tabla,$curso){

			if (isset($_POST["saberesQuimica"])) {
								

					$datos = array("saberes_quimica" => $_POST["saberesQuimica"], "aprecia_quimica" => $_POST["apreciaQuimica"], "asistencia_quimica" => $_POST["asistenciaQuimica"], "observa_quimica" => $_POST["observaQuimica"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeQuimica($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}		

		/*=============================================
		EDITAR INFORME TIERRA 1 (NATURALES)
		=============================================*/

		static public function ctrEditarInformeTierra1($tabla,$curso){

			if (isset($_POST["saberesTierra1"])) {
								

					$datos = array("saberes_tierra1" => $_POST["saberesTierra1"], "aprecia_tierra1" => $_POST["apreciaTierra1"], "asistencia_tierra1" => $_POST["asistenciaTierra1"], "observa_tierra1" => $_POST["observaTierra1"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeTierra1($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}	
		
		/*=============================================
		EDITAR INFORME FISICA (NATURALES)
		=============================================*/

		static public function ctrEditarInformeFisicao($tabla,$curso){

			if (isset($_POST["saberesFisica"])) {
								

					$datos = array("saberes_fisicao" => $_POST["saberesFisica"], "aprecia_fisicao" => $_POST["apreciaFisica"], "asistencia_fisicao" => $_POST["asistenciaFisica"], "observa_fisicao" => $_POST["observaFisica"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeFisicao($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}		

		/*=============================================
		EDITAR INFORME BIOTECNOLOGIA (NATURALES)
		=============================================*/

		static public function ctrEditarInformeBiotecnologia($tabla,$curso){

			if (isset($_POST["saberesBiotecnologia"])) {
								

					$datos = array("saberes_Biotecnologia" => $_POST["saberesBiotecnologia"], "aprecia_biotecnologia" => $_POST["apreciaBiotecnologia"], "asistencia_biotecnologia" => $_POST["asistenciaBiotecnologia"], "observa_biotecnologia" => $_POST["observaBiotecnologia"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeBiotecnologia($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}		


		/*=============================================
		EDITAR INFORME CIENCIAS (NATURALES)
		=============================================*/

		static public function ctrEditarInformeCiencias($tabla,$curso){

			if (isset($_POST["saberesCiencias"])) {
								

					$datos = array("saberes_ciencias" => $_POST["saberesCiencias"], "aprecia_ciencias" => $_POST["apreciaCiencias"], "asistencia_ciencias" => $_POST["asistenciaCiencias"], "observa_ciencias" => $_POST["observaCiencias"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeCiencias($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}		


		/*=============================================
		EDITAR INFORME TIERRA 2 (NATURALES)
		=============================================*/

		static public function ctrEditarInformeTierra2($tabla,$curso){

			if (isset($_POST["saberesTierra2"])) {
								

					$datos = array("saberes_tierra2" => $_POST["saberesTierra2"], "aprecia_tierra2" => $_POST["apreciaTierra2"], "asistencia_tierra2" => $_POST["asistenciaTierra2"], "observa_tierra2" => $_POST["observaTierra2"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeTierra2($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}		


		/*=============================================
		EDITAR INFORME INTRODUCCION (TURISMO)
		=============================================*/

		static public function ctrEditarInformeIntroduccion($tabla,$curso){

			if (isset($_POST["saberesIntroduccion"])) {
								

					$datos = array("saberes_introduccion" => $_POST["saberesIntroduccion"], "aprecia_introduccion" => $_POST["apreciaIntroduccion"], "asistencia_introduccion" => $_POST["asistenciaIntroduccion"], "observa_introduccion" => $_POST["observaIntroduccion"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeIntroduccion($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		EDITAR INFORME AMBIENTE (TURISMO)
		=============================================*/

		static public function ctrEditarInformeAmbiente($tabla,$curso){

			if (isset($_POST["saberesAmbiente"])) {
								

					$datos = array("saberes_ambiente" => $_POST["saberesAmbiente"], "aprecia_ambiente" => $_POST["apreciaAmbiente"], "asistencia_ambiente" => $_POST["asistenciaAmbiente"], "observa_ambiente" => $_POST["observaAmbiente"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeAmbiente($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		EDITAR INFORME GENERACION (TURISMO)
		=============================================*/

		static public function ctrEditarInformeGeneracion($tabla,$curso){

			if (isset($_POST["saberesGeneracion"])) {
								

					$datos = array("saberes_generacion" => $_POST["saberesGeneracion"], "aprecia_generacion" => $_POST["apreciaGeneracion"], "asistencia_generacion" => $_POST["asistenciaGeneracion"], "observa_generacion" => $_POST["observaGeneracion"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeGeneracion($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		EDITAR INFORME PRODUCCION (TURISMO)
		=============================================*/

		static public function ctrEditarInformeProduccion($tabla,$curso){

			if (isset($_POST["saberesProduccion"])) {
								

					$datos = array("saberes_produccion" => $_POST["saberesProduccion"], "aprecia_produccion" => $_POST["apreciaProduccion"], "asistencia_produccion" => $_POST["asistenciaProduccion"], "observa_produccion" => $_POST["observaProduccion"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeProduccion($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}






		/*=============================================
		EDITAR INFORME TALLER (TURISMO)
		=============================================*/

		static public function ctrEditarInformeTaller($tabla,$curso){

			if (isset($_POST["saberesTaller"])) {
								

					$datos = array("saberes_taller" => $_POST["saberesTaller"], "aprecia_taller" => $_POST["apreciaTaller"], "asistencia_taller" => $_POST["asistenciaTaller"], "observa_taller" => $_POST["observaTaller"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeTaller($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		EDITAR INFORME APRECIACION
		=============================================*/

		static public function ctrEditarInformeApreciacion($tabla,$curso){

			if (isset($_POST["saberesApreciacion"])) {
								

					$datos = array("saberes_apreciacion" => $_POST["saberesApreciacion"], "aprecia_apreciacion" => $_POST["apreciaApreciacion"], "asistencia_apreciacion" => $_POST["asistenciaApreciacion"], "observa_apreciacion" => $_POST["observaApreciacion"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeApreciacion($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		EDITAR INFORME LENGUAJE 3
		=============================================*/

		static public function ctrEditarInformeLenguaje3($tabla,$curso){

			if (isset($_POST["saberesLenguaje3"])) {
								

					$datos = array("saberes_lenguaje3" => $_POST["saberesLenguaje3"], "aprecia_lenguaje3" => $_POST["apreciaLenguaje3"], "asistencia_lenguaje3" => $_POST["asistenciaLenguaje3"], "observa_lenguaje3" => $_POST["observaLenguaje3"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeLenguaje3($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}



		/*=============================================
		EDITAR INFORME LENGUAJE 4 (ARTE - MUSICA)
		=============================================*/

		static public function ctrEditarInformeLenguaje4($tabla,$curso){

			if (isset($_POST["saberesLenguaje4"])) {
								

					$datos = array("saberes_lenguaje4" => $_POST["saberesLenguaje4"], "aprecia_lenguaje4" => $_POST["apreciaLenguaje4"], "asistencia_lenguaje4" => $_POST["asistenciaLenguaje4"], "observa_lenguaje4" => $_POST["observaLenguaje4"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeLenguaje4($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		EDITAR INFORME CONJUNTO 4 (ARTE - MUSICA)
		=============================================*/

		static public function ctrEditarInformeConjunto4($tabla,$curso){

			if (isset($_POST["saberesConjunto4"])) {
								

					$datos = array("saberes_conjunto4" => $_POST["saberesConjunto4"], "aprecia_conjunto4" => $_POST["apreciaConjunto4"], "asistencia_conjunto4" => $_POST["asistenciaConjunto4"], "observa_conjunto4" => $_POST["observaConjunto4"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeConjunto4($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		EDITAR INFORME VOCAL 4 (ARTE - MUSICA)
		=============================================*/

		static public function ctrEditarInformeVocal4($tabla,$curso){

			if (isset($_POST["saberesVocal4"])) {
								

					$datos = array("saberes_vocal4" => $_POST["saberesVocal4"], "aprecia_vocal4" => $_POST["apreciaVocal4"], "asistencia_vocal4" => $_POST["asistenciaVocal4"], "observa_vocal4" => $_POST["observaVocal4"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeVocal4($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		EDITAR LENGUAJE 5 (ARTE - MUSICA)
		=============================================*/

		static public function ctrEditarInformeLenguaje5($tabla,$curso){

			if (isset($_POST["saberesLenguaje5"])) {
								

					$datos = array("saberes_lenguaje5" => $_POST["saberesLenguaje5"], "aprecia_lenguaje5" => $_POST["apreciaLenguaje5"], "asistencia_lenguaje5" => $_POST["asistenciaLenguaje5"], "observa_lenguaje5" => $_POST["observaLenguaje5"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeLenguaje5($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		EDITAR MUSICA (ARTE - MUSICA)
		=============================================*/

		static public function ctrEditarInformeMusica($tabla,$curso){

			if (isset($_POST["saberesMusica"])) {
								

					$datos = array("saberes_musica" => $_POST["saberesMusica"], "aprecia_musica" => $_POST["apreciaMusica"], "asistencia_musica" => $_POST["asistenciaMusica"], "observa_musica" => $_POST["observaMusica"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeMusica($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		EDITAR VOCAL 5 (ARTE - MUSICA)
		=============================================*/

		static public function ctrEditarInformeVocal5($tabla,$curso){

			if (isset($_POST["saberesVocal5"])) {
								

					$datos = array("saberes_vocal5" => $_POST["saberesVocal5"], "aprecia_vocal5" => $_POST["apreciaVocal5"], "asistencia_vocal5" => $_POST["asistenciaVocal5"], "observa_vocal5" => $_POST["observaVocal5"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeVocal5($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		EDITAR TECNOLOGIA (ARTE - MUSICA)
		=============================================*/

		static public function ctrEditarInformeTecnologia($tabla,$curso){

			if (isset($_POST["saberesTecnologia"])) {
								

					$datos = array("saberes_tecnologia" => $_POST["saberesTecnologia"], "aprecia_tecnologia" => $_POST["apreciaTecnologia"], "asistencia_tecnologia" => $_POST["asistenciaTecnologia"], "observa_tecnologia" => $_POST["observaTecnologia"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeTecnologia($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}


		/*=============================================
		EDITAR CONJUNTO 5 (ARTE - MUSICA)
		=============================================*/

		static public function ctrEditarInformeConjunto5($tabla,$curso){

			if (isset($_POST["saberesConjunto5"])) {
								

					$datos = array("saberes_conjunto5" => $_POST["saberesConjunto5"], "aprecia_conjunto5" => $_POST["apreciaConjunto5"], "asistencia_conjunto5" => $_POST["asistenciaConjunto5"], "observa_conjunto5" => $_POST["observaConjunto5"], "id_usuario" => $_SESSION["id"], "id" => $_POST["idAlumno"]);


					$respuesta = ModeloInformes::mdlEditarInformeConjunto5($tabla, $curso, $datos);


					if ($respuesta == "ok") {
						
						echo '<script>

						swal({
							type: "success",
							title: "El informe ha sido modificado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
							}).then((result)=>{
								if(result.value){

									window.location = "'.$curso.'";										
								}
							})

					</script>';

					}

			}
		}

		
	}

 