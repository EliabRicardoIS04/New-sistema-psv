<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/entities/Producto.php";

interface IProductoRepository{

    public function SaveProducto(Producto $Producto) : void;
    public function FindProductoById(String $id) : Producto;
    public function FindProductoByName(String $nombre) : Producto;
    public function UpdateProducto(Producto $Producto) : void;
    public function DeleteProducto(String $id) : void;
    public function GetAllProductos() : array;
}