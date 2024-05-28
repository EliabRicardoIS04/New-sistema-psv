<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/libs/bdConfig.php";

class Factura extends ActiveRecord\Model{
    
    
    public function __construct($cantidad,$pais,$ciudad,$metodo_pago)
    {
       
        $this->precio_total = TotalPrice();
        $this->cantidad = $cantidad;
        $this->pais = $pais;
        $this->ciudad = $ciudad;
        $this->metodo_pago = $metodo_pago;
        $this->iva = CalculateIva();
        $this->descuento_total = Discount();
    }

    public function getFecha() {
        return $this->fecha;
    }

    // Getter para la propiedad $factura_id
    public function getFacturaId() {
        return $this->factura_id;
    }

    public function getIva(){
        return $this->iva;
    }

    public function getDescuento_Total(){
        return $this->descuento_total;
    }

    public function getPrecio_Total(){
        return $this->precio_total;
    }
    public function setPrecio_Total($precio_total){
        $this->precio_total = $precio_total;
    }

    public function getCatidad(){
        return $this->cantidad;
    }

    public function setCantidad($cantidad){
        $this->cantidad = $cantidad;
    }

    public function getCiudad(){
        return $this->ciudad;
    }

    public function setCiudad($ciudad){
        $this->ciudad = $ciudad;
    }

    public function getPais(){
        return $this->pais;
    }

    public function setPais($pais){
        $this->pais = $pais;
    }

    public function setMetodoPago($metodo_pago){
        $this->metodo_pago = $metodo_pago;
    }

    public function getMetodoPago(){
        return $this->metodo_pago;
    }



    
    // Setter para la propiedad $factura_id
   

    private function CalculateIva(){

    }

    private function TotalPrice(){

    }
    private static function Discount(){

    }
    
    static $belongs_to = array(
        array('cliente')
    ); 
}