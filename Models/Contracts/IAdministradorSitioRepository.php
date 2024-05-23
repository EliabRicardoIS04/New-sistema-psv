<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/entities/AdministradorSitio.php";

interface IAdministradorSitioRepository{

    public function SaveAdministradorSitio(AdministradorSitio $AdministradorSitio) : void;
    public function FindAdministradorSitioById(String $id) : AdministradorSitio;
    public function UpdateAdministradorSitio(AdministradorSitio $AdministradorSitio) : void;
    public function DeleteAdministradorSitio(String $id) : void;
    public function GetAllAdministradorSitios() : array;
    public function AccessLogin(String $correo, String $contrasena) : bool;
}