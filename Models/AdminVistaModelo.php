<?php

class AdminVistaModelo{

    //este modelo nos permite obtener las vistas

    protected static function obtener_vistas_modelo($vistas){
        $lista =["login","principal","producto","productoInventario","AdminRegister"];
        if(in_array($vistas,$lista)){
            if(is_file($_SERVER["DOCUMENT_ROOT"]."/proaula/Views/Administracion/".$vistas.".php")){
                $contenido = $_SERVER["DOCUMENT_ROOT"]."/proaula/Views/Administracion/".$vistas.".php";
                //echo $contenido;
            }else{
                $contenido =$_SERVER["DOCUMENT_ROOT"]."/proaula/Views/Administracion/404.php";
            }
        }elseif ($vistas=="login" || $vistas == "index") {
            $contenido =$_SERVER["DOCUMENT_ROOT"]."/proaula/Views/Administracion/login.php";
        }else{
            $contenido =$_SERVER["DOCUMENT_ROOT"]."/proaula/Views/Administracion/404.php";
            //echo $contenido;
        }

        return $contenido;

    }
}