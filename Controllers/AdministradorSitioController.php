<?php


include_once $_SERVER["DOCUMENT_ROOT"] . "/proaula/Infrastructure/Repositories/PersonaRepository.php";
include_once $_SERVER["DOCUMENT_ROOT"] . "/proaula/Infrastructure/Repositories/AdministradorSitioRepository.php";
include_once $_SERVER["DOCUMENT_ROOT"] . "/proaula/Models/Entities/Persona.php";
include_once $_SERVER["DOCUMENT_ROOT"] . "/proaula/Models/Entities/AdministradorSitio.php";

class AdministradorSitioController
{
    public function accion()
    
    {
        $accion =  @$_REQUEST["accion"];
        switch ($accion) {
            case 'Registrar':
                $this->AdminRegister();
                break;
            case 'Buscar':
                //$this->FindProduct();
                break;
            case 'Editar':
                //self::UpdateProduct();
                break;
            case 'Eliminar':
               // self::DeteleProduct();
                break;
            case 'listar_todo':
              //  self::AllProduct();
                break;
            case 'Consultar':
               // self::GetProductByCampo();
                break;
            case 'login':
                $this->Accesslogin();
                break;
            default:
                # code...
                break;
        }
    }
    public function AccessLogin()
    {
        $AdminRepository  = new AdministradorSitioRepository();

        $correo     = @$_REQUEST['correo'];
        $contrasena = @$_REQUEST['contrasena'];

        if (empty(trim($correo)) || empty(trim($contrasena))) {
            echo "los campos estan vacios, no llego nada al controlador";
        } else {
            try {
                if ($AdminRepository->AccessLogin($correo, $contrasena) == 1) {
                    header("Location: ../WebAdmin/?views=principal&msg=Acceso+otorgado");

                    exit();
                } else {
                    header("Location: ../WebAdmin/?views=login&msg=Acceso+denegado");

                }
            } catch (Exception $e) {
                echo $e->getMessage();
                exit();
            }
        }
    }


    public function AdminRegister()
    {

        $persona              = new Persona();
        $Admin                = new AdministradorSitio();
        $AdminRepository      = new AdministradorSitioRepository();
        $PersonaRepository    = new PersonaRepository();


        $persona->cedula         = @$_REQUEST['cedula'];
        $persona->nombres        = @$_REQUEST['nombres'];
        $persona->apellidos      = @$_REQUEST['apellidos'];
        $persona->correo         = @$_REQUEST['correo'];
        $persona->contrasena     = @$_REQUEST['contrasena'];
        $persona->usuario        = @$_REQUEST['usuario'];
        $persona->celular        = @$_REQUEST['celular'];
        $persona->telefono       = @$_REQUEST['telefono'];
    
        $Admin->id               = $persona->cedula;
        $Admin->horario           = @$_REQUEST['horario'];
       
       
        $datos = array();
        $datos = [$persona->cedula, $persona->nombres, $persona->apellidos,$persona->correo ,$persona->contrasena, $persona->usuario ,$persona->celular
        , $persona->telefono ,$Admin->id ,$Admin->horario];

      
        foreach($datos as $indice => $valo){
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
                $AdminRepository->SaveAdministradorSitio($Admin);
                header("Location: ../WebAdmin/?views=login&msg=Registrado+Exitosamente");
                exit();

            } catch (Exception $error) {
                header("Location: ../WebAdmin/?views=AdminRegister&msg=El+Registro+Fallo");
                echo $error->getMessage();
                exit();
            }
          
        }

    }

}

$controlador = new AdministradorSitioController();

$controlador->accion();
