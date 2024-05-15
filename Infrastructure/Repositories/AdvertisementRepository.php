<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/Entities/Advertisement.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/Contracts/IAdvertisementRepository.php";

class AdvertisementRepository implements IAdvertisementRepository{

    public function __constructor(){

    }

    public function SaveAdvertisement(Advertisement $Advertisement) : void{
        if(is_null($Advertisement)){
            throw new Exception("El Advertisement no puede ser Null al Guardar");
        }
        try{
            $Advertisement->save();
        }catch(Exception $error){
            $message = $error->getMessage();
            if(strstr($message, "Duplicate")){
                throw new Exception("Error: Ya existe un Advertisement con ID $Advertisement->Advertisement_id");
            }
            throw new Exception("Error: No fue posible guardar el Advertisement: ".$error->getCode());
           
        }
    }
    
    public function FindAdvertisementById(String $id) : Advertisement{
        if(is_null($id) || empty($id)){
            throw new Exception("El ID de la Advertisement no puede ser Nulo al buscar ");
        }
        try{
           return Advertisement::find(array("publicidad_id" => $id));
        }catch(Exception $error){
            throw new Exception("Error: El Advertisement con ID $id no existe".$error->getMessage());
        }
    }

    public function UpdateAdvertisement(Advertisement $Advertisement) : void{
        if(is_null($Advertisement)){
            throw new Exception("La Advertisement no puede ser Null al Actualizar");
        }
        
       
        $AdvertisementExistente = $this->FindAdvertisementById($Advertisement->publicidad_id);
        if($AdvertisementExistente){
            // Actualizar los atributos de la Advertisement existente
            //$AdvertisementExistente->CEDULA = $Advertisement->CEDULA;
            $AdvertisementExistente->nombre = $Advertisement->nombre;
            $AdvertisementExistente->fecha_ingreso = $Advertisement->fecha_ingreso;
            $AdvertisementExistente->fecha_eliminacion = $Advertisement->fecha_eliminacion;
            $AdvertisementExistente->direccion_imagen = $Advertisement->direccion_imagen;
            
           
          
            $AdvertisementExistente->save();
            
            echo "Advertisement actualizada correctamente.";
        } else {
            // Manejar el caso donde la Advertisement no existe en la base de datos
            echo "La publicidad no existe en la base de datos.";
        }
    }

    public function DeleteAdvertisement(String $id) : void{
        if(is_null($id) || empty($id)){
            throw new Exception("El ID de la Advertisement no puede ser Nulo al eliminar ");
        }
     
        $Advertisement = $this->FindAdvertisementById($id);
        try{
            $Advertisement->delete();
        }catch(Exception $eror){
            throw new Exception("Error: Error al eliminar el Advertisement con ID $id");
        }
    }
    
    public function GetAllAdvertisements() : array{
        return Advertisement::all();
    }
}