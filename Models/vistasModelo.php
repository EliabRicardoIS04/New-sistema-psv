<?php

class vistasModelo{

    //este modelo nos permite obtener las vistas

    protected static function obtener_vistas_modelo($vistas){
        $lista =["login",'principal','productos','contactos'];
        if(in_array($vistas,$lista)){
            if(is_file($_SERVER["DOCUMENT_ROOT"]."/proaula/Views/content/".$vistas.".php")){
                $contenido = $_SERVER["DOCUMENT_ROOT"]."/proaula/Views/content/".$vistas.".php";
                echo $contenido;
            }else{
                $contenido = "404";
            }
        }elseif ($vistas=="login" || $vistas == "index") {
            $contenido = "login";
        }else{
            $contenido = "404";
        }

        return $contenido;

    }
}