<?php 

require_once "../controlador/plantilla.controladoradmin.php";
require_once "../controlador/formularios.controladoradmin.php";

require_once "../modelo/formularios.modeloadmin.php";

require_once "../controlador/categorias.controlador.php";
require_once "../modelo/categorias.modelo.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrTraerPlantilla();
?>

