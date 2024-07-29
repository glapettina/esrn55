<?php

	require_once "../controladores/cursos.controlador.php";
	require_once "../modelos/cursos.modelo.php";

	class AjaxCursos{

		/*=============================================
		EDITAR CURSO           
		=============================================*/

		public $idCurso;

		public function ajaxEditarCurso(){

			$item = "id";
			$valor = $this->idCurso;

			$respuesta = ControladorCursos::ctrMostrarCursos($item, $valor);

			echo json_encode($respuesta);

		}		

		/*=============================================
		ACTIVAR CURSO
		=============================================*/

		public $activarCurso;
		public $activarId;

		public function ajaxActivarCurso(){

			$tabla = "cursos";

			$item1 = "estado";
			$valor1 = $this->activarCurso;

			$item2 = "id";
			$valor2 = $this->activarId;

			$respuesta = ModeloCursos::mdlActualizarCurso($tabla, $item1, $valor1, $item2, $valor2);

		}

	}

		/*=============================================
		ACTIVAR CURSO
		=============================================*/

		if (isset($_POST["activarCurso"])) {
			
			$activarCurso = new AjaxCursos();
			$activarCurso -> activarCurso = $_POST["activarCurso"];
			$activarCurso -> activarId = $_POST["activarId"];
			$activarCurso -> ajaxActivarCurso();

		}


		/*=============================================
		EDITAR CURSO          
		=============================================*/

		if (isset($_POST["idCurso"])) {
			
			$curso = new AjaxCursos();
			$curso -> idCurso = $_POST["idCurso"];
			$curso -> ajaxEditarCurso();
		}