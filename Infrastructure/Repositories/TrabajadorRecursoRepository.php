<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/Entities/TrabajadorRecurso.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/Contracts/ITrabajadorRecursoRepository.php";

class TrabajadorRecursoRepository implements ITrabajadorRecursoRepository{

    public function __constructor(){

    }

    public function SaveTrabajadorRecurso(TrabajadorRecurso $TrabajadorRecurso) : void{
        if(is_null($TrabajadorRecurso)){
            throw new Exception("El TrabajadorRecurso no puede ser Null al Guardar");
        }
        try{
            $TrabajadorRecurso->save();
        }catch(Exception $error){
            $message = $error->getMessage();
            if(strstr($message, "Duplicate")){
                throw new Exception("Error: Ya existe un TrabajadorRecurso con ID $TrabajadorRecurso->TrabajadorRecurso_id");
            }
            throw new Exception("Error: No fue posible guardar el TrabajadorRecurso: ".$error->getCode());
           
        }
    }
    
    public function FindTrabajadorRecursoById(String $id) : TrabajadorRecurso{
        if(is_null($id) || empty($id)){
            throw new Exception("El ID de la TrabajadorRecurso no puede ser Nulo al buscar ");
        }
        try{
           return TrabajadorRecurso::find(array("TrabajadorRecurso_id" => $id));
        }catch(Exception $error){
            throw new Exception("Error: El TrabajadorRecurso con ID $id no existe");
        }
    }

    public function UpdateTrabajadorRecurso(TrabajadorRecurso $TrabajadorRecurso) : void{
        if(is_null($TrabajadorRecurso)){
            throw new Exception("La TrabajadorRecurso no puede ser Null al Actualizar");
        }
        
       
        $TrabajadorRecursoExistente = $this->FindTrabajadorRecursoById($TrabajadorRecurso->id);
        if($TrabajadorRecursoExistente){
            // Actualizar los atributos de la TrabajadorRecurso existente
            //$TrabajadorRecursoExistente->CEDULA = $TrabajadorRecurso->CEDULA;
            $TrabajadorRecursoExistente->sueldo = $TrabajadorRecurso->sueldo;
            $TrabajadorRecursoExistente->jornada = $TrabajadorRecurso->jornada;
            $TrabajadorRecursoExistente->fechaIngresoSistema = $TrabajadorRecurso->fechaIngresoSistema;
            $TrabajadorRecursoExistente->horaIngresoSistema = $TrabajadorRecurso->horaIngresoSistema;
            
           
          
            $TrabajadorRecursoExistente->save();
            
            echo "TrabajadorRecurso actualizada correctamente.";
        } else {
            // Manejar el caso donde la TrabajadorRecurso no existe en la base de datos
            echo "La TrabajadorRecurso no existe en la base de datos.";
        }
    }

    public function DeleteTrabajadorRecurso(String $id) : void{
        if(is_null($id) || empty($id)){
            throw new Exception("El ID de la TrabajadorRecurso no puede ser Nulo al eliminar ");
        }
     
        $TrabajadorRecurso = $this->FindTrabajadorRecursoById($id);
        try{
            $TrabajadorRecurso->delete();
        }catch(Exception $eror){
            throw new Exception("Error: Error al eliminar el TrabajadorRecurso con ID $id");
        }
    }
    
    public function GetAllTrabajadorRecursos() : array{
        return TrabajadorRecurso::all();
    }
}