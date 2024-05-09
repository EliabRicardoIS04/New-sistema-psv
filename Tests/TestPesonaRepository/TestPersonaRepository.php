<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/Entities/Persona.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/Contracts/IPersonaRepository.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Infrastructure/Repositories/PersonaRepository.php";


// /Infrastructure/Repositories/PersonaRepository.php

 $repository = new PersonaRepository();
 $persona = new Persona();
 /*$persona->cedula = 321;
 $persona->nombres = "ELIAB RICARDO";
 $persona->apellidos = "JARABA RIOS";
 $persona->correo = "eliabrios@gmail.com";
 $persona->contrasena = "Abcd**";
 $persona->usuario = "eliabj";*/



 try {
    $persona = @$repository->FindPersonaById("321");
    echo $persona->cedula;
    echo $persona->nombres;
    
   
 } catch (Exception $error) {
    echo $error->getMessage();
 }
