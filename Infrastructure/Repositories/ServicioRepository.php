<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/Entities/Servicio.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/Contracts/IServicioRepository.php";

class ServicioRepository implements IServicioRepository{

    public function __constructor(){

    }

    public function SaveServicio(Servicio $Servicio) : void{
        if(is_null($Servicio)){
            throw new Exception("El Servicio no puede ser Null al Guardar");
        }
        try{
            $Servicio->save();
        }catch(Exception $error){
            $message = $error->getMessage();
            if(strstr($message, "Duplicate")){
                throw new Exception("Error: Ya existe un Servicio con ID $Servicio->Servicio_id");
            }
            throw new Exception("Error: No fue posible guardar el Servicio: ".$error->getCode());
           
        }
    }
    
    public function FindServicioById(String $id) : Servicio{
        if(is_null($id) || empty($id)){
            throw new Exception("El ID de la Servicio no puede ser Nulo al buscar ");
        }
        try{
           return Servicio::find(array("Servicio_id" => $id));
        }catch(Exception $error){
            throw new Exception("Error: El Servicio con ID $id no existe");
        }
    }

    public function UpdateServicio(Servicio $Servicio) : void{
        if(is_null($Servicio)){
            throw new Exception("La Servicio no puede ser Null al Actualizar");
        }
        
       
        $ServicioExistente = $this->FindServicioById($Servicio->id);
        if($ServicioExistente){
            // Actualizar los atributos de la Servicio existente
            //$ServicioExistente->CEDULA = $Servicio->CEDULA;
            $ServicioExistente->fecha_inicio = $Servicio->fecha_inicio;
            $ServicioExistente->fecha_inicial = $Servicio->fecha_final;
            $ServicioExistente->hora_inicio = $Servicio->hora_inicio;
            $ServicioExistente->hora_final = $Servicio->hora_final;
            $ServicioExistente->descripcion = $Servicio->descripcion;
            
           
          
            $ServicioExistente->save();
            
            echo "Servicio actualizada correctamente.";
        } else {
            // Manejar el caso donde la Servicio no existe en la base de datos
            echo "La Servicio no existe en la base de datos.";
        }
    }

    public function DeleteServicio(String $id) : void{
        if(is_null($id) || empty($id)){
            throw new Exception("El ID de la Servicio no puede ser Nulo al eliminar ");
        }
     
        $Servicio = $this->FindServicioById($id);
        try{
            $Servicio->delete();
        }catch(Exception $eror){
            throw new Exception("Error: Error al eliminar el Servicio con ID $id");
        }
    }
    
    public function GetAllServicios() : array{
        return Servicio::all();
    }
}