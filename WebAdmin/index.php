<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/proaula/Controllers/AdminVistaController.php";

$plantilla = new AdminVistaController();

// Obtén la vista según la URL proporcionada
$vista = $plantilla->obtener_vistas_controller();

//echo $vista;
//require_once $vista;
// Incluye la plantilla principal
require_once $_SERVER["DOCUMENT_ROOT"] . "/proaula/Views/Adminplantilla.php";
?>
