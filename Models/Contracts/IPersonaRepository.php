<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/entities/Persona.php";

interface IPersonaRepository{

    public function SavePersona(Persona $Persona) : void;
    public function FindPersonaById(String $id) : Persona;
    public function FindPersonaByCorreo(String $correo) : Persona;
    public function FindPersonaByContrasena(String $contrasena) : Persona;
    public function UpdatePersona(Persona $Persona) : void;
    public function DeletePersona(String $id) : void;
    public function GetAllPersonas() : array;
}