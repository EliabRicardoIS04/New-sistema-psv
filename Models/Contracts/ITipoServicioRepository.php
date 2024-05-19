<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/entities/TipoServicio.php";

interface ITipoServicioRepository{

    public function SaveTipoServicio(TipoServicio $TipoServicio) : void;
    public function FindTipoServicioById(String $id) : TipoServicio;
    public function UpdateTipoServicio(TipoServicio $TipoServicio) : void;
    public function DeleteTipoServicio(String $id) : void;
    public function GetAllTipoServicios() : array;
}