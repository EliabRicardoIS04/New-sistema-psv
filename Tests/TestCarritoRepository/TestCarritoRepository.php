<?php

include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/Entities/Carrito.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/Entities/Producto.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/Entities/DetalleCarrito.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/Contracts/ICarritoRepository.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Infrastructure/Repositories/CarritoRepository.php";



$repo = new CarritoRepository();

$c = new Carrito();
$d = new DetalleCarrito();
$repodetalle = new DetalleCarritoRepository();

$c1 = new Carrito();
$c1->cliente_id =752; 
$c->cliente_id = 752;

$d->carrito_id = 2;
$d->producto_id = 45645;
$d->cantidad = 3;


//crear un carrito
/*
try {
    $repo->CreateCarrito($c);
} catch (Exception $e) {
    echo $e;
}*/



//test en AddProducts
/*
try {
    $repo->AddProducts($d);
} catch (Exception $e) {
    echo $e;
}*/


//TEST EN DeleteProductos
try {
    $repodetalle->DeleteDetalleCarrito("5414","1","752");
} catch (Exception $e) {
    echo $e;
}




