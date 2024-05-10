<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/entities/TrabajadorRecurso.php";

interface ITrabajadorRecursoRepository{

    public function SaveTrabajadorRecurso(TrabajadorRecurso $TrabajadorRecurso) : void;
    public function FindTrabajadorRecursoById(String $id) : TrabajadorRecurso;
    public function UpdateTrabajadorRecurso(TrabajadorRecurso $TrabajadorRecurso) : void;
    public function DeleteTrabajadorRecurso(String $id) : void;
    public function GetAllTrabajadorRecursos() : array;
}