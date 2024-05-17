<?php

include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/libs/bdConfig.php"; 

class Carrito extends ActiveRecord\Model{

    static $belongs_to = array(
        array('cliente')
    );   

    static $has_many = array(
        array('detallecarrito')
    );

    static $has_many_through = array(
        array('producto')
    );
}