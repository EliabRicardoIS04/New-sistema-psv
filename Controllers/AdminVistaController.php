<?php

require_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/AdminVistaModelo.php";

class AdminVistaController extends AdminVistaModelo{

    public function obtener_plantilla_controller() {
        // Aquí puedes incluir la plantilla principal de tu sitio web
       return require_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Views/Adminplantilla.php";
    }

    public function obtener_vistas_controller() {
        if(isset($_GET['views'])) {
            $ruta = explode("/",$_GET['views']);
            $respuesta = AdminVistaModelo::obtener_vistas_modelo($ruta[0]);
            //echo "se esta ejecutando esto";
        } else {
           $respuesta = $_SERVER["DOCUMENT_ROOT"]."/proaula/Views/Administracion/login.php";
           //echo "paso por aqui";
        }
       
       
        return $respuesta;
    }
}