<?php

  require_once "../Controlador/formularios.controladoradmin.php";
  require_once "../Modelo/formularios.modeloadmin.php";
    
    if(isset($_SESSION["validarIngreso"])){

      if($_SESSION["validarIngreso"] != "ok"){

        echo '<script>window.location = "index.php?pagina=ingreso";</script>';
        return;

      }

    }else{

      echo '<script>window.location = "index.php?pagina=ingreso";</script>';
      return;

    }

    $usuarios=ControladorFormulariosAdmin::ctrSeleccionarRegistrosAdmin(null, null);


?>

<a href="index.php?pagina=agregarregistro" class="btn btn-success">Agregar</i></i></a>

<table class="table table-striped">
                <thead>
                  <tr>
                    <th>Email</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>

                <?php foreach ($usuarios as $key => $value): ?>

                <tr>
                    <td><?php echo $value["email_admin"]; ?></td>
                    <td><?php echo $value["nombre_admin"]; ?></td>
                    <td>
                    <div class="btn-group">
                    <div class="px-1">
                    
                    <a href="index.php?pagina=editar&email=<?php echo $value["email_admin"]; ?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>

                    </div>

                    <form method="post">

                    <input type="hidden" value="<?php echo $value["email_admin"]; ?>" name="eliminarRegistro">

                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>

                    <?php
                        $eliminar = new ControladorFormulariosAdmin();
                        $eliminar -> ctrEliminarRegistroAdmin();
                    ?>

                    </form>


                    </div>

                    </td>
                  </tr>

                <?php endforeach ?>

                </tbody>
</table>