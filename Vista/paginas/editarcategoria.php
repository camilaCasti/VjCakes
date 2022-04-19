<?php

require_once "controladores/categorias.controlador.php";
require_once "modelos/categorias.modelo.php";
require_once "modelos/conexion.php";

if(isset($_GET["idcategoria"])){

  $item = "idcategoria";
  $valor = $_GET["idcategoria"];

  $usuariocategoria = ControladorCategorias::ctrSeleccionarCategoria($item, $valor);

}

?>

<div class="d-flex justify-content-center">
<form method="post">
                <div class="form-group">

                  <div class="input-group">

                  <div class="input-group mb-3">
                  <div class="input-group-prepend">
                   <span class="input-group-text"><i class="fas fa-cheese"></i></span>
                  </div>
                  <input type="hidden" name="idCategoria" value="<?php echo $usuariocategoria["idcategoria"]; ?>">
                  <input typ="text" class="form-control" placeholder="Escriba el nombre" value="<?php  echo $usuariocategoria["nombre_categoria"]; ?>" id="nombre" name="actualizarCategoria">
                  </div>

                <?php

                $actualizarcategoria= new ControladorCategorias();
                $actualizarcategoria->ctrActualizarCategoria();

                ?>

                <button type="submit" class="btn btn-success">Actualizar</button>
</form>
</div>