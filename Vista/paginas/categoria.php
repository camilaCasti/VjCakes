<?php
    
    if(isset($_SESSION["validarIngreso"])){

      if($_SESSION["validarIngreso"] != "ok"){

        echo '<script>window.location = "index.php?pagina=ingreso";</script>';
        return;

      }

    }else{

      echo '<script>window.location = "index.php?pagina=ingreso";</script>';
      return;

    }

    $usuarioscategoria=ControladorCategorias::ctrSeleccionarCategoria(null, null);

?>

<a href="index.php?pagina=agregarcategoria" class="btn btn-success">Agregar</a>

<table class="table table-striped">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>

                <?php foreach ($usuarioscategoria as $key => $value): ?>

                <tr>
                    <td><?php echo $value["idcategoria"]; ?></td>
                    <td><?php echo $value["nombre_categoria"]; ?></td>
                    <td>

                    <div class="btn-group">
                    <div class="px-1">
                    
                    <a href="index.php?pagina=editarcategoria&idcategoria=<?php echo $value["idcategoria"]; ?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>

                    </div>

                    <form method="post">

                    <input type="hidden" value="<?php echo $value["idcategoria"]; ?>" name="eliminarCategoria">

                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>

                    
                    <?php
                        $eliminar = new ControladorCategorias();
                        $eliminar -> ctrEliminarCategoria();
                    ?>

                    </form>


                    </div>

                    </td>
                  </tr>

                <?php endforeach ?>

                </tbody>
</table>