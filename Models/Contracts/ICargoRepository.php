<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/entities/Cargo.php";

interface ICargoRepository{

    public function SaveCargo(Cargo $Cargo) : void;
    public function FindCargoById(String $id) : Cargo;
    public function UpdateCargo(Cargo $Cargo) : void;
    public function DeleteCargo(String $id) : void;
    public function GetAllCargos() : array;
}