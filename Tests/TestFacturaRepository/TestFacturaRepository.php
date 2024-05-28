<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/Entities/Factura.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/Contracts/IFactura.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Infrastructure/Repositories/FacturaRepository.php";



$repo = new FacturaRepository();
$factura = new Factura();