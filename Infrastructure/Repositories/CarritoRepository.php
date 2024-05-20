<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/Entities/Carrito.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/Contracts/ICarritoRepository.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Infrastructure/Repositories/DetalleCarritoRepository.php";




class CarritoRepository implements ICarritoRepository{

    
    public function __constructor(){

    }
    public function CreateCarrito(Carrito $Carrito) : void{
        if(is_null($Carrito)){
            throw new Exception("El Carrito no puede ser Null al Guardar");
        }
        try{
            $Carrito->save();
        }catch(Exception $error){
            $message = $error->getMessage();
            if(strstr($message, "Duplicate")){
                throw new Exception("Error: Ya existe un Carrito con ID $Carrito->Carrito_id");
            }
            throw new Exception("Error: No fue posible guardar el Carrito: ".$error->getCode());
           
        }
    }
    
    public function FindCarritoById(String $id) : Carrito{
        if(is_null($id) || empty($id)){
            throw new Exception("El ID de la Carrito no puede ser Nulo al buscar ");
        }
        try{
           return Carrito::find(array("Carrito_id" => $id));
        }catch(Exception $error){
            throw new Exception("Error: El Carrito con ID $id no existe");
        }
    }

    public function UpdateCarrito(Carrito $Carrito) : void{
        if(is_null($Carrito)){
            throw new Exception("La Carrito no puede ser Null al Actualizar");
        }
        
       
        $CarritoExistente = $this->FindCarritoById($Carrito->id);
        if($CarritoExistente){
            // Actualizar los atributos de la Carrito existente
            //$CarritoExistente->CEDULA = $Carrito->CEDULA;
            $CarritoExistente->estado = $Carrito->estado;
            $CarritoExistente->fecha_creacion = $Carrito->fecha_creacion;
            $CarritoExistente->fecha_eliminacion = $Carrito->fecha_eliminacion;
            
            
           
          
            $CarritoExistente->save();
            
            echo "Carrito actualizada correctamente.";
        } else {
            // Manejar el caso donde la Carrito no existe en la base de datos
            echo "La Carrito no existe en la base de datos.";
        }
    }

    public function DeleteCarrito(String $id) : void{
        if(is_null($id) || empty($id)){
            throw new Exception("El ID de la Carrito no puede ser Nulo al eliminar ");
        }
     
        $Carrito = $this->FindCarritoById($id);
        try{
            $Carrito->delete();
        }catch(Exception $eror){
            throw new Exception("Error: Error al eliminar el Carrito con ID $id");
        }
    }
    
    /*public function GetAllCarritos() : array{
        return Carrito::all();
    }*/
    
    public function AddProducts($DetalleCarrito): void
    {
        $DetalleRepository = new DetalleCarritoRepository();
        $DetalleRepository->SaveDetalleCarrito($DetalleCarrito);
    }


    public function DeleteProducts(String $id): void
    {
        $DetalleRepository = new DetalleCarritoRepository();
    }
}

