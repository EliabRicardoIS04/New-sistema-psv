<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/Entities/DetalleCarrito.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/Contracts/IDetalleCarritoRepository.php";

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

    public function DeleteDetalleCarrito(String $id) : void{
        if(is_null($id) || empty($id)){
            throw new Exception("El ID de la DetalleCarrito no puede ser Nulo al eliminar ");
        }
     
        $DetalleCarrito = $this->FindDetalleCarritoById($id);
        try{
            $DetalleCarrito->delete();
        }catch(Exception $eror){
            throw new Exception("Error: Error al eliminar el DetalleCarrito con ID $id");
        }
    }
    
    public function GetAllDetalleCarritos() : array{
        return DetalleCarrito::all();
    }
}