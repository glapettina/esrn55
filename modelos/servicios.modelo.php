<?php

	require_once "conexion.php";

	class ModeloServicios{


		/*=============================================
		CREAR SERVICIO            
		=============================================*/

		static public function mdlCrearServicio($tabla, $datos){

			$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(fecha_servicio, id_netbook, problema, solucion) VALUES (:fecha_servicio, :id_netbook, :problema, :solucion)");

			
			$stmt->bindParam(":fecha_servicio", $datos["fecha_servicio"], PDO::PARAM_STR);
			$stmt->bindParam(":id_netbook", $datos["id_netbook"], PDO::PARAM_INT);
			$stmt->bindParam(":problema", $datos["problema"], PDO::PARAM_STR);
			$stmt->bindParam(":solucion", $datos["solucion"], PDO::PARAM_STR);

			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}

		/*=============================================
		MOSTRAR SERVICIOS
		=============================================*/

		static public function mdlMostrarServicios($item, $valor, $tabla){

			if ($item != null) {
				
				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

				$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

				$stmt -> execute();

				return $stmt -> fetch();

			}else{

				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

				$stmt -> execute();

				return $stmt -> fetchAll();

			}

			$stmt -> close();

			$stmt = null;
		}


		/*=============================================
		EDITAR SERVICIO            
		=============================================*/

		static public function mdlEditarServicio($tabla, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET problema = :problema, solucion = :solucion WHERE id = :id");

			$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);			
			$stmt->bindParam(":problema", $datos["problema"], PDO::PARAM_STR);
			$stmt->bindParam(":solucion", $datos["solucion"], PDO::PARAM_STR);


			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;

		}

		/*=============================================
		BORRAR SERVICIO            
		=============================================*/

		static public function mdlBorrarServicio($tabla, $datos){

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
	    ACTUALIZAR SERVICIO            
		=============================================*/

		static public function mdlActualizarServicio($tabla, $item1, $valor1, $item2, $valor2){

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



		/*=============================================
	    LISTAR HISTORIAL 
		=============================================*/

		static public function mdlHistorial($tabla, $itemServi, $valorServi){


			
				
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $itemServi = :$itemServi ORDER BY fecha_servicio");

			$stmt -> bindParam(":".$itemServi, $valorServi, PDO::PARAM_STR);
			
			
			

			$stmt -> execute();

			return $stmt -> fetchAll();


			$stmt -> close();
			$stmt = null;

		}

	}