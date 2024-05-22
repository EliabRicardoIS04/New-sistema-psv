<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/libs/bdConfig.php";

class DetalleCarrito extends ActiveRecord\Model{
    
    static $belongs_to = array(
        array('carrito'),
        array('producto')
    );
}