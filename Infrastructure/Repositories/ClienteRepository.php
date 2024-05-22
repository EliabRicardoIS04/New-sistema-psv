<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/Entities/Cliente.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/Contracts/IClienteRepository.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Infrastructure/Repositories/PersonaRepository.php";

class ClienteRepository implements IClienteRepository{

    public function __constructor(){

    }

    public function SaveCliente(Cliente $Cliente) : void{
        if(is_null($Cliente)){
            throw new Exception("El Cliente no puede ser Null al Guardar");
        }
        try{
            $Cliente->save();
        }catch(Exception $error){
            $message = $error->getMessage();
            if(strstr($message, "Duplicate")){
                throw new Exception("Error: Ya existe un Cliente con ID $Cliente->Cliente_id");
            }
            throw new Exception("Error: No fue posible guardar el Cliente: ".$error->getCode());
           
        }
    }
    
    public function FindClienteById(String $id) : Cliente{
        if(is_null($id) || empty($id)){
            throw new Exception("El ID de la Cliente no puede ser Nulo al buscar ");
        }
        try{
           return Cliente::find(array("Cliente_id" => $id));
        }catch(Exception $error){
            throw new Exception("Error: El Cliente con ID $id no existe");
        }
    }

    public function UpdateCliente(Cliente $Cliente) : void{
        if(is_null($Cliente)){
            throw new Exception("La Cliente no puede ser Null al Actualizar");
        }
        
       
        $ClienteExistente = $this->FindClienteById($Cliente->id);
        if($ClienteExistente){
            // Actualizar los atributos de la Cliente existente
            //$ClienteExistente->CEDULA = $Cliente->CEDULA;
            $ClienteExistente->ciudad = $Cliente->ciudad;
            $ClienteExistente->departamento = $Cliente->departamento;
            $ClienteExistente->barrio = $Cliente->barrio;
            
           
          
            $ClienteExistente->save();
            
            echo "Cliente actualizada correctamente.";
        } else {
            // Manejar el caso donde la Cliente no existe en la base de datos
            echo "La Cliente no existe en la base de datos.";
        }
    }

    public function DeleteCliente(String $id) : void{
        if(is_null($id) || empty($id)){
            throw new Exception("El ID de la Cliente no puede ser Nulo al eliminar ");
        }
     
        $Cliente = $this->FindClienteById($id);
        try{
            $Cliente->delete();
        }catch(Exception $eror){
            throw new Exception("Error: Error al eliminar el Cliente con ID $id");
        }
    }
    
    public function GetAllClientes() : array{
        return Cliente::all();
    }

    public function AccesoLogin(String $correo,String $contrasena): bool{
        $personaRepo = new PersonaRepository();

        $persona = new Persona();
        try{
        $persona = $personaRepo->FindPersonaByCorreo($correo);
        if ($persona && $persona->getContrasena() === $contrasena) {
            echo "cliente encontrado";
            return true;
        } else {
            echo "cliente no encontrado";
            return false;
        }
        } catch (Exception $e) {
            echo $e->getMessage();
            return false;
        }

    }
}