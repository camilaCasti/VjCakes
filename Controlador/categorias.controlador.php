<?php

require_once "../modelo/categorias.modelo.php";

class ControladorCategorias{

    static PUBLIC function ctrCategoria(){

        if(isset($_POST["registroCategoria"])){

            $tabla = "categoria";

            $datos = array("nombre_categoria" => $_POST["registroCategoria"]);

            $respuesta = ModeloCategorias::mdlCategoria($tabla, $datos);

            return $respuesta;

        }
    }

    static public function ctrSeleccionarCategoria($item, $valor){

        $tabla = "categoria";

        $respuesta = ModeloCategorias::mdlSeleccionarCategoria($tabla, $item, $valor);

        return $respuesta;
    }

    public function ctrActualizarCategoria(){

        require_once "vistas/paginas/editarcategoria.php";

        if (isset($_POST["actualizarNombre"])){

            $tabla = "categoria";

            $datos = array( "idcategoria" => $_POST["idCategoria"],
                            "nombre_categoria"=>$_POST["actualizarNombre"]);

            $respuesta = ModeloCategorias::mdlActualizarCategoria($tabla, $datos);

            if ($respuesta=="ok"){

                echo '<script>
                      
                if (window.history.replaceState){

                    window.history.replaceState( null, null, window.location.href );

                }
                
                </script>';

                echo '<div class="alert alert-success">La categoria ha sido actualizada</div>';
              }
            }

        }

        public function ctrEliminarCategoria(){

            if(isset($_POST["eliminarCategoria"])){
    
                $tabla="categoria";
                $valor=$_POST["eliminarCategoria"];
    
                $respuesta = ModeloCategorias::mdlEliminarCategoria($tabla, $valor);
    
                if($respuesta == "ok"){
    
                    echo '<script>
    
                    window.location = "index.php?pagina=categoria";
                    
                    </script>';
                
            }
        }
    
        } 

}

    
