<?php 

require_once "Controlador/plantilla.controlador.php";
require_once "Controlador/formularios.controlador.php";

require_once "Modelo/formularios.modelo.php";

$PSCINP = new ControladorPSCINP();
$PSCINP -> ctrTraerPSCINP();

?>

