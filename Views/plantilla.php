
    <!-- Contenido dinámico -->
    <?php
    $css_files = [
        'principal' => 'stylesprincipal.css',
        'nosotros' => 'stylesnosotros.css',
        'servicios' => 'stylesservicios.css',
        'productos' => 'stylesproductos.css',
        'contactos' => 'stylescontactos.css',
        'login' => 'styleslogin.css'
    ];

    $css = isset($css_files[$vista]) ? $css_files[$vista] : 'stylesprincipal.css';

    $vista;

    //echo $vista."<br>";

    //echo $_SERVER["DOCUMENT_ROOT"]."/proaula/Views/content/404.php";
   

    if(str_contains($vista,"404.php")){
        require_once $vista;
    }else{
        include $_SERVER["DOCUMENT_ROOT"]."/proaula/Views/template/Hea.php";
        require_once $vista;
        include $_SERVER["DOCUMENT_ROOT"]."/proaula/Views/template/pie.php";

    }

    ?>

 