<?php

	require_once "conexion.php";

	class ModeloInformes{


	
		/*=============================================
		MOSTRAR INFORMES CICLO BÁSICO
		=============================================*/

		static public function mdlMostrarInformes($item, $valor, $tabla, $periodo, $verifica){

			if ($item != null && $verifica == false) {
				
				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE periodo = '$periodo' AND $item = :$item ORDER BY nombre");

				$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

				$stmt -> execute();

				return $stmt -> fetch();

			}else if($item != null && $verifica == true){

				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE periodo = '$periodo' AND $item = :$item AND estado = 1 ORDER BY nombre");

				$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

				$stmt -> execute();

				return $stmt -> fetchAll();


			}else{

				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY nombre");

				$stmt -> execute();

				return $stmt -> fetchAll();

			}

			$stmt -> close();

			$stmt = null;
		}





		/*=============================================
		MOSTRAR INFORMES ORIENTACIÓN 
		=============================================*/

		static public function mdlMostrarInformesOrientacion($item, $valor1, $valor2, $valor3, $valor4, $tabla, $periodo, $modalidad, $verifica){

			if ($item != null && $verifica == false) {
				
				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE periodo = '$periodo' AND $item = :$item");

				$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

				$stmt -> execute();

				return $stmt -> fetch();

			}else if($item != null && $verifica == true && $valor4 == 0){

				//$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = $valor1 OR $item = $valor2 OR $item = $valor3 AND modalidad = $modalidad AND estado = 1");

				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item IN ($valor1, $valor2, $valor3) AND estado = 1 AND modalidad = '$modalidad' AND periodo = '$periodo'");

				//select * from tercero where id_curso IN (7, 8, 13) AND modalidad = 'Turismo' AND estado = 1;


				$stmt -> bindParam(":".$item, $valor1, PDO::PARAM_INT);
				$stmt -> bindParam(":".$item, $valor2, PDO::PARAM_INT);
				$stmt -> bindParam(":".$item, $valor3, PDO::PARAM_INT);


				$stmt -> execute();

				return $stmt -> fetchAll();


			}else if($item != null && $verifica == true && $valor4 != 0){


				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item IN ($valor1, $valor2, $valor3, $valor4) AND estado = 1 AND modalidad = '$modalidad' AND periodo = '$periodo'");

				//$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id_curso >= $valor1 OR id_curso <= $valor2 OR id_curso <= $valor3 OR id_curso <= $valor4 AND modalidad = $modalidad AND estado = 1");

				$stmt -> bindParam(":".$item, $valor1, PDO::PARAM_STR);
				$stmt -> bindParam(":".$item, $valor2, PDO::PARAM_STR);
				$stmt -> bindParam(":".$item, $valor3, PDO::PARAM_STR);
				$stmt -> bindParam(":".$item, $valor4, PDO::PARAM_STR);


				$stmt -> execute();

				return $stmt -> fetchAll();


			}else{

				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

				$stmt -> execute();

				return $stmt -> fetchAll();

			}

			$stmt -> close();

			$stmt = null;
		}


		/*============================================= 
		COPIAR SABERES CIENTIFICA            
		=============================================*/

		static public function mdlCopiarSaberesCientifica($tabla, $curso, $datos, $periodo){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_cientifica = :saberes_cientifica WHERE periodo = '$periodo' AND id_curso = :id_curso");

			$stmt->bindParam(":saberes_cientifica", $datos["saberes_cientifica"], PDO::PARAM_STR);
			$stmt->bindParam(":id_curso", $datos["id_curso"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;


		}


		/*=============================================
		COPIAR SABERES SOCIALES            
		=============================================*/

		static public function mdlCopiarSaberesSociales($tabla, $curso, $datos, $periodo){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_sociales = :saberes_sociales WHERE periodo = '$periodo' AND id_curso = :id_curso");

			$stmt->bindParam(":saberes_sociales", $datos["saberes_sociales"], PDO::PARAM_STR);
			$stmt->bindParam(":id_curso", $datos["id_curso"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;


		}

		/*=============================================
		COPIAR SABERES LENGUA            
		=============================================*/

		static public function mdlCopiarSaberesLengua($tabla, $curso, $datos, $periodo){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_lengua = :saberes_lengua WHERE periodo = '$periodo' AND id_curso = :id_curso");

			$stmt->bindParam(":saberes_lengua", $datos["saberes_lengua"], PDO::PARAM_STR);
			$stmt->bindParam(":id_curso", $datos["id_curso"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;


		}


		/*=============================================
		COPIAR SABERES MATEMATICA            
		=============================================*/

		static public function mdlCopiarSaberesMatematica($tabla, $curso, $datos, $periodo){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_matematica = :saberes_matematica WHERE periodo = '$periodo' AND id_curso = :id_curso");

			$stmt->bindParam(":saberes_matematica", $datos["saberes_matematica"], PDO::PARAM_STR);
			$stmt->bindParam(":id_curso", $datos["id_curso"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;


		}


		/*=============================================
		COPIAR SABERES INGLES            
		=============================================*/

		static public function mdlCopiarSaberesIngles($tabla, $curso, $datos, $periodo){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_ingles = :saberes_ingles WHERE periodo = '$periodo' AND id_curso = :id_curso");

			$stmt->bindParam(":saberes_ingles", $datos["saberes_ingles"], PDO::PARAM_STR);
			$stmt->bindParam(":id_curso", $datos["id_curso"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;


		}


		/*=============================================
		COPIAR SABERES EDUCACIÓN FÍSICA            
		=============================================*/

		static public function mdlCopiarSaberesFisica($tabla, $curso, $datos, $periodo){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_fisica = :saberes_fisica WHERE periodo = '$periodo' AND id_curso = :id_curso");

			$stmt->bindParam(":saberes_fisica", $datos["saberes_fisica"], PDO::PARAM_STR);
			$stmt->bindParam(":id_curso", $datos["id_curso"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;


		}


		/*=============================================
		COPIAR SABERES EDUCACIÓN ARTÍSTICA            
		=============================================*/

		static public function mdlCopiarSaberesArtistica($tabla, $curso, $datos, $periodo){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_artistica = :saberes_artistica WHERE periodo = '$periodo' AND id_curso = :id_curso");

			$stmt->bindParam(":saberes_artistica", $datos["saberes_artistica"], PDO::PARAM_STR);
			$stmt->bindParam(":id_curso", $datos["id_curso"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;


		}


		/*=============================================
		COPIAR SABERES EVE           
		=============================================*/

		static public function mdlCopiarSaberesEve($tabla, $curso, $datos, $periodo){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_eve = :saberes_eve WHERE periodo = '$periodo' AND id_curso = :id_curso");

			$stmt->bindParam(":saberes_eve", $datos["saberes_eve"], PDO::PARAM_STR);
			$stmt->bindParam(":id_curso", $datos["id_curso"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;


		}		



		/*=============================================
		COPIAR SABERES ANTROPOLOGIA 3 (SOCIALES)           
		=============================================*/

		static public function mdlCopiarSaberesAntropologia3($tabla, $datos, $periodo){


			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_antropologia3 = :saberes_antropologia3 WHERE periodo = '$periodo' AND id_curso >= :id_curso1 AND id_curso <= :id_curso2");

			$stmt->bindParam(":saberes_antropologia3", $datos["saberes_antropologia3"], PDO::PARAM_STR);
			$stmt->bindParam(":id_curso1", $datos["id_curso1"], PDO::PARAM_INT);
			$stmt->bindParam(":id_curso2", $datos["id_curso2"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;


		}


		/*=============================================
		COPIAR SABERES ANTROPOLOGIA 4 (SOCIALES)           
		=============================================*/

		static public function mdlCopiarSaberesAntropologia4($tabla, $datos, $periodo){


			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_antropologia4 = :saberes_antropologia4 WHERE periodo = '$periodo' AND id_curso >= :id_curso1 AND id_curso <= :id_curso2");

			$stmt->bindParam(":saberes_antropologia4", $datos["saberes_antropologia4"], PDO::PARAM_STR);
			$stmt->bindParam(":id_curso1", $datos["id_curso1"], PDO::PARAM_INT);
			$stmt->bindParam(":id_curso2", $datos["id_curso2"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;


		}


		/*=============================================
		COPIAR SABERES COMUNICACION (SOCIALES)           
		=============================================*/

		static public function mdlCopiarSaberesComunicacion($tabla, $datos, $periodo){


			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_comunicacion = :saberes_comunicacion WHERE periodo = '$periodo' AND id_curso >= :id_curso1 AND id_curso <= :id_curso2");

			$stmt->bindParam(":saberes_comunicacion", $datos["saberes_comunicacion"], PDO::PARAM_STR);
			$stmt->bindParam(":id_curso1", $datos["id_curso1"], PDO::PARAM_INT);
			$stmt->bindParam(":id_curso2", $datos["id_curso2"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;


		}		


		/*=============================================
		COPIAR SABERES PROYECTO (SOCIALES)           
		=============================================*/

		static public function mdlCopiarSaberesProyecto($tabla, $datos, $periodo){


			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_proyecto = :saberes_proyecto WHERE periodo = '$periodo' AND id_curso >= :id_curso1 AND id_curso <= :id_curso2");

			$stmt->bindParam(":saberes_proyecto", $datos["saberes_proyecto"], PDO::PARAM_STR);
			$stmt->bindParam(":id_curso1", $datos["id_curso1"], PDO::PARAM_INT);
			$stmt->bindParam(":id_curso2", $datos["id_curso2"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;


		}		

		/*=============================================
		COPIAR SABERES CONOCIMIENTO (SOCIALES)           
		=============================================*/

		static public function mdlCopiarSaberesConocimiento($tabla, $datos, $periodo){


			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_conocimiento = :saberes_conocimiento WHERE periodo = '$periodo' AND id_curso >= :id_curso1 AND id_curso <= :id_curso2");

			$stmt->bindParam(":saberes_conocimiento", $datos["saberes_conocimiento"], PDO::PARAM_STR);
			$stmt->bindParam(":id_curso1", $datos["id_curso1"], PDO::PARAM_INT);
			$stmt->bindParam(":id_curso2", $datos["id_curso2"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;


		}		
		
		
		/*=============================================
		COPIAR SABERES PROBLEMATICA (SOCIALES)           
		=============================================*/

		static public function mdlCopiarSaberesProblematica($tabla, $datos, $periodo){


			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_problematica = :saberes_problematica WHERE periodo = '$periodo' AND id_curso >= :id_curso1 AND id_curso <= :id_curso2");

			$stmt->bindParam(":saberes_problematica", $datos["saberes_problematica"], PDO::PARAM_STR);
			$stmt->bindParam(":id_curso1", $datos["id_curso1"], PDO::PARAM_INT);
			$stmt->bindParam(":id_curso2", $datos["id_curso2"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;


		}	
		
		
		/*=============================================
		COPIAR SABERES QUIMICA (NATURALES)           
		=============================================*/

		static public function mdlCopiarSaberesQuimica($tabla, $datos, $periodo){


			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_quimica = :saberes_quimica WHERE periodo = '$periodo' AND id_curso >= :id_curso1 OR id_curso <= :id_curso2");

			$stmt->bindParam(":saberes_quimica", $datos["saberes_quimica"], PDO::PARAM_STR);
			$stmt->bindParam(":id_curso1", $datos["id_curso1"], PDO::PARAM_INT);
			$stmt->bindParam(":id_curso2", $datos["id_curso2"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;


		}		


		/*=============================================
		COPIAR SABERES TIERRA 1 (NATURALES)           
		=============================================*/

		static public function mdlCopiarSaberesTierra1($tabla, $datos, $periodo){


			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_tierra1 = :saberes_tierra1 WHERE periodo = '$periodo' AND id_curso >= :id_curso1 OR id_curso <= :id_curso2");

			$stmt->bindParam(":saberes_tierra1", $datos["saberes_tierra1"], PDO::PARAM_STR);
			$stmt->bindParam(":id_curso1", $datos["id_curso1"], PDO::PARAM_INT);
			$stmt->bindParam(":id_curso2", $datos["id_curso2"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;


		}	


		/*=============================================
		COPIAR SABERES FISICA  (NATURALES)           
		=============================================*/

		static public function mdlCopiarSaberesFisicao($tabla, $datos, $periodo){


			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_fisicao = :saberes_fisicao WHERE periodo = '$periodo' AND id_curso >= :id_curso1 OR id_curso <= :id_curso2");

			$stmt->bindParam(":saberes_fisicao", $datos["saberes_fisicao"], PDO::PARAM_STR);
			$stmt->bindParam(":id_curso1", $datos["id_curso1"], PDO::PARAM_INT);
			$stmt->bindParam(":id_curso2", $datos["id_curso2"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;


		}	


		/*=============================================
		COPIAR SABERES BIOTECNOLOGIA (NATURALES)           
		=============================================*/

		static public function mdlCopiarSaberesBiotecnologia($tabla, $datos, $periodo){


			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_biotecnologia = :saberes_biotecnologia WHERE periodo = '$periodo' AND id_curso >= :id_curso1 OR id_curso <= :id_curso2");

			$stmt->bindParam(":saberes_biotecnologia", $datos["saberes_biotecnologia"], PDO::PARAM_STR);
			$stmt->bindParam(":id_curso1", $datos["id_curso1"], PDO::PARAM_INT);
			$stmt->bindParam(":id_curso2", $datos["id_curso2"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;


		}	
		
		
		/*=============================================
		COPIAR SABERES CIENCIAS (NATURALES)           
		=============================================*/

		static public function mdlCopiarSaberesCiencias($tabla, $datos, $periodo){


			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_ciencias = :saberes_ciencias WHERE periodo = '$periodo' AND id_curso >= :id_curso1 OR id_curso <= :id_curso2");

			$stmt->bindParam(":saberes_ciencias", $datos["saberes_ciencias"], PDO::PARAM_STR);
			$stmt->bindParam(":id_curso1", $datos["id_curso1"], PDO::PARAM_INT);
			$stmt->bindParam(":id_curso2", $datos["id_curso2"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;


		}	
		
		
		/*=============================================
		COPIAR SABERES TIERRA 2 (NATURALES)           
		=============================================*/

		static public function mdlCopiarSaberesTierra2($tabla, $datos, $periodo){


			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_tierra2 = :saberes_tierra2 WHERE periodo = '$periodo' AND id_curso >= :id_curso1 OR id_curso <= :id_curso2");

			$stmt->bindParam(":saberes_tierra2", $datos["saberes_tierra2"], PDO::PARAM_STR);
			$stmt->bindParam(":id_curso1", $datos["id_curso1"], PDO::PARAM_INT);
			$stmt->bindParam(":id_curso2", $datos["id_curso2"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;


		}		






		/*=============================================
		EDITAR INFORME CIENTIFICA            
		=============================================*/

		static public function mdlEditarInformeCientifica($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_cientifica = :saberes_cientifica, aprecia_cientifica = :aprecia_cientifica, asistencia_cientifica = :asistencia_cientifica, observa_cientifica = :observa_cientifica, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_cientifica", $datos["saberes_cientifica"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_cientifica", $datos["aprecia_cientifica"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_cientifica", $datos["asistencia_cientifica"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_cientifica", $datos["observa_cientifica"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}


		/*=============================================
		EDITAR INFORME SOCIALES            
		=============================================*/

		static public function mdlEditarInformeSociales($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_sociales = :saberes_sociales, aprecia_sociales = :aprecia_sociales, asistencia_sociales = :asistencia_sociales, observa_sociales = :observa_sociales, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_sociales", $datos["saberes_sociales"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_sociales", $datos["aprecia_sociales"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_sociales", $datos["asistencia_sociales"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_sociales", $datos["observa_sociales"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}


		/*=============================================
		EDITAR INFORME LENGUA            
		=============================================*/

		static public function mdlEditarInformeLengua($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_lengua = :saberes_lengua, aprecia_lengua = :aprecia_lengua, asistencia_lengua = :asistencia_lengua, observa_lengua = :observa_lengua, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_lengua", $datos["saberes_lengua"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_lengua", $datos["aprecia_lengua"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_lengua", $datos["asistencia_lengua"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_lengua", $datos["observa_lengua"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}


		/*=============================================
		EDITAR INFORME MATEMATICA            
		=============================================*/

		static public function mdlEditarInformeMatematica($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_matematica = :saberes_matematica, aprecia_matematica = :aprecia_matematica, asistencia_matematica = :asistencia_matematica, observa_matematica = :observa_matematica, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_matematica", $datos["saberes_matematica"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_matematica", $datos["aprecia_matematica"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_matematica", $datos["asistencia_matematica"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_matematica", $datos["observa_matematica"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}


		/*=============================================
		EDITAR INFORME INGLES            
		=============================================*/

		static public function mdlEditarInformeIngles($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_ingles = :saberes_ingles, aprecia_ingles = :aprecia_ingles, asistencia_ingles = :asistencia_ingles, observa_ingles = :observa_ingles, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_ingles", $datos["saberes_ingles"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_ingles", $datos["aprecia_ingles"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_ingles", $datos["asistencia_ingles"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_ingles", $datos["observa_ingles"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}

		/*=============================================
		EDITAR INFORME EDUCACIÓN FÍSICA            
		=============================================*/

		static public function mdlEditarInformeFisica($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_fisica = :saberes_fisica, aprecia_fisica = :aprecia_fisica, asistencia_fisica = :asistencia_fisica, observa_fisica = :observa_fisica, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_fisica", $datos["saberes_fisica"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_fisica", $datos["aprecia_fisica"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_fisica", $datos["asistencia_fisica"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_fisica", $datos["observa_fisica"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}


		/*=============================================
		EDITAR INFORME EDUCACIÓN ARTÍSTICA            
		=============================================*/

		static public function mdlEditarInformeArtistica($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_artistica = :saberes_artistica, aprecia_artistica = :aprecia_artistica, asistencia_artistica = :asistencia_artistica, observa_artistica = :observa_artistica, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_artistica", $datos["saberes_artistica"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_artistica", $datos["aprecia_artistica"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_artistica", $datos["asistencia_artistica"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_artistica", $datos["observa_artistica"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}

		/*=============================================
		EDITAR INFORME EVE           
		=============================================*/

		static public function mdlEditarInformeEve($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_eve = :saberes_eve, aprecia_eve = :aprecia_eve, asistencia_eve = :asistencia_eve, observa_eve = :observa_eve, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_eve", $datos["saberes_eve"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_eve", $datos["aprecia_eve"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_eve", $datos["asistencia_eve"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_eve", $datos["observa_eve"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}		


		/*=============================================
		EDITAR INFORME ANTROPOLOGIA 3 (SOCIALES)            
		=============================================*/

		static public function mdlEditarInformeAntropologia3($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_antropologia3 = :saberes_antropologia3, aprecia_antropologia3 = :aprecia_antropologia3, asistencia_antropologia3 = :asistencia_antropologia3, observa_antropologia3 = :observa_antropologia3, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_antropologia3", $datos["saberes_antropologia3"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_antropologia3", $datos["aprecia_antropologia3"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_antropologia3", $datos["asistencia_antropologia3"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_antropologia3", $datos["observa_antropologia3"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}


		/*=============================================
		EDITAR INFORME ANTROPOLOGIA 4 (SOCIALES)            
		=============================================*/

		static public function mdlEditarInformeAntropologia4($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_antropologia4 = :saberes_antropologia4, aprecia_antropologia4 = :aprecia_antropologia4, asistencia_antropologia4 = :asistencia_antropologia4, observa_antropologia4 = :observa_antropologia4, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_antropologia4", $datos["saberes_antropologia4"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_antropologia4", $datos["aprecia_antropologia4"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_antropologia4", $datos["asistencia_antropologia4"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_antropologia4", $datos["observa_antropologia4"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}		



		/*=============================================
		EDITAR INFORME COMUNICACION (SOCIALES)            
		=============================================*/

		static public function mdlEditarInformeComunicacion($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_comunicacion = :saberes_comunicacion, aprecia_comunicacion = :aprecia_comunicacion, asistencia_comunicacion = :asistencia_comunicacion, observa_comunicacion = :observa_comunicacion, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_comunicacion", $datos["saberes_comunicacion"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_comunicacion", $datos["aprecia_comunicacion"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_comunicacion", $datos["asistencia_comunicacion"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_comunicacion", $datos["observa_comunicacion"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}		


		/*=============================================
		EDITAR INFORME PROYECTO (SOCIALES)            
		=============================================*/

		static public function mdlEditarInformeProyecto($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_proyecto = :saberes_proyecto, aprecia_proyecto = :aprecia_proyecto, asistencia_proyecto = :asistencia_proyecto, observa_proyecto = :observa_proyecto, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_proyecto", $datos["saberes_proyecto"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_proyecto", $datos["aprecia_proyecto"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_proyecto", $datos["asistencia_proyecto"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_proyecto", $datos["observa_proyecto"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}		
		
		
		/*=============================================
		EDITAR INFORME COMUNICACION (SOCIALES)            
		=============================================*/

		static public function mdlEditarInformeConocimiento($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_conocimiento = :saberes_conocimiento, aprecia_conocimiento = :aprecia_conocimiento, asistencia_conocimiento = :asistencia_conocimiento, observa_conocimiento = :observa_conocimiento, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_conocimiento", $datos["saberes_conocimiento"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_conocimiento", $datos["aprecia_conocimiento"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_conocimiento", $datos["asistencia_conocimiento"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_conocimiento", $datos["observa_conocimiento"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}	
		
		
		/*=============================================
		EDITAR INFORME PROBLEMATICA (SOCIALES)            
		=============================================*/

		static public function mdlEditarInformeProblematica($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_problematica = :saberes_problematica, aprecia_problematica = :aprecia_problematica, asistencia_problematica = :asistencia_problematica, observa_problematica = :observa_problematica, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_problematica", $datos["saberes_problematica"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_problematica", $datos["aprecia_problematica"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_problematica", $datos["asistencia_problematica"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_problematica", $datos["observa_problematica"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}	
		
		
		/*=============================================
		EDITAR INFORME QUIMICA (NATURALES)            
		=============================================*/

		static public function mdlEditarInformeQuimica($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_quimica = :saberes_quimica, aprecia_quimica = :aprecia_quimica, asistencia_quimica = :asistencia_quimica, observa_quimica = :observa_quimica, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_quimica", $datos["saberes_quimica"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_quimica", $datos["aprecia_quimica"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_quimica", $datos["asistencia_quimica"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_quimica", $datos["observa_quimica"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}		


		/*=============================================
		EDITAR INFORME TIERRA 1 (NATURALES)            
		=============================================*/

		static public function mdlEditarInformeTierra1($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_tierra1 = :saberes_tierra1, aprecia_tierra1 = :aprecia_tierra1, asistencia_tierra1 = :asistencia_tierra1, observa_tierra1 = :observa_tierra1, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_tierra1", $datos["saberes_tierra1"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_tierra1", $datos["aprecia_tierra1"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_tierra1", $datos["asistencia_tierra1"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_tierra1", $datos["observa_tierra1"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}		
		
		
		/*=============================================
		EDITAR INFORME FISICA (NATURALES)            
		=============================================*/

		static public function mdlEditarInformeFisicao($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_fisicao = :saberes_fisicao, aprecia_fisicao = :aprecia_fisicao, asistencia_fisicao = :asistencia_fisicao, observa_fisicao = :observa_fisicao, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_fisicao", $datos["saberes_fisicao"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_fisicao", $datos["aprecia_fisicao"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_fisicao", $datos["asistencia_fisicao"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_fisicao", $datos["observa_fisicao"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}		
		
		
		/*=============================================
		EDITAR INFORME BIOTECNOLOGIA (NATURALES)            
		=============================================*/

		static public function mdlEditarInformeBiotecnologia($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_biotecnologia = :saberes_biotecnologia, aprecia_biotecnologia = :aprecia_biotecnologia, asistencia_biotecnologia = :asistencia_biotecnologia, observa_biotecnologia = :observa_biotecnologia, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_biotecnologia", $datos["saberes_biotecnologia"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_biotecnologia", $datos["aprecia_biotecnologia"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_biotecnologia", $datos["asistencia_biotecnologia"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_biotecnologia", $datos["observa_biotecnologia"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}	
		
		
		/*=============================================
		EDITAR INFORME CIENCIAS (NATURALES)            
		=============================================*/

		static public function mdlEditarInformeCiencias($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_ciencias = :saberes_ciencias, aprecia_ciencias = :aprecia_ciencias, asistencia_ciencias = :asistencia_ciencias, observa_ciencias = :observa_ciencias, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_ciencias", $datos["saberes_ciencias"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_ciencias", $datos["aprecia_ciencias"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_ciencias", $datos["asistencia_ciencias"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_ciencias", $datos["observa_ciencias"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}		

		/*=============================================
		EDITAR INFORME TIERRA 2 (NATURALES)            
		=============================================*/

		static public function mdlEditarInformeTierra2($tabla, $curso, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET saberes_tierra2 = :saberes_tierra2, aprecia_tierra2 = :aprecia_tierra2, asistencia_tierra2 = :asistencia_tierra2, observa_tierra2 = :observa_tierra2, id_usuario = :id_usuario WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
			$stmt->bindParam(":saberes_tierra2", $datos["saberes_tierra2"], PDO::PARAM_STR);
			$stmt->bindParam(":aprecia_tierra2", $datos["aprecia_tierra2"], PDO::PARAM_STR);
			$stmt->bindParam(":asistencia_tierra2", $datos["asistencia_tierra2"], PDO::PARAM_STR);
			$stmt->bindParam(":observa_tierra2", $datos["observa_tierra2"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}		






		/*=============================================
	    ACTUALIZAR ALUMNO            
		=============================================*/

		static public function mdlActualizarAlumno($tabla, $item1, $valor1, $item2, $valor2){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET $item1 = :$item1 WHERE $item2 = :$item2");

			$stmt -> bindParam(":".$item1, $valor1, PDO::PARAM_STR);
			$stmt -> bindParam(":".$item2, $valor2, PDO::PARAM_STR);

			if ($stmt -> execute()) {
				
				return "ok";

			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}
				
	}