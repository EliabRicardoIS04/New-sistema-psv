<?php

class vistasModelo{

    //este modelo nos permite obtener las vistas

    protected static function obtener_vistas_modelo($vistas){
        $lista =["carrito","login","principal","productos",
        "contactos","nosotros","principal","servicios",
        "signup","RegisterCliente","producto"];
        if(in_array($vistas,$lista)){
            if(is_file($_SERVER["DOCUMENT_ROOT"]."/proaula/Views/cliente/".$vistas.".php")){
                $contenido = $_SERVER["DOCUMENT_ROOT"]."/proaula/Views/cliente/".$vistas.".php";
               // echo $contenido;
            }else{
                $contenido =$_SERVER["DOCUMENT_ROOT"]."/proaula/Views/cliente/404.php";
            }
        }elseif ($vistas == "principal" || $vistas == "index") {
            $contenido =$_SERVER["DOCUMENT_ROOT"]."/proaula/Views/cliente/principal.php";
        }else{
            $contenido =$_SERVER["DOCUMENT_ROOT"]."/proaula/Views/cliente/404.php";
        }

        return $contenido;

    }
}