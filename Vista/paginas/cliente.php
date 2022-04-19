<?php
    
    require_once "../controlador/cliente.controlador.php";
    require_once "../modelo/cliente.modelo.php";

   if(isset($_SESSION["validarIngreso"])){

      if($_SESSION["validarIngreso"] != "ok"){

        echo '<script>window.location = "index.php?pagina=ingreso";</script>';
        return;

      }

    }else{

      echo '<script>window.location = "index.php?pagina=ingreso";</script>';
      return;

    }

    $clientes=ControladorCliente::ctrSeleccionarClientes(null, null);


?>

<a href="index.php?pagina=agregarcliente" class="btn btn-success">Agregar</i></i></a>

<table class="table table-striped">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Documento </th>
                    <th>Nombre</th>
                    <th>Dirección</th>
                    <th>Telefono</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>

                <?php foreach ($clientes as $key => $value): ?>

                <tr>
                    <td><?php echo $value["idcliente"]; ?></td>
                    <td><?php echo $value["documento_cliente"]; ?></td>
                    <td><?php echo $value["nombre_cliente"]; ?></td>
                    <td><?php echo $value["direccion_cliente"]; ?></td>
                    <td><?php echo $value["telefono_cliente"]; ?></td>
                   

                    <td>
                    <div class="btn-group">
                    <div class="px-1">
                    
                    <a href="index.php?pagina=editar&email=<?php echo $value["email_admin"]; ?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>

                    </div>

          

                    <?php
                        $eliminar = new ControladorCliente();
                        $eliminar -> ctrEliminarCliente();
                    ?>
                    <form method="post">

                    <input type="hidden" value="<?php echo $value["idcliente"]; ?>" name="eliminarCliente">

                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>  
                    </form>


                    </div>

                    </td>
                  </tr>

                <?php endforeach ?>

                </tbody>
</table>