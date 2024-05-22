<?php

include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/entities/Shift.php";

interface IShiftRepository{
    public function SaveShift(Shift $Shift):void;
    public function UpdateShift(Shift $Shift): void;
    public function FindShiftById(String $Shift_id): Shift;
    public function DeleteShift(String $Shift_id):void;
    public function GetAllShifts(): array;
}