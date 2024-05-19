<?php
   $url2 = "http://".$_SERVER['HTTP_HOST']."/PROYECTO_FINAL/CSS/estilos.css";
   $url3 = "http://".$_SERVER['HTTP_HOST']."/PROYECTO_FINAL/administrador";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link style rel = "stylesheet"   type = "text/css" href = "<?php echo $url2;?>">
    <title><?php echo ucfirst($page); ?></title>
</head>
<body>
    <div>
    <nav class = "navegation">
            
            <ul>
                <li class = "img">
                    <img class = "imagenEnc" src="imagenes/logo.jpg">
                </li>
                <li>
                    <a href = "principal.php">inicio</a>
                </li>
                <li>
                    <a href = "nosotros.php">nosotros</a>
                </li>
                <li>
                    <a href = "servicios.php">servicios</a>
                </li>
                <li>
                    <a href = "productos.php">productos</a>
                </li>
                <li>
                    <a href = "contactos.php">contactos</a>
                </li>
                <li>
                    <a href = "<?php echo $url3;?>">login</a>
                </li>

            </ul>
            <div class = "clearfix"></div>
            
        </nav>

        
        <div class = "clearfix"></div>

        
       
       


       