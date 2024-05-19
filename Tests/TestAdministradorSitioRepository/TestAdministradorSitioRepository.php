<?php

include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/Entities/AdministradorSitio.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/Contracts/IAdministradorSitioRepository.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Infrastructure/Repositories/AdministradorSitioRepository.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Infrastructure/Repositories/PersonaRepository.php";


$repo = new AdministradorSitioRepository();
$r = new PersonaRepository();
$p = new Persona();
$admin = new AdministradorSitio();
$p->cedula = 5456;
$p->correo = 'mario@.com';
$p->contrasena = '3445';
$p->nombres = "willi nmani";
$p->apellidos = "perso aguas";
$p->usuario = "lsmina";

/*
try {
    $r->SavePersona($p);
} catch (Exception $e) {
    echo $e->getMessage();
}*/

/*
$admin = new AdministradorSitio();

$admin->id = $p->cedula;
$admin->sueldo = 5300000;
$admin->horario = "nocturno";


//$admin->assign_attributes(['id' => 752, 'sueldo' => 5300000, 'horario' => 'nocturno']);
//testeo guardar

try {
    if($repo->SaveAdministradorSitio($admin)){
        echo "guardado";
    };
} catch (Exception $e) {
    $e->getMessage();
}*/

//test findById
/*
 try {
  $r = @$repo->FindAdministradorSitioById("321");
  echo $r->horario;
  echo $r->sueldo;
  
 
} catch (Exception $error) {
  echo $error->getMessage();
}*/

//testeo Update
/*
$admin->id = 321;
$admin->horario = "tarde";
$admin->sueldo = 0;
try {
  $repo->UpdateAdministradorSitio($admin);
 
}catch (Exception $error) {
  echo $error->getMessage();
}*/



//testeo delete
/*
try {
    $repo->DeleteAdministradorSitio("321");
   
  }catch (Exception $error) {
    echo $error->getMessage();
  }*/


  //testeo getAll
/*
$personas = array();

try{
  @$personas = @$repo->GetAllAdministradorSitios();

  var_dump($personas);
}catch(Exception $error){
    echo $error->getMessage();
}*/
