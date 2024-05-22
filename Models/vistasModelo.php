<?php

class vistasModelo{

    //este modelo nos permite obtener las vistas

    protected static function obtener_vistas_modelo($vistas){
        $lista =["login","principal","productos","contactos","nosotros","principal","servicios","signup"];
        if(in_array($vistas,$lista)){
            if(is_file($_SERVER["DOCUMENT_ROOT"]."/proaula/Views/content/".$vistas.".php")){
                $contenido = $_SERVER["DOCUMENT_ROOT"]."/proaula/Views/content/".$vistas.".php";
               // echo $contenido;
            }else{
                $contenido =$_SERVER["DOCUMENT_ROOT"]."/proaula/Views/content/404.php";
            }
        }elseif ($vistas=="login" || $vistas == "index") {
            $contenido =$_SERVER["DOCUMENT_ROOT"]."/proaula/Views/content/login.php";
        }else{
            $contenido =$_SERVER["DOCUMENT_ROOT"]."/proaula/Views/content/404.php";
        }

        return $contenido;

    }
}