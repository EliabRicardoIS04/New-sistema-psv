<?php

include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/Entities/Cliente.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/Entities/Producto.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/Entities/DetalleCarrito.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/Contracts/IClienteRepository.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Infrastructure/Repositories/ClienteRepository.php";


//testeo en loginacess

$repo = new ClienteRepository();
try {
    $bool = $repo->AccesoLogin("eliabrios@gmail.com","Abcd**");
    echo $bool;
} catch (Exception $e) {
    $e->getMessage();
}