<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/Entities/Persona.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/Contracts/IPersonaRepository.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Infrastructure/Repositories/PersonaRepository.php";


// /Infrastructure/Repositories/PersonaRepository.php

 $repository = new PersonaRepository();
 $persona = new Persona();
 $p = new Persona();
 $p1 = new Persona();
 $p2 = new Persona();
 

 //test Save
 /*$p1->cedula = 369;
 $p1->nombres = "willi MARCOS";
 $p1->apellidos = "perso RIOS";
 $p1->correo = "car@hotmail.com";
 $p1->contrasena = "sd";
 $p1->usuario = "wiliii34";

@$repository->SavePersona($p1);*/

 /*try {
    $persona = @$repository->FindPersonaById("321");
    echo $persona->cedula;
    echo $persona->nombres;
    
   
 } catch (Exception $error) {
    echo $error->getMessage();
 }*/

 //test findById
 try {
  $persona = @$repository->FindPersonaByCorreo("eliabrios@gmail.com");
  echo $persona->cedula;
  echo $persona->nombres;
  
 
} catch (Exception $error) {
  echo $error->getMessage();
}

//testeo Update
/*
$p2->cedula = 866;
$p2->nombres = "Luis ARIAS";
$p2->apellidos = "MARTINEZ LOPEZ";
$p2->correo = "luis@outlook.co";
$p->usuario = "ldfdffd";
try {
  $repository->UpdatePersona($p2);
 
} catch (Exception $error) {
  echo $error->getMessage();
}*/




//testeo delete
/*
try{
  $repository->DeletePersona("369");

}catch(Exception $error){
  echo $error->getMessage();
  
}*/


//testeo getAll

/*$personas = array();

try{
  @$personas = @$repository->GetAllPersonas();

  var_dump($personas);
}catch(Exception $error){
    echo $error->getMessage();
}*/


