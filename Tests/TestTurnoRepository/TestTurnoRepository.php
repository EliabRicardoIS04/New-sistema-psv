<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/Entities/Turno.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/Contracts/ITurnoRepository.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Infrastructure/Repositories/TurnoRepository.php";

$repository = new TurnoRepository();

//$r = new ITurnoRepository();

$t = new Turno();

$t->turno_id = 6566;
$t->jornada = "tarde";
$t->hora_inicio = "7:00:00";
$t->hora_fin = "3:00:00";
$t->fecha = "1999/01/25";


//testeo guardar
/*
try {
    $repository->SaveTurno($t);
} catch (Exception $e) {
    echo $e->getMessage();
}*/

//test update
/*
try {
    $repository->UpdateTurno($t);
} catch (Exception $e) {
    echo $e->getMessage();
}*/

//testeo delete
/*
try {
    $repository->DeleteTurno("345");
} catch (Exception $e) {
    echo $e->getMessage();
}*/


$p = array();

  //testeo getAll

  try{
   $p = $repository->GetAllTurnos();
   var_dump($p);

  }catch(Exception $e){
   echo $e->getMessage();
  }