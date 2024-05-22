<?php

require_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Controllers/vistasController.php";

$plantilla = new vistasController();



$vistas = $plantilla->obtener_plantilla_controller();

if($vistas == "login" || $vistas =="404"){
    require_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Views/content/".$vistas.".php";
}else{
    echo "nada amigo";

}