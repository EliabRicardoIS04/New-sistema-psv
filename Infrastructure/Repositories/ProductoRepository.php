<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/Entities/Producto.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/Contracts/IProductoRepository.php";

class ProductoRepository{

    public function __constructor(){

    }

    public function SaveProducto(Producto $Producto) : void{
        if(is_null($Producto)){
            throw new Exception("El Producto no puede ser Null al Guardar");
        }
        try{
            $Producto->save();
        }catch(Exception $error){
            $message = $error->getMessage();
            if(strstr($message, "Duplicate")){
                throw new Exception("Error: Ya existe un Producto con ID $Producto->producto_id");
            }
            throw new Exception("Error: No fue posible guardar el usuario: ".$error->getCode());
           
        }
    }
    
    public function FindProductoById(String $id) : Producto{
        if(is_null($id) || empty($id)){
            throw new Exception("El ID de la Producto no puede ser Nulo al buscar ");
        }
        try{
           return Producto::find(array("CEDULA" => $id));
        }catch(Exception $eror){
            throw new Exception("Error: El Producto con ID $id no existe");
        }
    }

    public function UpdateProducto(Producto $Producto) : void{
        if(is_null($Producto)){
            throw new Exception("El Producto no puede ser Null al Guardar");
        }
        $this->FindProductoById($Producto->CEDULA);
        $this->SaveProducto($Producto);
    }

    public function DeleteProducto(String $id) : void{
        if(is_null($id) || empty($id)){
            throw new Exception("El ID de la Producto no puede ser Nulo al eliminar ");
        }
     
        $Producto = $this->FindProductoById($id);
        try{
            $Producto->delete();
        }catch(Exception $eror){
            throw new Exception("Error: Error al eliminar el Producto con ID $id");
        }
    }
    
    public function GetAllProductos() : array{
        return Producto::all();
    }
}