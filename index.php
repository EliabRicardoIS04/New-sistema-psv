

<?php

    $pagina = isset($_GET['p'])? strtolower($_GET['p']): 'principal' ;

include $_SERVER["DOCUMENT_ROOT"]."/proaula/Views/template/Hea.php";
 
 require_once 'views/home/'.$pagina.'.php';
 
 
 include $_SERVER["DOCUMENT_ROOT"]."/proaula/Views/template/pie.php";