<?php

require_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Controllers/vistasController.php";


$plantilla = new vistasController();
$plantilla->obtener_plantilla_controller();