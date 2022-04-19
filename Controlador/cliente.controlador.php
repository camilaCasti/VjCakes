<?php

class ControladorCliente{

    static public function ctrSeleccionarClientes(){

        $tabla = "cliente";

        $respuesta = ModeloCliente::mdlSeleccionarClientes($tabla);

        return $respuesta;
    }
    
   
   
   
   
    static PUBLIC function ctrIngresoclientes(){

        if(isset($_POST["cliente"])){

            $tabla = "cliente";

            $datos = array("idcliente" == $_POST["idcliente"] &&"documento_cliente" == $_POST["documento_cliente"]&&
            "nombre_cliente" == $_POST["nombre_cliente"]&& "direccion_cliente" == $_POST["direccion_cliente"]&&
            "telefono_cliente" == $_POST["telefono_cliente"]);

            $respuesta = ModeloCliente::mdlSeleccionarClientes($tabla, $datos);

            return $respuesta;

        }
    }


    public function ctrEliminarCliente(){

        if(isset($_POST["eliminarCliente"])){

            $tabla="cliente";
            $valor=$_POST["eliminarCliente"];

            $respuesta = ModeloCliente::mdlEliminarCliente($tabla, $valor);

            if($respuesta == "ok"){

                echo '<script>

                window.location = "index.php?pagina=cliente";
                
                </script>';
            
        }
    }

    }

    static PUBLIC function ctrInsertar(){

        if(isset($_POST["registroNombre"])){
    
            $tabla = "cliente";
    
            $datos = array("documento_cliente" => $_POST["documentocliente"],
                            "nombre_cliente" => $_POST["nombrecliente"],
                            "direccion_cliente" => $_POST["direccioncliente"],
                            "telefono_cliente" => $_POST["telefonocliente"]);
    
            $respuesta = ModeloCliente::mdlInsertar($tabla, $datos);
    
            return $respuesta;
    
        }
    }

}