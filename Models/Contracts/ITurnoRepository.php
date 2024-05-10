<?php

include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/entities/Turno.php";

interface ITurnoRepository{
    public function SaveTurno($turno):void;
    public function UpdateTurno($turno): void;
    public function FindTurnoById(String $turno_id): Turno;
    public function DeleteTurno(String $turno_id):void;
    public function GellAllTurnos(): array;
}