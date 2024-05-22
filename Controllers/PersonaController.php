<?php

include_once $_SERVER["DOCUMENT_ROOT"] . "/proaula/Models/Entities/EmpleadoServicio.php";
include_once $_SERVER["DOCUMENT_ROOT"] . "/proaula/Models/Entities/TrabajadorRecurso.php";
include_once $_SERVER["DOCUMENT_ROOT"] . "/proaula/Models/Entities/Cliente.php";
include_once $_SERVER["DOCUMENT_ROOT"] . "/proaula/Models/Entities/Persona.php";

include_once $_SERVER["DOCUMENT_ROOT"] . "/proaula/Infrastructure/Repositories/PersonaRepository.php";
include_once $_SERVER["DOCUMENT_ROOT"] . "/proaula/Infrastructure/Repositories/ClienteRepository.php";
include_once $_SERVER["DOCUMENT_ROOT"] . "/proaula/Infrastructure/Repositories/TrabajadorRecursoRepository.php";
include_once $_SERVER["DOCUMENT_ROOT"] . "/proaula/Infrastructure/Repositories/EmpleadoServicioRepository.php";


class PersonaController
{

    public static function accion (){
        $accion =  @$_REQUEST["accion"];
        switch ($accion) {
            case 'Registrar':
                self::SaveProduct();
                break;
            case 'Buscar':
                self::FindProduct();
                break;
            case 'Editar':
                self::UpdateProduct();
                break;
            case 'Eliminar':
                self::DeteleProduct();
                break; 
            case 'listar_todo':
                self::AllProduct();
                break;  
            case 'Consultar':
                self::GetProductByCampo();
                break; 
            default:
                # code...
                break;
        }

    }

    public function ClienteRegister()
    {

        $persona            = new Persona();
        $cliente            = new Cliente();
        $ClienteRepository  = new ClienteRepository();
        $PersonaRepository  = new PersonaRepository();


        $persona->cedula         = @$_REQUEST['cedula'];
        $persona->nombres        = @$_REQUEST['nombres'];
        $persona->apellidos      = @$_REQUEST['apellidos'];
        $persona->correo         = @$_REQUEST['correo'];
        $persona->contrasena     = @$_REQUEST['contrasena'];
        $persona->usuario        = @$_REQUEST['usuario'];
        $persona->celular        = @$_REQUEST['celular'];
        $persona->telefono       = @$_REQUEST['telefono'];

        $cliente->cliente_id     = $persona->cedula;
        $cliente->ciudad         = @$_REQUEST['ciudad'];
        $cliente->departamento   = @$_REQUEST['departamento'];
        $cliente->barrio         = @$_REQUEST['barrio'];

        if (
            $cliente->barrio == "" ||  $cliente->departamento == "" || $cliente->ciudad == "" ||   $cliente->cliente_id == ""
            ||    $persona->telefono == "" ||    $persona->celular == "" ||  $persona->usuario == "" ||  $persona->contrasena == ""
            ||  $persona->correo  == "" ||  $persona->apellidos  == "" ||  $persona->nombres == "" ||  $persona->cedula == ""
        ) {

            echo "Hay datos que estan vacios";
        } else {
            try {
                $PersonaRepository->SavePersona($persona);
                $ClienteRepository->SaveCliente($cliente);
            } catch (Exception $e) {
                echo $e->getMessage();
            }
            echo "Cliente Agregado con Exito";
        }
    }
}

