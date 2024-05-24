<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/entities/DetalleCarrito.php";

interface IDetalleCarritoRepository{

    public function SaveDetalleCarrito(DetalleCarrito $DetalleCarrito) : void;
    public function FindDetalleCarritoById(String $id) : DetalleCarrito;
    public function UpdateDetalleCarrito(DetalleCarrito $DetalleCarrito) : void;
    public function DeleteDetalleCarrito(String $idProducto, String $idCarrito,String $idCliente) : void;
    public function GetAllDetalleCarritos() : array;
}