<?php

include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/entities/Turno.php";

interface ITurnoRepository{
    public function SaveTurno(Turno $Turno):void;
    public function UpdateTurno(Turno $Turno): void;
    public function FindTurnoById(String $turno_id): Turno;
    public function DeleteTurno(String $turno_id):void;
    public function GetAllTurnos(): array;
}