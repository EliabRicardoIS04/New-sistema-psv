<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/Entities/Factura.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/Contracts/IFacturaRepository.php";

class FacturaRepository implements IFacturaRepository{

    public function __constructor(){

    }

    public function SaveFactura(Factura $Factura) : void{
        if(is_null($Factura)){
            throw new Exception("El Factura no puede ser Null al Guardar");
        }
        try{
            $Factura->save();
        }catch(Exception $error){
            $message = $error->getMessage();
            if(strstr($message, "Duplicate")){
                throw new Exception("Error: Ya existe un Factura con ID $Factura->Factura_id");
            }
            throw new Exception("Error: No fue posible guardar el Factura: ".$error->getCode());
           
        }
    }
    
    public function FindFacturaById(String $id) : Factura{
        if(is_null($id) || empty($id)){
            throw new Exception("El ID de la Factura no puede ser Nulo al buscar ");
        }
        try{
           return Factura::find(array("Factura_id" => $id));
        }catch(Exception $error){
            throw new Exception("Error: El Factura con ID $id no existe");
        }
    }

    public function UpdateFactura(Factura $Factura) : void{
        if(is_null($Factura)){
            throw new Exception("La Factura no puede ser Null al Actualizar");
        }
        
       
        $FacturaExistente = $this->FindFacturaById($Factura->id);
        if($FacturaExistente){
            // Actualizar los atributos de la Factura existente
            //$FacturaExistente->CEDULA = $Factura->CEDULA;
            $FacturaExistente->fecha = $Factura->jornada;
            $FacturaExistente->hora = $Factura->hora_inicio;
            $FacturaExistente->precio_total = $Factura->precio_total;
            $FacturaExistente->cantidad = $Factura->cantidad;
            $FacturaExistente->pais = $Factura->pais;
            $FacturaExistente->ciudad = $Factura->ciudad;
            $FacturaExistente->metodo_pago = $Factura->metodo_pago;
            
            
           
          
            $FacturaExistente->save();
            
            echo "Factura actualizada correctamente.";
        } else {
            // Manejar el caso donde la Factura no existe en la base de datos
            echo "La Factura no existe en la base de datos.";
        }
    }

    public function DeleteFactura(String $id) : void{
        if(is_null($id) || empty($id)){
            throw new Exception("El ID de la Factura no puede ser Nulo al eliminar ");
        }
     
        $Factura = $this->FindFacturaById($id);
        try{
            $Factura->delete();
        }catch(Exception $eror){
            throw new Exception("Error: Error al eliminar el Factura con ID $id");
        }
    }
    
    public function GetAllFacturas() : array{
        return Factura::all();
    }
}