<?php

class vistasModelo{

    //este modelo nos permite obtener las vistas

    protected static function obtener_vistas_modelo($vistas){
        $lista =[];
        if(in_array($vistas,$lista)){
            if(is_file($_SERVER["DOCUMENT_ROOT"]."/proaula//Views/content/".$vistas."-view.php")){
                $contenido = "./views/content/".$vistas."-view.php";
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