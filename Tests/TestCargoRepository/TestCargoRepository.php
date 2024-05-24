<?php

include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/Entities/Cargo.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/Contracts/ICargoRepository.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Infrastructure/Repositories/CargoRepository.php";

//test en Save
/*

$cargo = new Cargo();
$cargo->nombre = "vigilante";
$cargo->empleado_servicio_id = 321; 
$c = new Cargo();

try{
    $repo->SaveCargo($cargo);
}catch(Exception $e){
    echo $e->getMessage();
}
*/

//testeo FindbyId

/*
try{
   $c = $repo->FindCargoById("1");
   echo $c->nombre;
}catch(Exception $e){
    echo $e->getMessage();
}*/


//testeo update
$repo = new CargoRepository();
/*
try{
    $cargo = new Cargo();
    $cargo->cargo_id = 1;
    echo $cargo->cargo_id;
    $cargo->nombre = "cuidador de dinero money";
    $cargo->empleado_servicio_id = 321;
    $repo->UpdateCargo($cargo);
}catch(Exception $e){
    echo $e->getMessage();
}*/

//testeo delete
/*
try{
    $repo->DeleteCargo('5');
}catch(Exception $e){
    echo $e->getMessage();
}*/


///testeo GellAll

$cargos = array();

try{
    
    $cargos = $repo->GetAllCargos();
    print_r($cargos);

}catch(Exception $e){
    echo $e->getMessage();
}