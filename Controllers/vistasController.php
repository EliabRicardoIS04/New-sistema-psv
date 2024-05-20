<?php
//require_once(__DIR__ . '/../models/vistasModelo.php');

require_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/vistasModelo.php";
class VistasController extends vistasModelo{

    //controlador para obtener plantilla de la vista

    public function obtener_plantilla_controller(){

        return require_once($_SERVER["DOCUMENT_ROOT"]."/proaula/Views/plantilla.php");
    }

    //controlador para obtener vistas
    public function obtener_vistas_controlador(){
        if(isset($_GET['views'])){
            $ruta = explode("/",$_GET['views']);
            $respuesta =vistasModelo::obtener_vistas_modelo($ruta[0]);
        }else{
            $respuesta = "login";
        }
        return $respuesta;
    }

}