<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/entities/Factura.php";

interface IFacturaRepository{

    public function SaveFactura(Factura $Factura) : void;
    public function FindFacturaById(String $id) : Factura;
    public function UpdateFactura(Factura $Factura) : void;
    public function DeleteFactura(String $id) : void;
    public function GetAllFacturas() : array;
}