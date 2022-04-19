<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>INGRESO</title>

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

        <h3 class="text-center py-5">INGRESO PSCINP</h3>

      </div>

    <!-- BOTONERA -->

    <div class="container-fluid bg-light">
        
        <div class="container">
      
            <ul class="nav nav-justified py-2 nav-pills">

            <?php if (isset($_GET["pagina"])): ?>

<?php if ($_GET["pagina"] == "ingreso"): ?>

    <li class="nav-item">

        <a class="nav-link active" href="../Vista/plantilla.php?pagina=ingreso">Ingreso</a>

    </li>
<?php else: ?>
    <li class="nav-item">

        <a class="nav-link" href="../Vista/plantilla.php?pagina=ingreso">Ingreso</a>

    </li>
<?php endif ?>

<?php if ($_GET["pagina"] == "registro"): ?>

    <li class="nav-item">

        <a class="nav-link active" href="../Vista/plantilla.php?pagina=registro">Registro</a>

    </li>
<?php else: ?>
    <li class="nav-item">

        <a class="nav-link" href="../Vista/plantilla.php?pagina=registro">Registro</a>

    </li>
<?php endif ?>

<?php else: ?>

                    <li class="nav-item">
                    
                    <a class="nav-link" href="../Vista/plantilla.php?pagina=ingreso">Ingreso</a>
                    
                    </li>
                    
                    <li class="nav-item">
                    
                    <a class="nav-link" href="index.php?pagina=registro">Registro</a>
                    
                    </li>
                    
            <?php endif ?>
                    

            </ul>
        </div>
    </div>

    <div class="container-fluid">
        
        <div class="container py-5">

        <?php

            if(isset($_GET{"pagina"})){
                
                if($_GET["pagina"] == "registro" ||
                    $_GET["pagina"] == "ingreso")
                    {

                    include "paginasingres/".$_GET["pagina"].".php";
                    }
            }


        ?>

        </div>
    </div>        

</body>
</html>