<?php

require_once "conexion.php";
require_once "../controlador/categorias.controlador.php";

class ModeloCategorias{

    static public function mdlSeleccionarCategoria($tabla, $item, $valor){

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
    static public function mdlCategoria($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre_categoria) VALUES (:nombre_categoria)");
  
        $stmt->bindParam(":nombre_categoria", $datos["nombre_categoria"], PDO::PARAM_STR);

        $stmt->execute();

  
      }

      static public function mdlActualizarCategoria($tabla, $datos){

        require_once "vistas/paginas/editarcategoria.php";

        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre_categoria=:nombre_categoria WHERE idcategoria=:idcategoria");
  
        $stmt->bindParam(":nombre_categoria", $datos["nombre_categoria"], PDO::PARAM_STR);
        $stmt->bindParam(":idcategoria", $datos["idcategoria"], PDO::PARAM_STR);

        $stmt->execute();

        $stmt->close();

      }

      static public function mdlEliminarCategoria($tabla, $valor){

        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE idcategoria=:idcategoria");
  
        $stmt->bindParam(":idcategoria", $valor, PDO::PARAM_INT);
  
        $stmt->execute();
      }
  

}