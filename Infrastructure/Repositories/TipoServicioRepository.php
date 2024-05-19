<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/Entities/TipoServicio.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/Contracts/ITipoServicioRepository.php";

class TipoServicioRepository implements ITipoServicioRepository{

    public function __constructor(){

    }

    public function SaveTipoServicio(TipoServicio $TipoServicio) : void{
        if(is_null($TipoServicio)){
            throw new Exception("El TipoServicio no puede ser Null al Guardar");
        }
        try{
            $TipoServicio->save();
        }catch(Exception $error){
            $message = $error->getMessage();
            if(strstr($message, "Duplicate")){
                throw new Exception("Error: Ya existe un TipoServicio con ID $TipoServicio->TipoServicio_id");
            }
            throw new Exception("Error: No fue posible guardar el TipoServicio: ".$error->getCode());
           
        }
    }
    
    public function FindTipoServicioById(String $id) : TipoServicio{
        if(is_null($id) || empty($id)){
            throw new Exception("El ID de la TipoServicio no puede ser Nulo al buscar ");
        }
        try{
           return TipoServicio::find(array("TipoServicio_id" => $id));
        }catch(Exception $error){
            throw new Exception("Error: El TipoServicio con ID $id no existe");
        }
    }

    public function UpdateTipoServicio(TipoServicio $TipoServicio) : void{
        if(is_null($TipoServicio)){
            throw new Exception("La TipoServicio no puede ser Null al Actualizar");
        }
        
       
        $TipoServicioExistente = $this->FindTipoServicioById($TipoServicio->id);
        if($TipoServicioExistente){
            // Actualizar los atributos de la TipoServicio existente
            //$TipoServicioExistente->CEDULA = $TipoServicio->CEDULA;
            $TipoServicioExistente->tipoServicio = $TipoServicio->TipoServicio;
            
            
           
          
            $TipoServicioExistente->save();
            
            echo "TipoServicio actualizada correctamente.";
        } else {
            // Manejar el caso donde la TipoServicio no existe en la base de datos
            echo "La TipoServicio no existe en la base de datos.";
        }
    }

    public function DeleteTipoServicio(String $id) : void{
        if(is_null($id) || empty($id)){
            throw new Exception("El ID de la TipoServicio no puede ser Nulo al eliminar ");
        }
     
        $TipoServicio = $this->FindTipoServicioById($id);
        try{
            $TipoServicio->delete();
        }catch(Exception $eror){
            throw new Exception("Error: Error al eliminar el TipoServicio con ID $id");
        }
    }
    
    public function GetAllTipoServicios() : array{
        return TipoServicio::all();
    }
}