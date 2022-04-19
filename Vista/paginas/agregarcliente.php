<?php

require_once "../controlador/cliente.controlador.php";
require_once "../modelo/cliente.modelo.php";
require_once "../modelo/conexion.php";

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

                  <div class="form-group">
                  <label for="direccion">Dirección:</label>

                  <div class="input-group">

                  <div class="input-group mb-3">
                  <div class="input-group-prepend">
                   <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                  </div>
                  <input type="text" class="form-control" id="direccion" name="registroCategoria">
                  </div>
                  <div class="form-group">

                  <label for="telefono">Teléfono:</label>

                  <div class="input-group">

                  <div class="input-group mb-3">
                  <div class="input-group-prepend">
                   <span class="input-group-text"><i class="fas fa-phone-alt"></i></i></span>
                  </div>
                  <input type="text" class="form-control" id="telefono" name="registroCategoria">
                  </div>

                <?php 

                    $registro = ControladorCliente::ctrInsertar();

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