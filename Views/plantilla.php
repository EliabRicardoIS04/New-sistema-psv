
    <!-- Contenido dinámico -->
    <?php
    
    //echo $vista."<br>";

    //echo $_SERVER["DOCUMENT_ROOT"]."/proaula/Views/content/404.php";
   

    if(str_contains($vista,"404.php") || str_contains($vista,"login.php") || str_contains($vista,"RegisterCliente.php")){
        require_once $vista;
    }else{
        include $_SERVER["DOCUMENT_ROOT"]."/proaula/Views/template/Hea.php";
        require_once $vista;
        include $_SERVER["DOCUMENT_ROOT"]."/proaula/Views/template/pie.php";

    }

    ?>

 