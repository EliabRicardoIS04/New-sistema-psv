<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/Entities/Cargo.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/Contracts/ICargoRepository.php";

class CargoRepository implements ICargoRepository{

    public function __constructor(){

    }

    public function SaveCargo(Cargo $Cargo) : void{
        if(is_null($Cargo)){
            throw new Exception("El Cargo no puede ser Null al Guardar");
        }
        try{
            $Cargo->save();
        }catch(Exception $error){
            $message = $error->getMessage();
            if(strstr($message, "Duplicate")){
                throw new Exception("Error: Ya existe un Cargo con ID $Cargo->Cargo_id");
            }
            throw new Exception("Error: No fue posible guardar el Cargo: ".$error->getCode());
           
        }
    }
    
    public function FindCargoById(String $id) : Cargo{
        if(is_null($id) || empty($id)){
            throw new Exception("El ID de la Cargo no puede ser Nulo al buscar ");
        }
        try{
           return Cargo::find(array("Cargo_id" => $id));
        }catch(Exception $error){
            throw new Exception("Error: El Cargo con ID $id no existe");
        }
    }

    public function UpdateCargo(Cargo $Cargo) : void{
        if(is_null($Cargo)){
            throw new Exception("La Cargo no puede ser Null al Actualizar");
        }
        
       
        $CargoExistente = $this->FindCargoById($Cargo->id);
        if($CargoExistente){
            // Actualizar los atributos de la Cargo existente
            //$CargoExistente->CEDULA = $Cargo->CEDULA;
            $CargoExistente->nombre = $Cargo->nombre;
            $CargoExistente->empleado_servicio_id = $Cargo->empleado_servicio_id;
         
            
           
          
            $CargoExistente->save();
            
            echo "Cargo actualizada correctamente.";
        } else {
            // Manejar el caso donde la Cargo no existe en la base de datos
            echo "La Cargo no existe en la base de datos.";
        }
    }

    public function DeleteCargo(String $id) : void{
        if(is_null($id) || empty($id)){
            throw new Exception("El ID de la Cargo no puede ser Nulo al eliminar ");
        }
     
        $Cargo = $this->FindCargoById($id);
        try{
            $Cargo->delete();
        }catch(Exception $eror){
            throw new Exception("Error: Error al eliminar el Cargo con ID $id");
        }
    }
    
    public function GetAllCargos() : array{
        return Cargo::all();
    }
}