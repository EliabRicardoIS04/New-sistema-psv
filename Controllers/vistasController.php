<?php

require_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/vistasModelo.php";

class vistasController extends vistasModelo{

    public function obtener_plantilla_controller() {
        // Aquí puedes incluir la plantilla principal de tu sitio web
       return require_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Views/plantilla.php";
    }

    public function obtener_vistas_controller() {
        if(isset($_GET['views'])) {
            $ruta = explode("/",$_GET['views']);
            $respuesta = vistasModelo::obtener_vistas_modelo($ruta[0]);
           // echo "se esta ejecutando esto";
        } else {
           $respuesta = $_SERVER["DOCUMENT_ROOT"]."/proaula/Views/cliente/principal.php";
           //echo "paso por aqui";
        }
        return $respuesta;
    }
}