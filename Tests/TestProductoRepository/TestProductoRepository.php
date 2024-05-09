<?php

include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/Entities/Producto.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/Contracts/IProductoRepository.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Infrastructure/Repositories/ProductoRepository.php";

$repository = new ProductoRepository();

$producto = new Producto();/*
$producto->producto_id = 5414;
$producto->nombre = "camara 4k";
$producto->marca = "Acer";
$producto->precio = 1333332;
$producto->descripcion = "esta es una buena camara para el dia";
$producto->estado = 0;


try {
    @$repository->SaveProducto($producto);
    
  } catch (Exception $error) {
     echo $error->getMessage();
  }*/


  ///testeo de update

  /*$producto = new Producto();
  $producto->producto_id = 5414;
  $producto->nombre = "camara 8k";
  $producto->marca = "Hp";
  $producto->precio = 1333332;
  $producto->descripcion = "esta es una buena camara para vacaciones";
  $producto->estado = 0;

try {
    @$repository->UpdateProducto($producto);
    
  } catch (Exception $error) {
     echo $error->getMessage();
  }*/


  //testeo delete
/*
  try{
   $repository->DeleteProducto("562");

  }catch(Exception $e){
   echo $e->getMessage();
  }*/
  $p = array();

  //testeo getAll

  try{
   $p = $repository->GetAllProductos();
   var_dump($p);

  }catch(Exception $e){
   echo $e->getMessage();
  }