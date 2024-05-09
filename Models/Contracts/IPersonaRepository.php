<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/entities/Persona.php";

interface IPersonaRepository{

    public function SavePersona(Persona $persona) : void;
    public function FindPersonaById(String $id) : Persona;
    public function UpdatePersona(Persona $persona) : void;
    public function DeletePersona(String $id) : void;
    public function GetAllPersonas() : array;
}