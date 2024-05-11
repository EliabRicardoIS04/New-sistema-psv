<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/Entities/EmpleadoServicio.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/Contracts/IEmpleadoServicioRepository.php";

class EmpleadoServicioRepository implements IEmpleadoServicioRepository{

    public function __constructor(){

    }

    public function SaveEmpleadoServicio(EmpleadoServicio $EmpleadoServicio) : void{
        if(is_null($EmpleadoServicio)){
            throw new Exception("El EmpleadoServicio no puede ser Null al Guardar");
        }
        try{
            $EmpleadoServicio->save();
        }catch(Exception $error){
            $message = $error->getMessage();
            if(strstr($message, "Duplicate")){
                throw new Exception("Error: Ya existe un EmpleadoServicio con ID $EmpleadoServicio->EmpleadoServicio_id");
            }
            throw new Exception("Error: No fue posible guardar el EmpleadoServicio: ".$error->getCode());
           
        }
    }
    
    public function FindEmpleadoServicioById(String $id) : EmpleadoServicio{
        if(is_null($id) || empty($id)){
            throw new Exception("El ID de la EmpleadoServicio no puede ser Nulo al buscar ");
        }
        try{
           return EmpleadoServicio::find(array("EmpleadoServicio_id" => $id));
        }catch(Exception $error){
            throw new Exception("Error: El EmpleadoServicio con ID $id no existe");
        }
    }

    public function UpdateEmpleadoServicio(EmpleadoServicio $EmpleadoServicio) : void{
        if(is_null($EmpleadoServicio)){
            throw new Exception("La EmpleadoServicio no puede ser Null al Actualizar");
        }
        
       
        $EmpleadoServicioExistente = $this->FindEmpleadoServicioById($EmpleadoServicio->id);
        if($EmpleadoServicioExistente){
            // Actualizar los atributos de la EmpleadoServicio existente
            //$EmpleadoServicioExistente->CEDULA = $EmpleadoServicio->CEDULA;
            $EmpleadoServicioExistente->sueldo = $EmpleadoServicio->sueldo;
            $EmpleadoServicioExistente->jornada = $EmpleadoServicio->jornada;
          
           
          
            $EmpleadoServicioExistente->save();
            
            echo "EmpleadoServicio actualizada correctamente.";
        } else {
            // Manejar el caso donde la EmpleadoServicio no existe en la base de datos
            echo "La EmpleadoServicio no existe en la base de datos.";
        }
    }

    public function DeleteEmpleadoServicio(String $id) : void{
        if(is_null($id) || empty($id)){
            throw new Exception("El ID de la EmpleadoServicio no puede ser Nulo al eliminar ");
        }
     
        $EmpleadoServicio = $this->FindEmpleadoServicioById($id);
        try{
            $EmpleadoServicio->delete();
        }catch(Exception $eror){
            throw new Exception("Error: Error al eliminar el EmpleadoServicio con ID $id");
        }
    }
    
    public function GetAllEmpleadoServicios() : array{
        return EmpleadoServicio::all();
    }
}