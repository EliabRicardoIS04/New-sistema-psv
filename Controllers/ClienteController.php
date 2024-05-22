<?php

include_once $_SERVER["DOCUMENT_ROOT"] . "/proaula/Models/Entities/EmpleadoServicio.php";
include_once $_SERVER["DOCUMENT_ROOT"] . "/proaula/Models/Entities/TrabajadorRecurso.php";
include_once $_SERVER["DOCUMENT_ROOT"] . "/proaula/Models/Entities/Cliente.php";
include_once $_SERVER["DOCUMENT_ROOT"] . "/proaula/Models/Entities/Persona.php";

include_once $_SERVER["DOCUMENT_ROOT"] . "/proaula/Infrastructure/Repositories/PersonaRepository.php";
include_once $_SERVER["DOCUMENT_ROOT"] . "/proaula/Infrastructure/Repositories/ClienteRepository.php";
include_once $_SERVER["DOCUMENT_ROOT"] . "/proaula/Infrastructure/Repositories/TrabajadorRecursoRepository.php";
include_once $_SERVER["DOCUMENT_ROOT"] . "/proaula/Infrastructure/Repositories/EmpleadoServicioRepository.php";


class ClienteController
{

    public function accion (){
        $accion =  @$_REQUEST["accion"];
        switch ($accion) {
            case 'Registrar':
                $this->ClienteRegister();
                break;
            case 'Buscar':
                 $this->FindProduct();
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
            case 'login':
                $this->Accesslogin();
                break;
            default:
                # code...
                break;
        }

    }

    public function AccessLogin(){
        $ClienteRepository  = new ClienteRepository();

        $correo     = @$_REQUEST['correo'];
        $contrasena = @$_REQUEST['contrasena'];

        if(empty(trim($correo)) || empty(trim($contrasena))){
            echo "los campos estan vacios, no llego nada al controlador";
        }else{
            try{
                if($ClienteRepository->AccesoLogin($correo,$contrasena) == 1){
                    header("Location: ../Views/cliente/login.php?msg=Acceso+otorgado");
                    exit();
                }

            }catch(Exception $e){
                header("Location: ../Views/cliente/login.php?msg=Acceso+denegado".$e);
                exit();
            }
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

    
     
        $datos = array();
        $datos = [$persona->cedula, $persona->nombres, $persona->apellidos,$persona->correo ,$persona->contrasena, $persona->usuario ,$persona->celular
        , $persona->telefono ,$cliente->cliente_id ,$cliente->ciudad , $cliente->departamento , $cliente->barrio];

      
        foreach($datos as $indic => $valo){
            echo $valo;
        }

        foreach($datos as $indice => $valor){
            if (empty(trim($valor))) {
                $posiciones_vacias[] = $indice;
            }
        }
        if (!empty($posiciones_vacias)) {
            echo "Los siguientes índices tienen valores vacíos: " . implode(", ", $posiciones_vacias);
        } else {
            try {
                $PersonaRepository->SavePersona($persona);
                $ClienteRepository->SaveCliente($cliente);
                header("Location: ../views/Login/RegisterCliente.php?msg=Agregado+con+éxito");
                exit();

            } catch (Exception $error) {
                header("Location: ../views/Login/RegisterCliente.php?msg=".$error->getMessage());
                exit();
            }
          
        }


        /*
        if(
            $cliente->barrio == "" ||  $cliente->departamento == "" || $cliente->ciudad == "" ||   $cliente->cliente_id == ""
            ||    $persona->telefono == "" ||    $persona->celular == "" ||  $persona->usuario == "" ||  $persona->contrasena == ""
            ||  $persona->correo  == "" ||  $persona->apellidos  == "" ||  $persona->nombres == "" ||  $persona->cedula == ""
        ) {

            

            header("Location: ../views/Login/RegisterCliente.php?msg=Hay+Datos+Vacios");

                exit();
        } else {
            try {
                $PersonaRepository->SavePersona($persona);
                $ClienteRepository->SaveCliente($cliente);
                header("Location: ../views/Login/RegisterCliente.php?msg=Agregado+con+éxito");
                exit();

            } catch (Exception $error) {
                header("Location: ../views/Login/RegisterCliente.php?msg=".$error->getMessage());
                exit();
            }
           */
    }


}

$controller = new ClienteController();
$controller->accion();
