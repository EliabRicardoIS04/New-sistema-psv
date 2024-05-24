<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/Entities/AdministradorSitio.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/Contracts/IAdministradorSitioRepository.php";

class AdministradorSitioRepository implements IAdministradorSitioRepository{

    public function __constructor(){
        echo "ejecutando el constructor de AdministradorSitioRepository";
    }

    public function SaveAdministradorSitio(AdministradorSitio $AdministradorSitio) : void{
        if(is_null($AdministradorSitio)){
            throw new Exception("El AdministradorSitio no puede ser Null al Guardar");
        }
        try{
            $AdministradorSitio->save();
            echo "admin agregado";
        }catch(Exception $error){
            $message = $error->getMessage();
            if(strstr($message, "Duplicate")){
                throw new Exception("Error: Ya existe un AdministradorSitio con ID $AdministradorSitio->administrador_sitio_id");
            }
            throw new Exception("Error: No fue posible guardar el AdministradorSitio: ".$error->getCode());
           
        }
    }
    
    public function FindAdministradorSitioById(String $id) : AdministradorSitio{
        if(is_null($id) || empty($id)){
            throw new Exception("El ID de la AdministradorSitio no puede ser Nulo al buscar ");
        }
        try{
           return AdministradorSitio::find(array("id" => $id));
        }catch(Exception $error){
            throw new Exception("Error: El AdministradorSitio con ID $id no existe");
        }
    }

    public function UpdateAdministradorSitio(AdministradorSitio $AdministradorSitio) : void{
        if(is_null($AdministradorSitio)){
            throw new Exception("La AdministradorSitio no puede ser Null al Actualizar");
        }
        
       
        $AdministradorSitioExistente = $this->FindAdministradorSitioById($AdministradorSitio->id);
        if($AdministradorSitioExistente){
            // Actualizar los atributos de la AdministradorSitio existente
            //$AdministradorSitioExistente->CEDULA = $AdministradorSitio->CEDULA;
            $AdministradorSitioExistente->sueldo = $AdministradorSitio->sueldo;
            $AdministradorSitioExistente->horario = $AdministradorSitio->horario;
            
           
          
            $AdministradorSitioExistente->save();
            
            echo "AdministradorSitio actualizada correctamente.";
        } else {
            // Manejar el caso donde la AdministradorSitio no existe en la base de datos
            echo "La AdministradorSitio no existe en la base de datos.";
        }
    }

    public function DeleteAdministradorSitio(String $id) : void{
        if(is_null($id) || empty($id)){
            throw new Exception("El ID de la AdministradorSitio no puede ser Nulo al eliminar ");
        }
     
        $AdministradorSitio = $this->FindAdministradorSitioById($id);
        try{
            $AdministradorSitio->delete();
        }catch(Exception $eror){
            throw new Exception("Error: Error al eliminar el AdministradorSitio con ID $id");
        }
    }
    
    public function GetAllAdministradorSitios() : array{
        return AdministradorSitio::all();
    }

    public function AccessLogin(String $correo, String $contrasena) : bool{
        $personaRepo = new PersonaRepository();

        $persona = new Persona();
        try{
        $persona = $personaRepo->FindPersonaByCorreo($correo);
        if ($persona && $persona->getContrasena() === $contrasena) {
            echo "Administrador encontrado";
            return true;
        } else {
            echo "Administrador no encontrado";
            return false;
        }
        } catch (Exception $e) {
            echo $e->getMessage();
            return false;
        }
    }
}