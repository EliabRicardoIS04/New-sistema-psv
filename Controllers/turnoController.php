<?php

session_start();

include_once '../models/DAOTurno.php';
include_once '../models/Turno.php';

class turnoController {

    public function recuperar_accion(){
        $accion =  @$_REQUEST["accion"];
        switch ($accion) {
            case 'Guardar':
                $this->guardar_turno();
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


    public function guardar_turno(){
        $id          = $_REQUEST['turnoId'];
        $jornada     = $_REQUEST['jornada'];
        $horainicio  = $_REQUEST['horaInicio'];
        $horafin     = $_REQUEST['horaFin'];
        $fecha       = $_REQUEST['fecha'];


        $turno = new Turno();
        $turno->TURNO_ID = $id;
        $turno->JORNADA = $jornada;
        $turno->HORA_INICIO = $horainicio;
        $turno->HORA_FIN = $horafin;
        $turno->FECHA = $fecha;

        try {
            
            header("Location: ../views/turno/agregar.php?msg=Turno+Agregado+con+éxito");
            exit();
        } catch(Exception $error) {
            header("Location: ../views/turno/agregar.php?msg=".$error->getMessage());
            exit();
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

$n = new turnoController();
$n->recuperar_accion();
