<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/Entities/Advertisement.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/Contracts/IAdvertisementRepository.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Infrastructure/Repositories/AdvertisementRepository.php";


$repo = new AdvertisementRepository();
$publicidad = new Advertisement();
$p1 = new Advertisement();

//testeo Save

$publicidad->publicidad_id = 744;
$publicidad->trabajador_marketing_id = 752;
$publicidad->nombre = "camara en 50% descuento";
$publicidad->fecha_ingreso = "2024/01/21";
$publicidad->fecha_eliminacion = "2024/02/25";
$publicidad->direccion_imagen = "C:\xampp\htdocs\proaula\Views\img\cara.jpeg";
/*
try {
    $repo->SaveAdvertisement($publicidad);
} catch (\Exception $e) {
    echo $e->getMessage();
}
*/

//testeo findById
/*
try{
    $p1 = $repo->FindAdvertisementById('744');
    echo $p1->direccion_imagen;


}catch(Exception $e){
    echo $e->getMessage();
}
*/
/*
//testeo update
$p1->publicidad_id = 744;
$p1->nombre = "mesa";
$p1->fecha_eliminacion = "2023/12/01";

try{
    
@$repo->UpdateAdvertisement($p1);

}catch(Exception $e){
    echo $e->getMessage();
}*/
/*
//testeo delete
try{
    
    @$repo->DeleteAdvertisement("744");
    
    }catch(Exception $e){
        echo $e->getMessage();
    }
*/

//testeo GetAll
$publis = array();

try{
   $publis =  $repo->GetAllAdvertisements();
   print_r($publis);
}catch(Exception $e){
    echo $e->getMessage();
}