<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/Entities/Shift.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/Contracts/IShiftRepository.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Infrastructure/Repositories/ShiftRepository.php";

$repository = new ShiftRepository();

//$r = new ITurnoRepository();

$t = new Shift();


$t->jornada = "noche";
$t->hora_inicio = "18:00:00";
$t->hora_fin = "3:00:00";
$t->fecha = "2015/01/25";


//testeo guardar

try {
    $repository->SaveShift($t);
} catch (Exception $e) {
    echo $e->getMessage();
}

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
/*
  try{
   $p = $repository->GetAllTurnos();
   print_r($p);

  }catch(Exception $e){
   echo $e->getMessage();
  }*/