<?php

include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/libs/bdConfig.php";

class Producto extends ActiveRecord\Model{
    static $has_many = array(
        array('detallecarrito')
    );
    static $has_many_through = array(
        array('carrito')
    );

    public function __construct($producto_id,$nombre,$marca,$precio,$descripcion)
    {   
        $this->producto_id = $producto_id;
        $this->nombre      = $nombre;
        $this->marca       = $marca;
        $this->precio      = $precio;
        $this->descripcion = $descripcion;     
    }
}