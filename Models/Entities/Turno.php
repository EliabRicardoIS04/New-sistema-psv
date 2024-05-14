<?php

include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Libs/BdConfig.php";

class Turno extends ActiveRecord\Model{

    public function __construct()
    {
        echo "ejecutando el constructor de turno";
        
    }
    
}