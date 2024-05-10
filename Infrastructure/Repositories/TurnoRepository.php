<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/Entities/Turno.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/Contracts/ITurnoRepository.php";

class TurnoRepository{

    public function __constructor(){

    }

    public function SaveTurno(Turno $Turno) : void{
        if(is_null($Turno)){
            throw new Exception("El Turno no puede ser Null al Guardar");
        }
        try{
            $Turno->save();
        }catch(Exception $error){
            $message = $error->getMessage();
            if(strstr($message, "Duplicate")){
                throw new Exception("Error: Ya existe un Turno con ID $Turno->Turno_id");
            }
            throw new Exception("Error: No fue posible guardar el turno: ".$error->getCode());
           
        }
    }
    
    public function FindTurnoById(String $id) : Turno{
        if(is_null($id) || empty($id)){
            throw new Exception("El ID de la Turno no puede ser Nulo al buscar ");
        }
        try{
           return Turno::find(array("CEDULA" => $id));
        }catch(Exception $eror){
            throw new Exception("Error: El Turno con ID $id no existe");
        }
    }

    public function UpdateTurno(Turno $turno) : void{
        if(is_null($turno)){
            throw new Exception("La turno no puede ser Null al Actualizar");
        }
        
       
        $turnoExistente = $this->FindTurnoById($turno->id);
        if($turnoExistente){
            // Actualizar los atributos de la turno existente
            //$turnoExistente->CEDULA = $turno->CEDULA;
            $turnoExistente->jornada = $turno->jornada;
            $turnoExistente->hora_inicio = $turno->hora_inicio;
            $turnoExistente->hora_fin = $turno->hora_fin;
            $turnoExistente->fecha = $turno->fecha;
            
           
          
            $turnoExistente->save();
            
            echo "turno actualizada correctamente.";
        } else {
            // Manejar el caso donde la turno no existe en la base de datos
            echo "La turno no existe en la base de datos.";
        }
    }

    public function DeleteTurno(String $id) : void{
        if(is_null($id) || empty($id)){
            throw new Exception("El ID de la Turno no puede ser Nulo al eliminar ");
        }
     
        $Turno = $this->FindTurnoById($id);
        try{
            $Turno->delete();
        }catch(Exception $eror){
            throw new Exception("Error: Error al eliminar el Turno con ID $id");
        }
    }
    
    public function GetAllTurnos() : array{
        return Turno::all();
    }
}