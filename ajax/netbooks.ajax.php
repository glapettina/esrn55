<?php

	require_once "../controladores/netbooks.controlador.php";
	require_once "../modelos/netbooks.modelo.php";

	class AjaxNetbooks{

		/*=============================================
		EDITAR NETBOOK         
		=============================================*/

		public $idNetbook;

		public function ajaxEditarNetbook(){


			$item = "id";
			$valor = $this->idNetbook;

			$respuesta = Controladornetbooks::ctrMostrarNetbooks($item, $valor);

			echo json_encode($respuesta);


		}	
		
	

		/*=============================================
		ACTIVAR NETBOOK 
		=============================================*/

		public $activarNetbook;
		public $activarId;
		//public $tabla;

		public function ajaxActivarNetbook(){

			$tabla = "netbooks";

			$item1 = "estado";
			$valor1 = $this->activarNetbook;

			$item2 = "id";
			$valor2 = $this->activarId;


			$respuesta = ModeloNetbooks::mdlActualizarNetbook($tabla, $item1, $valor1, $item2, $valor2);

		}


		/*=============================================
		VALIDAR NO REPETIR USUARIO
		===========================================*/

		public $validarNetbook;

		public function ajaxValidarnetbook(){

			$item = "nserie";
			$valor = $this->validarNetbook;
			$respuesta = ControladorNetbooks::ctrMostrarNetbooks($item, $valor);

			echo json_encode($respuesta);

		}
		
		
		
	}

	/*=============================================
	EDITAR NETBOOK          
	=============================================*/

	if (isset($_POST["idNetbook"])) {
		
		$netbook = new AjaxNetbooks();
		$netbook -> idNetbook = $_POST["idNetbook"];
		$netbook -> ajaxEditarNetbook();
	}



	/*=============================================
	ACTIVAR NETBOOK
	=============================================*/

		if (isset($_POST["activarNetbook"])) {
			
			$activarNetbook = new AjaxNetbooks();
			$activarNetbook -> activarNetbook = $_POST["activarNetbook"];
			$activarNetbook -> activarId = $_POST["activarId"];
			$activarNetbook -> ajaxActivarNetbook();

		}


		/*=============================================
		VALIDAR NO REPETIR NETBOOK
		===========================================*/

		if (isset($_POST["validarUsuario"])) {
			
			$valNetbook = new AjaxNetbooks();
			$valNetbook -> validarNetbook = $_POST["validarNetbook"];
			$valNetbook -> ajaxValidarnetbook();
		}