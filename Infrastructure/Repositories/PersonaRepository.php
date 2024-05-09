<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/Entities/Persona.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/Contracts/IPersonaRepository.php";

class PersonaRepository{

    public function __constructor(){

    }

    public function SavePersona(Persona $persona) : void{
        if(is_null($persona)){
            throw new Exception("La Persona no puede ser Null al Guardar");
        }
        try{
            $persona->save();
        }catch(Exception $error){
            $message = $error->getMessage();
            if(strstr($message, "Duplicate")){
                throw new Exception("Error: Ya existe un usuario con cedula $persona->cedula");
            }
            throw new Exception("Error: No fue posible guardar el usuario: ".$error->getCode());
           
        }
    }
    
    public function FindPersonaById(String $id) : Persona{
        if(is_null($id) || empty($id)){
            throw new Exception("El ID de la Persona no puede ser Nulo al buscar ");
        }
        try{
           return Persona::find(array("CEDULA" => $id));
        }catch(Exception $eror){
            throw new Exception("Error: La Persona con Cedula $id no existe");
        }
    }

    public function UpdatePersona(Persona $persona) : void{
        if(is_null($persona)){
            throw new Exception("La Persona no puede ser Null al Guardar");
        }
        $this->FindPersonaById($persona->CEDULA);
        $this->SavePersona($persona);
    }

    public function DeletePersona(String $id) : void{
        if(is_null($id) || empty($id)){
            throw new Exception("El ID de la Persona no puede ser Nulo al eliminar ");
        }
     
        $persona = $this->FindPersonaById($id);
        try{
            $persona->delete();
        }catch(Exception $eror){
            throw new Exception("Error: Error al eliminar la persona con Cedula $id");
        }
    }
    
    public function GetAllPersonas() : array{
        return Persona::all();
    }
}