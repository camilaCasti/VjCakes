<?php

require_once "conexion.php"; 

class ModeloFormulariosAdmin{

    static public function mdlSeleccionarRegistrosAdmin($tabla, $item, $valor){

      if($item==null && $valor == null){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

        $stmt->execute();
  
        return $stmt -> FetchAll();


      }else{

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla where $item = :$item");
        $stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);

        $stmt->execute();
  
        return $stmt -> Fetch();

      }


      $stmt -> close();

      $stmt = null;

    }

    // Actualizar Registro

    static public function mdlActualizarRegistroAdmin($tabla, $datos){

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

    static public function mdlEliminarRegistroAdmin($tabla, $valor){

      $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE email_admin=:email_admin");

      $stmt->bindParam(":email_admin", $valor, PDO::PARAM_STR);

      $stmt->execute();
    }

    static public function mdlRegistroAdmin($tabla, $datos){

      $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre_admin, email_admin, contrasena_admin) VALUES (:nombre_admin, :email_admin, :contrasena_admin)");

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

}