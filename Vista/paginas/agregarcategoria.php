<?php

require_once "controladores/categorias.controlador.php";
require_once "modelos/categorias.modelo.php";
require_once "modelos/conexion.php";

?>

<div class="d-flex justify-content-center">
<form method="post">
                <div class="form-group">
                  <label for="nombre">Nombre:</label>

                  <div class="input-group">

                  <div class="input-group mb-3">
                  <div class="input-group-prepend">
                   <span class="input-group-text"><i class="fas fa-user"></i></span>
                  </div>
                  <input type="text" class="form-control" id="nombre" name="registroCategoria">
                  </div>

                <?php 

                    $registro = ControladorCategorias::ctrCategoria();

                    if($registro == "ok"){

                      echo '<script>
                      
                      if (window.history.replaceState){

                          window.history.replaceState( null, null, window.location.href );

                      }
                      
                      </script>';

                      echo '<div class="alert alert-success">La categoria ha sido agregada</div>';
                    }

                ?>

                <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</div>