<?php

	require_once "../controladores/alumnos.controlador.php";
	require_once "../modelos/alumnos.modelo.php";

	class AjaxAlumnos{

		/*=============================================
		EDITAR ALUMNO         
		=============================================*/

		public $idAlumno;
		public $tabla;

		public function ajaxEditarAlumno(){

			$item = "id";
			$valor = $this->idAlumno;
			$tabla = $this->tabla;

			$respuesta = ControladorAlumnos::ctrMostrarAlumnos($item, $valor, $tabla);

			echo json_encode($respuesta);


		}	
		
	

		/*=============================================
		ACTIVAR ALUMNO 
		=============================================*/

		public $activarAlumno;
		public $activarId;
		//public $tabla;

		public function ajaxActivarAlumno(){

			$tabla = $this->tabla;

			$item1 = "estado";
			$valor1 = $this->activarAlumno;

			$item2 = "id";
			$valor2 = $this->activarId;


			$respuesta = ModeloAlumnos::mdlActualizarAlumno($tabla, $item1, $valor1, $item2, $valor2);

		}
		
		
		
	}

	/*=============================================
	EDITAR ALUMNO          
	=============================================*/

	if (isset($_POST["idAlumno"])) {
		
		$alumno = new AjaxAlumnos();
		$alumno -> idAlumno = $_POST["idAlumno"];
		$alumno -> tabla = $_POST["tabla"];
		$alumno -> ajaxEditarAlumno();
	}



	/*=============================================
	ACTIVAR ALUMNO
	=============================================*/

		if (isset($_POST["activarAlumno"])) {
			
			$activarAlumno = new AjaxAlumnos();
			$activarAlumno -> activarAlumno = $_POST["activarAlumno"];
			$activarAlumno -> activarId = $_POST["activarId"];
			$activarAlumno -> tabla = $_POST["tabla"];
			$activarAlumno -> ajaxActivarAlumno();

		}