<?php

session_start();

include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/Entities/Shift.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/Contracts/IShiftRepository.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Infrastructure/Repositories/ShiftRepository.php";

class ShiftController{

    public function recuperar_accion(){
        $accion =  @$_REQUEST["accion"];
        switch ($accion) {
            case 'Guardar':
                $this->save_turno();
                break;
            case 'Buscar':
                $this->buscar_turno();
                break;
            case 'Editar':
                $this->editar_turno();
                break;
            case 'Eliminar':
                $this->eliminar_turno();
                break; 
            case 'listar_todo':
                $this->listar_todo_turno();
                break;  
            case 'Consultar':
                $this->listar_por_campo();
                break; 
            default:
                # code...
                break;
        }

    }


    public function save_turno(){
        
        
        echo @$_REQUEST['jornada'];
        $turno = new Shift();
      
        $turno->jornada      = @$_REQUEST['jornada'];
        $turno->hora_inicio  = @$_REQUEST['horaInicio'];
        $turno->hora_fin     = @$_REQUEST['horaFin'];
        $turno->fecha        = @$_REQUEST['fecha'];
        echo $turno->hora_inicio;

        if( $turno->jornada == "" ||  $turno->hora_inicio== "" ||
        $turno->hora_fin == "" ||  $turno->fecha=="" ){
            echo "algunos de los campos estan vacios";
        }else{
            try {
                $repository = new ShiftRepository();
                $repository->SaveShift($turno);
                header("Location: ../views/turno/agregar.php?msg=Turno+Agregado+con+éxito");
                exit();
            } catch(Exception $error) {
                header("Location: ../views/turno/agregar.php?msg=".$error->getMessage());
                exit();
            }
        }

    }


    public function buscar_turno(){
        
    }
    public function editar_turno(){
        
    }
    public function eliminar_turno(){
        
    }
    public function listar_todo_turno(){
        
    }
    public function listar_por_campo(){
        
    }
  
}

$n = new ShiftController();
$n->recuperar_accion();
