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

?>
