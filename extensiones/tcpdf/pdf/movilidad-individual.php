<?php

require_once "../../../controladores/movilidades.controlador.php";
require_once "../../../modelos/movilidades.modelo.php";

require_once "../../../controladores/usuarios.controlador.php";
require_once "../../../modelos/usuarios.modelo.php";


class imprimirMovilidadIndividual{


	public $iddocente;
	public $desde;
	public $hasta;

	public function traerImpresionReporteMovilidad(){

		// TRAEMOS LA INFORMACION DEL DOCENTE

		$item = "id";
		$valor = $this->iddocente;

		$respuestaDocente = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);


		// TRAEMOS LA INFORMACION DE LA MOVILIDAD

		$itemMovi = "id_usuario";
		$valorMovi = $this->iddocente;
		$desde = $this->desde;
		$hasta = $this->hasta;

		$respuestaMovilidad = ControladorMovilidades::ctrMovilidadIndividual($itemMovi, $valorMovi, $desde, $hasta);

		// CONTAMOS LA CANTIDAD DE VIAJES


		$respuestaViajes = ControladorMovilidades::ctrCuentaMovilidad($itemMovi, $valorMovi, $desde, $hasta);




require_once('tcpdf_include.php');

//$pdf=new FPDF(‘L’,’cm’,’A4’);

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

				RESUMEN MOVILIDAD


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

				Docente


			</td>

			

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				Desde


			</td>
			

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				Hasta


			</td>
			
			

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				Total


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

				$respuestaDocente[nombre]


			</td>

			

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$desde


			</td>
			

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$hasta


			</td>
			
			

			<td style="text-align: center; border: 1px solid #666; background-color:white; width:100px">

				<br>

				$respuestaViajes[total]


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


foreach ($respuestaMovilidad as $key => $item) {

	$date_real = $item["fecha"];
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

				$item[turno]


			</td>






		</tr>

	</table>

EOF;


$pdf->writeHTML($bloque6, false, false, false, false, '');


}

//--------------------------------------------------------



//SALIDA DEL ARCHIVO

$pdf->Output("Movilidad_".$respuestaDocente["nombre"].".pdf");


}
}

$reporte = new imprimirMovilidadIndividual();
$reporte -> iddocente = $_GET["idDocente"];
$reporte -> desde = $_GET["desde"];
$reporte -> hasta = $_GET["hasta"];
$reporte -> traerImpresionReporteMovilidad();


?>