<?php

	require_once "../controladores/ciudades.controlador.php";
	require_once "../modelos/ciudades.modelo.php";

	class AjaxCiudades{

		/*=============================================
		EDITAR CIUDAD           
		=============================================*/

		public $idCiudad;

		public function ajaxEditarCiudad(){

			$item = "id_ciudad";
			$valor = $this->idCiudad;

			$respuesta = ControladorCiudades::ctrMostrarCiudades($item, $valor);

			echo json_encode($respuesta);

		}		

		/*=============================================
		ACTIVAR CIUDAD
		=============================================*/

		public $activarCiudad;
		public $activarId;

		public function ajaxActivarCiudad(){

			$tabla = "ciudades";

			$item1 = "estado";
			$valor1 = $this->activarCiudad;

			$item2 = "id_ciudad";
			$valor2 = $this->activarId;

			$respuesta = ModeloCiudades::mdlActualizarCiudad($tabla, $item1, $valor1, $item2, $valor2);

		}

	}

		/*=============================================
		ACTIVAR CIUDAD
		=============================================*/

		if (isset($_POST["activarCiudad"])) {
			
			$activarCiudad = new AjaxCiudades();
			$activarCiudad -> activarCiudad = $_POST["activarCiudad"];
			$activarCiudad -> activarId = $_POST["activarId"];
			$activarCiudad -> ajaxActivarCiudad();

		}


		/*=============================================
		EDITAR CIUDAD          
		=============================================*/

		if (isset($_POST["idCiudad"])) {
			
			$ciudad = new AjaxCiudades();
			$ciudad -> idCiudad = $_POST["idCiudad"];
			$ciudad -> ajaxEditarCiudad();
		}