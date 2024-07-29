<?php

require_once "../../../controladores/netbooks.controlador.php";
require_once "../../../modelos/netbooks.modelo.php";

require_once "../../../controladores/servicios.controlador.php";
require_once "../../../modelos/servicios.modelo.php";

require_once "../../../controladores/cursos.controlador.php";
require_once "../../../modelos/cursos.modelo.php";


class imprimirHistorial{


	public $idNetbook;
	public $idCurso;

	public function traerNetbooks(){

		// TRAEMOS LA INFORMACION DE LA NETBOOK

		$item = "id";
		$valor = $this->idNetbook;

		$respuestaNetbook = ControladorNetbooks::ctrMostrarNetbooks($item, $valor);

		// TRAEMOS LA INFORMACION DEL CURSO

		$itemCur = "id";
		$valorCur = $this->idCurso;

		$respuestaCurso = ControladorCursos::ctrMostrarCursos($itemCur, $valorCur);


		// TRAEMOS LA INFORMACION DE LOS SERVICIOS

		$itemServi = "id_netbook";
		$valorServi = $this->idNetbook;
		
		$respuestaServicios = ControladorServicios::ctrServicios($itemServi, $valorServi);





require_once('tcpdf_include.php');

$pdf = new TCPDF('P', PDF_UNIT, 'A4', true, 'UTF-8', false);

$pdf->startPageGroup();

$pdf->AddPage();


//--------------------------------------------------------------------------------

$bloque1 = <<<EOF

	<table>

		<tr>

			<td style="width: 150px"><img src="images/logo.jpg"></td>

			<td style="background-color:white; width:590px">

				<div style="font-size:12px; text-align:center; line-height:15px;">

					<br>
					Escuela Secundaria Río Negro

					<br>
					Nº 153
					

				</div>

			</td>


		</tr>

	</table>

EOF;


$pdf->writeHTML($bloque1, false, false, false, false, '');

//----------------------------------------------------------------------------------

$bloque2 = <<<EOF

	<table style="font-size:10px; padding:5px 10px;">

		<tr>

			<td style="width:540px"><img src="images/backFact2.jpg"></td>

		</tr>

		<tr>

		<td style="border: 1px solid #666; background-color:white; width:550px; text-align: center">

				<br>

				HISTORIAL DE SERVICIOS - Nº de Serie: $respuestaNetbook[nserie]


			</td>
			
			
		</tr>

	</table>

EOF;


$pdf->writeHTML($bloque2, false, false, false, false, '');

//--------------------------------------------------------

//----------------------------------------------------------------------------------

//----------------------------------------------------------------------------------

$bloque3 = <<<EOF

	<table style="font-size:10px; padding:5px 10px;">

		

		<tr>

		<td style="text-align: center; border: 1px solid #666; background-color:white; width:250px">

				<br>

				Alumno


			</td>

			

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				Curso


			</td>
			

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				Turno


			</td>			
			

		</tr>

	</table>

EOF;


$pdf->writeHTML($bloque3, false, false, false, false, '');

//--------------------------------------------------------


$bloque4 = <<<EOF

	<table style="font-size:10px; padding:5px 10px;">

		

		<tr>

		<td style="text-align: center; border: 1px solid #666; background-color:white; width:250px">

				<br>

				$respuestaNetbook[nombre]


			</td>

			

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				ddddd


			</td>
			

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				dddddd


			</td>
			


			

		</tr>

	</table>

EOF;


$pdf->writeHTML($bloque4, false, false, false, false, '');



//----------------------------------------------------------------------------------


//----------------------------------------------------------------------------------

$bloque5 = <<<EOF

	<table style="font-size:10px; padding:5px 10px;">

		<tr>

			<td style="width:540px"><img src="images/backFact2.jpg"></td>

		</tr>

		<tr>

		<td style="text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				Fecha


			</td>

			

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:150px">

				<br>

				Turno


			</td>
			


			

		</tr>

	</table>

EOF;


$pdf->writeHTML($bloque5, false, false, false, false, '');

//--------------------------------------------------------


foreach ($respuestaServicios as $key => $item) {

	$date_real = $item["fecha_servicio"];
    $date = str_replace('/', '-', $date_real);
    $fecha_posta = date("d-m-Y", strtotime($date));

  



$bloque6 = <<<EOF

	<table style="font-size:10px; padding:5px 10px;">

		

		<tr>

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$fecha_posta


			</td>

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:150px">

				<br>

				55555555


			</td>






		</tr>

	</table>

EOF;


$pdf->writeHTML($bloque6, false, false, false, false, '');


}

//--------------------------------------------------------



//SALIDA DEL ARCHIVO

$pdf->Output("Historial_".$respuestaNetbook["nombre"].".pdf");


}
}

$reporte = new imprimirHistorial();
$reporte -> idNetbook = $_GET["idNetbook"];
$reporte -> traerNetbooks();


?>