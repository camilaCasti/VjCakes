<?php

require_once "../controlador/formularios.controladoradmin.php";

if(isset($_GET["email"])){

    $item = "email_admin";
    $valor = $_GET["email"];

    $usuarios = ControladorFormulariosAdmin::ctrSeleccionarRegistrosAdmin($item, $valor);

}

?>

<div class="d-flex justify-content-center">
<form method="post">
                <div class="form-group">

                  <div class="input-group">

                  <div class="input-group mb-3">
                  <div class="input-group-prepend">
                   <span class="input-group-text"><i class="fas fa-user"></i></span>
                  </div>
                  <input type="text" class="form-control" value="<?php echo $usuarios["nombre_admin"]; ?>" placeholder="Escriba su nombre" id="nombre" name="actualizarNombre">
                  </div>

                </div>
                <div class="form-group">
                  <div class="input-group">

                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"></i><i class="fas fa-envelope"></i></span>
                  </div>
                  <input type="email" class="form-control" value="<?php echo $usuarios["email_admin"]; ?>" placeholder="Escriba su email" id="email" name="actualizarEmail">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">

                <div class="input-group mb-3">
                <div class="input-group-prepend">
                      <span class="input-group-text"></i><i class="fas fa-lock"></i></span>
                </div>
                <input type="password" class="form-control" placeholder="Escriba su contraseña" id="pwd" name="actualizarPassword">
                <input type="hidden" name="passwordActual" value="<?php echo $usuarios["password"]; ?>">
                <input type="hidden" name="idUsuario" value="<?php echo $usuarios["id"]; ?>">
                </div>
                </div>

                <?php
                $actualizar = new ControladorFormulariosAdmin();
                $actualizar -> ctrActualizarRegistroAdmin();
                ?>

                <button type="submit" class="btn btn-primary">Actualizar</button>
</form>
</div>