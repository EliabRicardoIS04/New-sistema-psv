<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/Entities/MarketingWorker.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/Contracts/IMarketingWorkerRepository.php";

class MarketingWorkerRepository implements IMarketingWorkerRepository{

    public function __constructor(){

    }

    public function SaveMarketingWorker(MarketingWorker $MarketingWorker) : void{
        if(is_null($MarketingWorker)){
            throw new Exception("El MarketingWorker no puede ser Null al Guardar");
        }
        try{
            $MarketingWorker->save();
        }catch(Exception $error){
            $message = $error->getMessage();
            if(strstr($message, "Duplicate")){
                throw new Exception("Error: Ya existe un MarketingWorker con ID $MarketingWorker->MarketingWorker_id");
            }
            throw new Exception("Error: No fue posible guardar el MarketingWorker: ".$error->getCode());
           
        }
    }
    
    public function FindMarketingWorkerById(String $id) : MarketingWorker{
        if(is_null($id) || empty($id)){
            throw new Exception("El ID de la MarketingWorker no puede ser Nulo al buscar ");
        }
        try{
           return MarketingWorker::find(array("MarketingWorker_id" => $id));
        }catch(Exception $error){
            throw new Exception("Error: El MarketingWorker con ID $id no existe");
        }
    }

    public function UpdateMarketingWorker(MarketingWorker $MarketingWorker) : void{
        if(is_null($MarketingWorker)){
            throw new Exception("La MarketingWorker no puede ser Null al Actualizar");
        }
        
       
        $MarketingWorkerExistente = $this->FindMarketingWorkerById($MarketingWorker->id);
        if($MarketingWorkerExistente){
            // Actualizar los atributos de la MarketingWorker existente
            //$MarketingWorkerExistente->CEDULA = $MarketingWorker->CEDULA;
            $MarketingWorkerExistente->sueldo = $MarketingWorker->sueldo;
            $MarketingWorkerExistente->horario = $MarketingWorker->horario;
            
           
          
            $MarketingWorkerExistente->save();
            
            echo "MarketingWorker actualizada correctamente.";
        } else {
            // Manejar el caso donde la MarketingWorker no existe en la base de datos
            echo "La MarketingWorker no existe en la base de datos.";
        }
    }

    public function DeleteMarketingWorker(String $id) : void{
        if(is_null($id) || empty($id)){
            throw new Exception("El ID de la MarketingWorker no puede ser Nulo al eliminar ");
        }
     
        $MarketingWorker = $this->FindMarketingWorkerById($id);
        try{
            $MarketingWorker->delete();
        }catch(Exception $eror){
            throw new Exception("Error: Error al eliminar el MarketingWorker con ID $id");
        }
    }
    
    public function GetAllMarketingWorkers() : array{
        return MarketingWorker::all();
    }
}