<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/entities/Servicio.php";

interface IServicioRepository{

    public function SaveServicio(Servicio $Servicio) : void;
    public function FindServicioById(String $id) : Servicio;
    public function UpdateServicio(Servicio $Servicio) : void;
    public function DeleteServicio(String $id) : void;
    public function GetAllServicios() : array;
}