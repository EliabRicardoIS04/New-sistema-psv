<?php
require_once('../core/conexion.php');
require_once('../models/Productos.php');

class ProductoController{

    public static function accion (){
            $accion =  @$_REQUEST["accion"];
            switch ($accion) {
                case 'Guardar':
                    self::SaveProduct();
                    break;
                case 'Buscar':
                    self::FindProduct();
                    break;
                case 'Editar':
                    self::UpdateProduct();
                    break;
                case 'Eliminar':
                    self::DeteleProduct();
                    break; 
                case 'listar_todo':
                    self::AllProduct();
                    break;  
                case 'Consultar':
                    self::GetProductByCampo();
                    break; 
                default:
                    # code...
                    break;
            }
    
        }
    

    public static function findProduct(){
        $productos = new Producto();

        switch($_GET['op']){
            case 'listar':
                $datos = $productos->get_producto();
                $data = Array();
                foreach($datos as $row){
                    $sub_array = array();
                    $sub_array[] = $row["ID"];
                    $sub_array[] = '<button type = "button" onClick= "editar('.$row["ID"].');" id="'.$row["ID"].'" class "btn btn-outline-primary btn-icon"><div><i class="fa fa-edit"></i></div></button>';
                    $sub_array[] = '<button type = "button" onClick= "eliminar('.$row["ID"].');" id="'.$row["ID"].'" class "btn btn-outline-danger btn-icon"><div><i class="fa fa-trash"></i></div></button>';
                }
                break;
        }
    }

    public static function SaveProduct(){

    }

    public static function FindProducto(){
        
    }

    public static function UpdateProduct(){
        
    }
    public static function DeteleProduct(){
        
    }
    public static function AllProduct(){
        
    }
    public static function GetProductByCampo(){

    }
}