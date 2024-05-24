<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/Entities/Productoinventario.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/Contracts/IProductoinventarioRepository.php";

class ProductoinventarioRepository implements IProductoinventarioRepository{

    public function __constructor(){

    }

    public function SaveProductoinventario(Productoinventario $Productoinventario) : void{
        if(is_null($Productoinventario)){
            throw new Exception("El Productoinventario no puede ser Null al Guardar");
        }
        try{
            $Productoinventario->save();
        }catch(Exception $error){
            $message = $error->getMessage();
            if(strstr($message, "Duplicate")){
                throw new Exception("Error: Ya existe un Productoinventario con ID $Productoinventario->Productoinventario_id");
            }
            throw new Exception("Error: No fue posible guardar el Productoinventario: ".$error->getCode());
           
        }
    }
    
    public function FindProductoinventarioById(String $id) : Productoinventario{
        if(is_null($id) || empty($id)){
            throw new Exception("El ID de la Productoinventario no puede ser Nulo al buscar ");
        }
        try{
           return Productoinventario::find(array("Productoinventario_id" => $id));
        }catch(Exception $error){
            throw new Exception("Error: El Productoinventario con ID $id no existe");
        }
    }

    public function UpdateProductoinventario(Productoinventario $Productoinventario) : void{
        if(is_null($Productoinventario)){
            throw new Exception("La Productoinventario no puede ser Null al Actualizar");
        }
        
       
        $ProductoinventarioExistente = $this->FindProductoinventarioById($Productoinventario->id);
        if($ProductoinventarioExistente){
            // Actualizar los atributos de la Productoinventario existente
            //$ProductoinventarioExistente->CEDULA = $Productoinventario->CEDULA;
            $ProductoinventarioExistente->nombre = $Productoinventario->nombre;
            $ProductoinventarioExistente->marca = $Productoinventario->marca;
            $ProductoinventarioExistente->precio = $Productoinventario->precio;
            $ProductoinventarioExistente->proveedor = $Productoinventario->proveedor;
            $ProductoinventarioExistente->descripcion = $Productoinventario->descripcion;
            $ProductoinventarioExistente->canidad = $Productoinventario->cantidad;
            $ProductoinventarioExistente->fecha_ingreso = $Productoinventario->fecha_ingreso;
            $ProductoinventarioExistente->hora_ingreso = $Productoinventario->hora_ingreso;
            $ProductoinventarioExistente->estado = $Productoinventario->estado;
            
           
          
            $ProductoinventarioExistente->save();
            
            echo "Productoinventario actualizada correctamente.";
        } else {
            // Manejar el caso donde la Productoinventario no existe en la base de datos
            echo "La Productoinventario no existe en la base de datos.";
        }
    }

    public function DeleteProductoinventario(String $id) : void{
        if(is_null($id) || empty($id)){
            throw new Exception("El ID de la Productoinventario no puede ser Nulo al eliminar ");
        }
     
        $Productoinventario = $this->FindProductoinventarioById($id);
        try{
            $Productoinventario->delete();
        }catch(Exception $eror){
            throw new Exception("Error: Error al eliminar el Productoinventario con ID $id");
        }
    }
    
    public function GetAllProductoinventarios() : array{
        return Productoinventario::all();
    }

    public function FindProductoInventarioByName(String $nombre): ProductoInventario{
        if(is_null($nombre) || empty($nombre)){
            throw new Exception("El nombre del Productoinventario no puede ser Nulo al buscar");
        }
        try{
           return Productoinventario::find(array("nombre" => $nombre));
        }catch(Exception $error){
            throw new Exception("Error: El Productoinventario con nombre $nombre no existe".$error->getMessage());
        }
    }
}