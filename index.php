

<?php

    $pagina = isset($_GET['p'])? strtolower($_GET['p']): 'principal' ;


 include("views/home/hea.php");
 
 require_once 'views/home/'.$pagina.'.php';
 
 
include("views/home/pie.php");