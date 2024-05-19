<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/entities/Pedido.php";

interface IPedidoRepository{

    public function SavePedido(Pedido $Pedido) : void;
    public function FindPedidoById(String $id) : Pedido;
    public function UpdatePedido(Pedido $Pedido) : void;
    public function DeletePedido(String $id) : void;
    public function GetAllPedidos() : array;
}