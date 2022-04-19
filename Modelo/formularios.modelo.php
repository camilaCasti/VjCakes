<?php

require_once "conexion.php"; 

class ModeloFormularios{

    static public function mdlRegistro($tabla, $datos){

      $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre_usuario, email_usuario, contrasena_usuario) VALUES (:nombre_usuario, :email_usuario, :contrasena_usuario)");

      $stmt->bindParam(":nombre_usuario", $datos["nombre_usuario"], PDO::PARAM_STR);
      $stmt->bindParam(":email_usuario", $datos["email_usuario"], PDO::PARAM_STR);
      $stmt->bindParam(":contrasena_usuario", $datos["contrasena_usuario"], PDO::PARAM_STR);

      if($stmt->execute()){

        return "ok";

      }else{

        print_r(Conexion::conectar()->errorInfo());

      }

      $stmt->close();

      $stmt = null;

    }

    static public function mdlSeleccionarRegistros($tabla, $item, $valor){

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

}