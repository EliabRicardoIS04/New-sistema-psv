<?php

include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/Entities/Producto.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/Contracts/IProductoRepository.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Infrastructure/Repositories/ProductoRepository.php";

$repository = new ProductoRepository();

$producto = new Producto();
$producto->producto_id = 562;
$producto->nombre = "camara hd";
$producto->marca = "lenovo";
$producto->precio = 170.000;
$producto->descripcion = "esta es una buena camara";
$producto->estado = 1;


try {
    @$repository->SaveProducto($producto);
    
  } catch (Exception $error) {
     echo $error->getMessage();
  }