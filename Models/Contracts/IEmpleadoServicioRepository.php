<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/entities/EmpleadoServicio.php";

interface IEmpleadoServicioRepository{

    public function SaveEmpleadoServicio(EmpleadoServicio $EmpleadoServicio) : void;
    public function FindEmpleadoServicioById(String $id) : EmpleadoServicio;
    public function UpdateEmpleadoServicio(EmpleadoServicio $EmpleadoServicio) : void;
    public function DeleteEmpleadoServicio(String $id) : void;
    public function GetAllEmpleadoServicios() : array;
}