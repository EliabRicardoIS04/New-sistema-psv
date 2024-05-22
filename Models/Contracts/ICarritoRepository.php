<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/entities/Carrito.php";

interface ICarritoRepository{

    public function CreateCarrito(Carrito $Carrito) : void;
    public function FindCarritoById(String $id) : Carrito;
    public function UpdateCarrito(Carrito $Carrito) : void;
    public function DeleteCarrito(String $id) : void;
   // public function GetAllCarritos() : array;
    public function AddProducts(DetalleCarrito $detalleCarrito): void;
    public function DeleteProducts(String $id) :void;

}