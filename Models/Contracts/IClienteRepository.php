<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/entities/Cliente.php";

interface IClienteRepository{

    public function SaveCliente(Cliente $Cliente) : void;
    public function FindClienteById(String $id) : Cliente;
    public function UpdateCliente(Cliente $Cliente) : void;
    public function DeleteCliente(String $id) : void;
    public function GetAllClientes() : array;
    public function AccesoLogin(String $correo,String $contrasena) : bool;
}