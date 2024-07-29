<?php

	require_once "conexion.php";

	class ModeloAlumnos{


		/*=============================================
		CREAR ALUMNO            
		=============================================*/

		static public function mdlCrearAlumno($tabla, $datos, $moda){

			if ($moda == 1) {
			
				$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(documento, nombre, modalidad, id_curso, periodo) VALUES (:documento, :nombre, :modalidad, :id_curso, :periodo)");

				$stmt->bindParam(":documento", $datos["documento"], PDO::PARAM_STR);
				$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
				$stmt->bindParam(":modalidad", $datos["modalidad"], PDO::PARAM_STR);
				$stmt->bindParam(":id_curso", $datos["id_curso"], PDO::PARAM_INT);
				$stmt->bindParam(":periodo", $datos["periodo"], PDO::PARAM_STR);				

			}else{

				$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(documento, nombre, id_curso, periodo) VALUES (:documento, :nombre, :id_curso, :periodo)");

				$stmt->bindParam(":documento", $datos["documento"], PDO::PARAM_STR);
				$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
				$stmt->bindParam(":id_curso", $datos["id_curso"], PDO::PARAM_INT);
				$stmt->bindParam(":periodo", $datos["periodo"], PDO::PARAM_STR);
			}

			

			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}

		/*=============================================
		MOSTRAR ALUMNOS
		=============================================*/

		static public function mdlMostrarAlumnos($item, $valor, $tabla){

			if ($item != null) {
				
				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item ORDER BY nombre");

				$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

				$stmt -> execute();

				return $stmt -> fetch();

			}else{

				$periodo = $_SESSION["periodo"];

				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE periodo = '$periodo' ORDER BY nombre");

				$stmt -> execute();

				return $stmt -> fetchAll();

			}

			$stmt -> close();

			$stmt = null;
		}


		/*=============================================
		EDITAR ALUMNO            
		=============================================*/

		static public function mdlEditarAlumno($tabla, $datos, $moda){


			if ($moda == 1) {
			
				$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET documento = :documento, nombre = :nombre, modalidad = :modalidad, id_curso = :curso WHERE id = :id");

				$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
				$stmt->bindParam(":documento", $datos["documento"], PDO::PARAM_STR);
				$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
				$stmt->bindParam(":modalidad", $datos["modalidad"], PDO::PARAM_STR);
				$stmt->bindParam(":curso", $datos["curso"], PDO::PARAM_STR);


			}else{


				$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET documento = :documento, nombre = :nombre, id_curso = :curso WHERE id = :id");

				$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
				$stmt->bindParam(":documento", $datos["documento"], PDO::PARAM_STR);
				$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
				$stmt->bindParam(":curso", $datos["curso"], PDO::PARAM_STR);


			}

			


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}

		/*=============================================
		BORRAR ALUMNO            
		=============================================*/

		static public function mdlBorrarAlumno($tabla, $datos){

			$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

			$stmt -> bindParam(":id", $datos, PDO::PARAM_INT);

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