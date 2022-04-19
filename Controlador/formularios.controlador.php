<?php

class ControladorFormularios{

// REGISTRO

static PUBLIC function ctrRegistro(){

    if(isset($_POST["registroNombre"])){

        $tabla = "usuario";

        $datos = array("nombre_usuario" => $_POST["registroNombre"],
                        "email_usuario" => $_POST["registroEmail"],
                        "contrasena_usuario" => $_POST["registroPassword"]);

        $respuesta = ModeloFormularios::mdlRegistro($tabla, $datos);

        return $respuesta;

    }
}

PUBLIC function ctrIngreso(){

    if(isset($_POST["ingresoEmail"])){

        $tabla= "usuario";
        $item="email_usuario";
        $valor=$_POST["ingresoEmail"];
        
        $respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);

        if($respuesta["email_usuario"]== $_POST["ingresoEmail"] && $respuesta["contrasena_usuario"] == $_POST["ingresoPassword"]){

            $_SESSION["validarIngreso"] = "ok";

            echo '<script>
                  
            if (window.history.replaceState){

                window.history.replaceState( null, null, window.location.href );

            }

            window.location = "../Vista/PSCINPusuario.php";
            
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

}

?>