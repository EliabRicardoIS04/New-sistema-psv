<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/Entities/Shift.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/Contracts/IShiftRepository.php";

class ShiftRepository implements IShiftRepository{

    public function __constructor(){

    }

    public function SaveShift(Shift $Shift) : void{
        if(is_null($Shift)){
            throw new Exception("El Shift no puede ser Null al Guardar");
        }
        try{
            $Shift->save();
        }catch(Exception $error){
            $message = $error->getMessage();
            if(strstr($message, "Duplicate")){
                throw new Exception("Error: Ya existe un Shift con ID $Shift->Shift_id");
            }
            throw new Exception("Error: No fue posible guardar el Shift: ".$error->getCode());
           
        }
    }
    
    public function FindShiftById(String $id) : Shift{
        if(is_null($id) || empty($id)){
            throw new Exception("El ID de la Shift no puede ser Nulo al buscar ");
        }
        try{
           return Shift::find(array("Shift_id" => $id));
        }catch(Exception $error){
            throw new Exception("Error: El Shift con ID $id no existe");
        }
    }

    public function UpdateShift(Shift $Shift) : void{
        if(is_null($Shift)){
            throw new Exception("La Shift no puede ser Null al Actualizar");
        }
        
       
        $ShiftExistente = $this->FindShiftById($Shift->id);
        if($ShiftExistente){
            // Actualizar los atributos de la Shift existente
            //$ShiftExistente->CEDULA = $Shift->CEDULA;
            $ShiftExistente->jornada = $Shift->jornada;
            $ShiftExistente->hora_inicio = $Shift->hora_inicio;
            $ShiftExistente->hora_fin = $Shift->hora_fin;
            $ShiftExistente->fecha = $Shift->fecha;
            
           
          
            $ShiftExistente->save();
            
            echo "Shift actualizada correctamente.";
        } else {
            // Manejar el caso donde la Shift no existe en la base de datos
            echo "La Shift no existe en la base de datos.";
        }
    }

    public function DeleteShift(String $id) : void{
        if(is_null($id) || empty($id)){
            throw new Exception("El ID de la Shift no puede ser Nulo al eliminar ");
        }
     
        $Shift = $this->FindShiftById($id);
        try{
            $Shift->delete();
        }catch(Exception $eror){
            throw new Exception("Error: Error al eliminar el Shift con ID $id");
        }
    }
    
    public function GetAllShifts() : array{
        return Shift::all();
    }
}