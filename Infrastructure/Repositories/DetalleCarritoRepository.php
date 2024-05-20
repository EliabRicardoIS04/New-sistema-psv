<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/Entities/DetalleCarrito.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/Contracts/IDetalleCarritoRepository.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Infrastructure/Repositories/CarritoRepository.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Infrastructure/Repositories/ProductoRepository.php";



class DetalleCarritoRepository implements IDetalleCarritoRepository{

    public function __constructor(){

    }

    public function SaveDetalleCarrito(DetalleCarrito $DetalleCarrito) : void{
        if(is_null($DetalleCarrito)){
            throw new Exception("El DetalleCarrito no puede ser Null al Guardar");
        }
        try{
            $DetalleCarrito->save();
        }catch(Exception $error){
            $message = $error->getMessage();
            if(strstr($message, "Duplicate")){
                throw new Exception("Error: Ya existe un DetalleCarrito con ID $DetalleCarrito->DetalleCarrito_id");
            }
            throw new Exception("Error: No fue posible guardar el DetalleCarrito: ".$error->getCode());
           
        }
    }
    
    public function FindDetalleCarritoById(String $id) : DetalleCarrito{
        if(is_null($id) || empty($id)){
            throw new Exception("El ID de la DetalleCarrito no puede ser Nulo al buscar ");
        }
        try{
           return DetalleCarrito::find(array("DetalleCarrito_id" => $id));
        }catch(Exception $error){
            throw new Exception("Error: El DetalleCarrito con ID $id no existe");
        }
    }

    public function FindDetalleCarritoByCarritoId(String $idCarrito){
        if(is_null($idCarrito) || empty($idCarrito)){
            throw new Exception("No se encontro ningun registro");
        }
        try{
           return DetalleCarrito::find(array("carrito_id" => $idCarrito));
        }catch(Exception $error){
            throw new Exception("Error: El DetalleCarrito con ID $idCarrito no existe");
        }
    }
    public function FindDetalleCarritoByProductoId(String $idProducto){
        if(is_null($idProducto) || empty($idProducto)){
            throw new Exception("No se encontro ningun registro");
        }
        try{
           return DetalleCarrito::find(array("producto_id" => $idProducto));
        }catch(Exception $error){
            throw new Exception("Error: El DetalleCarrito con ID $idProducto no existe");
        }
    }
    public function FindDetalleCarritoByClienteId(String $idCliente){
        if(is_null($idCliente) || empty($idCliente)){
            throw new Exception("No se encontro ningun registro");
        }
        try{
           return DetalleCarrito::find(array("cliente_id" => $idCliente));
        }catch(Exception $e){
            throw new Exception("Error: El DetalleCarrito con ID $idCliente no existe".$e->getMessage());
        }
    }

    public function UpdateDetalleCarrito(DetalleCarrito $DetalleCarrito) : void{
        if(is_null($DetalleCarrito)){
            throw new Exception("La DetalleCarrito no puede ser Null al Actualizar");
        }
        
       
        $DetalleCarritoExistente = $this->FindDetalleCarritoById($DetalleCarrito->id);
        if($DetalleCarritoExistente){
            // Actualizar los atributos de la DetalleCarrito existente
            //$DetalleCarritoExistente->CEDULA = $DetalleCarrito->CEDULA;
            //$DetalleCarritoExistente->jornada = $DetalleCarrito->jornada;
           // $DetalleCarritoExistente->hora_inicio = $DetalleCarrito->hora_inicio;
            //$DetalleCarritoExistente->hora_fin = $DetalleCarrito->hora_fin;
           // $DetalleCarritoExistente->fecha = $DetalleCarrito->fecha;
            
           
          
            $DetalleCarritoExistente->save();
            
            echo "DetalleCarrito actualizada correctamente.";
        } else {
            // Manejar el caso donde la DetalleCarrito no existe en la base de datos
            echo "La DetalleCarrito no existe en la base de datos.";
        }
    }

    public function DeleteDetalleCarrito(String $idProducto, String $idCarrito,String $idCliente) : void{

        if(is_null($idCarrito) || empty($idCarrito)){
            throw new Exception("El ID del carrito puede ser Nulo al eliminar ");
        }
        if(is_null($idProducto) || empty($idProducto)){
            throw new Exception("El ID del producto no puede ser Nulo al eliminar ");
        }
        if(is_null($idCliente) || empty($idCliente)){
            throw new Exception("El ID del cliente no puede ser Nulo al eliminar ");
        }
        if(
        $DetalleCarrito = $this->FindDetalleCarritoByProductoId($idProducto) AND
        $DetalleCarrito = $this->FindDetalleCarritoByCarritoId($idCarrito) AND
        $DetalleCarrito = $this->FindDetalleCarritoByClienteId($idCliente)){

            try{
                $DetalleCarrito->delete();
            }catch(Exception $e){
                throw new Exception("Error: Error al eliminar el DetalleCarrito".$e->getMessage());
            }
        }
       
    }
    
    public function GetAllDetalleCarritos() : array{
        return DetalleCarrito::all();
    }
}