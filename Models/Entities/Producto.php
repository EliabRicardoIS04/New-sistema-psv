<?php

include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/libs/bdConfig.php";

class Producto extends ActiveRecord\Model{
<<<<<<< HEAD
    static $has_many = array(
        array('detallecarrito')
    );
    static $has_many_through = array(
        array('carrito')
    );
=======

>>>>>>> master
}