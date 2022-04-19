<?php
    session_start();

    require_once "../Controlador/plantilla.controladoradmin.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CRUD</title>

    <!-- PLUGINS CSS -->
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- PLUGINS JavaScript -->
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Ultima version de Font Awesome -->

<script src="https://kit.fontawesome.com/3ecb6ec48e.js" crossorigin="anonymous"></script>

</head>
<body>

    <!-- LOGO -->

    <div class="container-fluid">

        <h3 class="text-center py-3">VJ CAKES INVENTARIO</h3>

      </div>

    <!-- BOTONERA -->

    <div class="container-fluid bg-light">
        
        <div class="container">
      
            <ul class="nav nav-justified py-2 nav-pills">

            <?php if (isset($_GET["pagina"])): ?>

<?php if ($_GET["pagina"] == "ingreso"): ?>

    <li class="nav-item">

        <a class="nav-link active" href="index.php?pagina=ingreso">Ingreso</a>

    </li>
<?php else: ?>
    <li class="nav-item">

        <a class="nav-link" href="index.php?pagina=ingreso">Ingreso</a>

    </li>
<?php endif ?>

<?php if ($_GET["pagina"] == "registroadmin"): ?>

    <li class="nav-item">

        <a class="nav-link active" href="index.php?pagina=registroadmin">Registro Admin</a>

    </li>
<?php else: ?>
    <li class="nav-item">

        <a class="nav-link" href="index.php?pagina=registroadmin">Registro Admin</a>

    </li>
<?php endif ?>

<?php if ($_GET["pagina"] == "categoria"): ?>

<li class="nav-item">

    <a class="nav-link active" href="index.php?pagina=categoria">Categoria</a>

</li>
<?php else: ?>
<li class="nav-item">

    <a class="nav-link" href="index.php?pagina=categoria">Categoria</a>

</li>

<?php endif ?>

<?php if ($_GET["pagina"] == "cliente"): ?>

<li class="nav-item">

    <a class="nav-link active" href="index.php?pagina=cliente">Cliente</a>

</li>
<?php else: ?>
<li class="nav-item">

    <a class="nav-link" href="index.php?pagina=cliente">Cliente</a>

</li>

<?php endif ?>

<?php if ($_GET["pagina"] == "salir"): ?>

<li class="nav-item">

    <a class="nav-link active" href="index.php?pagina=salir">Salir</a>

</li>
<?php else: ?>
<li class="nav-item">

    <a class="nav-link" href="index.php?pagina=salir">Salir</a>

</li>
<?php endif ?>

<?php else: ?>

                    <li class="nav-item">
                    
                    <a class="nav-link" href="index.php?pagina=ingreso">Ingreso</a>
                    
                    </li>
                    
                    <li class="nav-item">
                    
                    <a class="nav-link active" href="index.php?pagina=registroadmin">Registro Admin</a>
                    
                    </li>
                    
                    <li class="nav-item"> 

                    <a class="nav-link" href="index.php?pagina=salir">Salir</a>

                    <li class="nav-item">
                    
                    <a class="nav-link" href="index.php?pagina=categoria">Categoria</a>
                    
                    </li>
                    
                </li>
            <?php endif ?>
                    

            </ul>
        </div>
    </div>

    <!-- CONTENIDO -->

    <div class="container-fluid">
        
        <div class="container py-5">

        <?php

            if(isset($_GET{"pagina"})){
                
                if($_GET["pagina"] == "agregarcategoria" ||
                    $_GET["pagina"] == "agregarregistro" ||
                    $_GET["pagina"] == "agregarcliente" ||
                    $_GET["pagina"] == "ingreso" ||
                    $_GET["pagina"] == "editar" ||
                    $_GET["pagina"] == "editarcategoria" ||
                    $_GET["pagina"] == "registroadmin" ||
                    $_GET["pagina"] == "categoria" ||
                    $_GET["pagina"] == "producto" ||
                    $_GET["pagina"] == "cliente" ||
                    $_GET["pagina"] == "salir"){

                    include "paginas/".$_GET["pagina"].".php";
                    }
                }else{
                include "paginas/registroadmin.php";
            }


        ?>

        </div>
    </div>        

</body>
</html>