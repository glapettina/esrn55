<?php

	require_once "../controladores/informes.controlador.php";
	require_once "../modelos/informes.modelo.php";


	class AjaxInformes{





		

		/*=============================================
		EDITAR INFORME         
		=============================================*/

		public $idAlumno;
		public $tabla;
		public $periodo;

		public function ajaxEditarInforme(){

			$item = "id";
			$valor = $this->idAlumno;
			$tabla = $this->tabla;
			$periodo = $this->periodo;
			$verifica = false;

			$respuesta = ControladorInformes::ctrMostrarInformes($item, $valor, $tabla, $periodo, $verifica);


			echo json_encode($respuesta);


		}	
		
	}

	/*=============================================
	EDITAR INFORME          
	=============================================*/

	if (isset($_POST["idAlumno"])) {
		
		$informe = new AjaxInformes();
		$informe -> idAlumno = $_POST["idAlumno"];
		$informe -> tabla = $_POST["tabla"];
		$informe -> periodo = $_POST["periodo"];
		$informe -> ajaxEditarInforme();
	}








