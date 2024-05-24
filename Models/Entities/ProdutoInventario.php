<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/libs/bdConfig.php";

class ProductoInventario extends ActiveRecord\Model{
    public function __construct($producto_inventario_id,$nombre,$marca,$precio,$proveedor,
                                $descripcion,$cantidad,$fecha_ingreso,$hora_ingreso)
    {
        $this->producto_inventario_id = $producto_inventario_id;
        $this->nombre = $nombre;
        $this->narca = $marca;
        $this->precio = $precio;
        $this->proveedor =$proveedor;
        $this->descripcion = $descripcion;
        $this->cantidad = $cantidad;
        $this->fecha_ingreso = $fecha_ingreso;
        $this->hora_ingreso = $hora_ingreso;
    }
}