<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/entities/ProductoInventario.php";

interface IProductoInventarioRepository{

    public function SaveProductoInventario(ProductoInventario $ProductoInventario) : void;
    public function FindProductoInventarioById(String $id) : ProductoInventario;
    public function UpdateProductoInventario(ProductoInventario $ProductoInventario) : void;
    public function DeleteProductoInventario(String $id) : void;
    public function GetAllProductoInventarios() : array;
    public function FindProductoInventarioByName(String $nombre): ProductoInventario;
}