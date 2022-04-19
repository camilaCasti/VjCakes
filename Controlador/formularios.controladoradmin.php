<?php

class ControladorFormulariosAdmin{

    static public function ctrSeleccionarRegistrosAdmin($item, $valor){

        $tabla = "usuario_admin";

        $respuesta = ModeloFormulariosAdmin::mdlSeleccionarRegistrosAdmin($tabla, $item, $valor);

        return $respuesta;
    }

    PUBLIC function ctrIngresoAdmin(){

        if(isset($_POST["ingresoEmail"])){

            $tabla= "usuario_admin";
            $item="email_admin";
            $valor=$_POST["ingresoEmail"];
            
            $respuesta = ModeloFormulariosAdmin::mdlSeleccionarRegistrosAdmin($tabla, $item, $valor);

            if($respuesta["email_admin"]== $_POST["ingresoEmail"] && $respuesta["contrasena_admin"] == $_POST["ingresoPassword"]){

                $_SESSION["validarIngreso"] = "ok";

                echo '<script>
                      
                if (window.history.replaceState){

                    window.history.replaceState( null, null, window.location.href );

                }

                window.location = "index.php?pagina=registroadmin";
                
                </script>';

            }else{

                echo '<script>
                      
                if (window.history.replaceState){

                    window.history.replaceState( null, null, window.location.href );

                }
                
                </script>';

                echo '<div class="alert alert-danger">El usuario o la contraseña con incorrectos</div>';

            }


        }
    }

    // Actualizar Registro

    static public function ctrActualizarRegistroAdmin(){

        if(isset($_POST["actualizarEmail"])){

            if($_POST["actualizarPassword"] != ""){

                $password = $_POST["actualizarPassword"];

            }else{

                $password = $_POST["passwordActual"];

            }

            $tabla = "usuario_admin";

            $datos = array( "nombre_admin" => $_POST["actualizarNombre"],
                            "email_admin" => $_POST["actualizarEmail"],
                            "contrasena_admin" => $password);

            $respuesta = ModeloFormulariosAdmin::mdlActualizarRegistroAdmin($tabla, $datos);

            if($respuesta == "ok"){

                echo '<script>
                      
                if (window.history.replaceState){

                    window.history.replaceState( null, null, window.location.href );

                }
                
                </script>';

                echo '<div class="alert alert-success">El usuario ha sido actualizado</div>';

            }

        }

    }

    // Eliminar Registro

    public function ctrEliminarRegistroAdmin(){

        if(isset($_POST["eliminarRegistro"])){

            $tabla="usuario_admin";
            $valor=$_POST["eliminarRegistro"];

            $respuesta = ModeloFormulariosAdmin::mdlEliminarRegistroAdmin($tabla, $valor);

            if($respuesta == "ok"){

                echo '<script>

                window.location = "index.php?pagina=registroadmin";
                
                </script>';
            
        }
    }

    }

    static PUBLIC function ctrRegistroAdmin(){

        if(isset($_POST["registroNombre"])){
    
            $tabla = "usuario_admin";
    
            $datos = array("nombre_admin" => $_POST["registroNombre"],
                            "email_admin" => $_POST["registroEmail"],
                            "contrasena_admin" => $_POST["registroPassword"]);
    
            $respuesta = ModeloFormulariosAdmin::mdlRegistroAdmin($tabla, $datos);
    
            return $respuesta;
    
        }
    }

}