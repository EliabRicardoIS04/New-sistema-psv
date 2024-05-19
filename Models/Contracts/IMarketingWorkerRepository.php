<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/entities/MarketingWorker.php";

interface IMarketingWorkerRepository{

    public function SaveMarketingWorker(MarketingWorker $MarketingWorker) : void;
    public function FindMarketingWorkerById(String $id) : MarketingWorker;
    public function UpdateMarketingWorker(MarketingWorker $MarketingWorker) : void;
    public function DeleteMarketingWorker(String $id) : void;
    public function GetAllMarketingWorkers() : array;
}