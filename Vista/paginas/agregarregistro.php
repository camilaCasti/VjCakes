<?php

require_once "../Controlador/formularios.controladoradmin.php";
require_once "../Modelo/formularios.modeloadmin.php";

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
                  <input type="text" class="form-control" id="nombre" name="registroNombre">
                  </div>

                </div>
                <div class="form-group">
                  <label for="email">Correo electrónico:</label>
                  <div class="input-group">

                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"></i><i class="fas fa-envelope"></i></span>
                  </div>
                  <input type="email" class="form-control" id="email" name="registroEmail">
                  </div>
                </div>
                <div class="form-group">
                  <label for="pwd">Contraseña:</label>
                  <div class="input-group">

                <div class="input-group mb-3">
                <div class="input-group-prepend">
                      <span class="input-group-text"></i><i class="fas fa-lock"></i></span>
                </div>
                <input type="password" class="form-control" id="pwd" name="registroPassword">
                </div>
                </div>

                <?php 

                    $registro = ControladorFormulariosAdmin::ctrRegistroAdmin();

                    if($registro == "ok"){

                      echo '<script>
                      
                      if (window.history.replaceState){

                          window.history.replaceState( null, null, window.location.href );

                      }
                      
                      </script>';

                      echo '<div class="alert alert-success">El usuario ha sido registrado</div>';
                    }

                ?>

                <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</div>