<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/Entities/Proveedor.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/Contracts/IProveedorRepository.php";

class ProveedorRepository implements IProveedorRepository{

    public function __constructor(){

    }

    public function SaveProveedor(Proveedor $Proveedor) : void{
        if(is_null($Proveedor)){
            throw new Exception("El Proveedor no puede ser Null al Guardar");
        }
        try{
            $Proveedor->save();
        }catch(Exception $error){
            $message = $error->getMessage();
            if(strstr($message, "Duplicate")){
                throw new Exception("Error: Ya existe un Proveedor con ID $Proveedor->Proveedor_id");
            }
            throw new Exception("Error: No fue posible guardar el Proveedor: ".$error->getCode());
           
        }
    }
    
    public function FindProveedorById(String $id) : Proveedor{
        if(is_null($id) || empty($id)){
            throw new Exception("El ID de la Proveedor no puede ser Nulo al buscar ");
        }
        try{
           return Proveedor::find(array("Proveedor_id" => $id));
        }catch(Exception $error){
            throw new Exception("Error: El Proveedor con ID $id no existe");
        }
    }

    public function UpdateProveedor(Proveedor $Proveedor) : void{
        if(is_null($Proveedor)){
            throw new Exception("La Proveedor no puede ser Null al Actualizar");
        }
        
       
        $ProveedorExistente = $this->FindProveedorById($Proveedor->id);
        if($ProveedorExistente){
            // Actualizar los atributos de la Proveedor existente
            //$ProveedorExistente->CEDULA = $Proveedor->CEDULA;
            $ProveedorExistente->nombre = $Proveedor->nombre;
            $ProveedorExistente->pais = $Proveedor->pais;
            $ProveedorExistente->ciudad = $Proveedor->ciudad;
            $ProveedorExistente->correo = $Proveedor->correo;
            
           
          
            $ProveedorExistente->save();
            
            echo "Proveedor actualizada correctamente.";
        } else {
            // Manejar el caso donde la Proveedor no existe en la base de datos
            echo "La Proveedor no existe en la base de datos.";
        }
    }

    public function DeleteProveedor(String $id) : void{
        if(is_null($id) || empty($id)){
            throw new Exception("El ID de la Proveedor no puede ser Nulo al eliminar ");
        }
     
        $Proveedor = $this->FindProveedorById($id);
        try{
            $Proveedor->delete();
        }catch(Exception $eror){
            throw new Exception("Error: Error al eliminar el Proveedor con ID $id");
        }
    }
    
    public function GetAllProveedors() : array{
        return Proveedor::all();
    }
}