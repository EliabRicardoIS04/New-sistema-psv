<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/entities/Advertisement.php";

interface IAdvertisementRepository{

    public function SaveAdvertisement(Advertisement $Advertisement) : void;
    public function FindAdvertisementById(String $id) : Advertisement;
    public function UpdateAdvertisement(Advertisement $Advertisement) : void;
    public function DeleteAdvertisement(String $id) : void;
    public function GetAllAdvertisements() : array;
}   