<?php

require_once "conexion.php"; 

class ModeloCliente{

    static public function mdlSeleccionarClientes($tabla){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

        $stmt->execute();
  
        return $stmt -> FetchAll();


    }

    // Actualizar Registro

    static public function mdlActualizarRegistro($tabla, $datos){

      $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET
      nombre_admin=:nombre_admin, email_admin=:email_admin, contrasena_admin=:contrasena_admin WHERE email_admin =:email_admin");

      $stmt->bindParam(":nombre_admin", $datos["nombre_admin"], PDO::PARAM_STR);
      $stmt->bindParam(":email_admin", $datos["email_admin"], PDO::PARAM_STR);
      $stmt->bindParam(":contrasena_admin", $datos["contrasena_admin"], PDO::PARAM_STR);

      if($stmt->execute()){

        return "ok";

      }else{

        print_r(Conexion::conectar()->errorInfo());

      }

      $stmt = null;

    }

    // Eliminar registro

    static public function mdlEliminarCliente($tabla, $valor){

      $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE idcliente=:idcliente");

      $stmt->bindParam(":idcliente", $valor, PDO::PARAM_STR);

      if($stmt->execute()){

        return "ok";

      }else{

        print_r(Conexion::conectar()->errorInfo());

      }

      $stmt->close();

      $stmt = null;

    }

    static public function mdlInsertar($tabla, $datos){

      $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(documento_cliente,nombre_cliente, direccion_cliente,telefono_cliente) 
      VALUES (:documento_cliente, :nombre_cliente, :direccion_cliente, :telefono_cliente)");

      $stmt->bindParam(":documento_cliente", $datos["documento_cliente"], PDO::PARAM_STR);
      $stmt->bindParam(":nombre_cliente", $datos["nombre_cliente"], PDO::PARAM_STR);
      $stmt->bindParam(":direccion_cliente", $datos["direccion_cliente"], PDO::PARAM_STR);
      $stmt->bindParam(":telefono_cliente", $datos["telefono_cliente"], PDO::PARAM_STR);

      if($stmt->execute()){

        return "ok";

      }else{

        print_r(Conexion::conectar()->errorInfo());

      }

      $stmt = null;

    }

}