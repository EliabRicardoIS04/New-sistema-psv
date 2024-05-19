<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/entities/Proveedor.php";

interface IProveedorRepository{

    public function SaveProveedor(Proveedor $Proveedor) : void;
    public function FindProveedorById(String $id) : Proveedor;
    public function UpdateProveedor(Proveedor $Proveedor) : void;
    public function DeleteProveedor(String $id) : void;
    public function GetAllProveedors() : array;
}