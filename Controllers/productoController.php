<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/proaula/Infrastructure/Repositories/ProductoRepository.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/Entities/Producto.php";

class ProductoController{

    public static function accion (){
            $accion =  @$_REQUEST["accion"];
            switch ($accion) {
                case 'Guardar':
                    self::SaveProduct();
                    break;
                case 'Buscar':
                    self::FindProductByname();
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
    

    public static function findProductByname(){
        $nombre = @$_REQUEST['nombre'];
        $productoRepo = new ProductoRepository();


        if(empty(trim($nombre))){
            echo "el valor no puede estar vacio";
        }else{
            try{
                $producto = $productoRepo->FindProductoByName($nombre);
                

            }catch(Exception $e){
                $e->getMessage();
            }
        }
       
    }

    public static function SaveProduct(){

        $producto_id     = @$_REQUEST['producto_id'];
        $nombre          = @$_REQUEST['nombre'];
        $marca           = @$_REQUEST['marca'];
        $precio          = @$_REQUEST['precio'];
        $descripcion     = @$_REQUEST['descripcion'];
        




       

        $datos = array();
        $datos = [$producto_id,$nombre,$marca,$precio,$descripcion];

      
        foreach($datos as $indice => $valor){
            echo $valor;
        }

        foreach($datos as $indice => $valor){
            if (empty(trim($valor))) {
                $posiciones_vacias[] = $indice;
            }
        }
        if (!empty($posiciones_vacias)) {
            echo "Los siguientes índices tienen valores vacíos: " . implode(", ", $posiciones_vacias);
        } else {
            $producto = new Producto($producto_id,$nombre,$marca,$precio,$descripcion);
            $productoRepo = new ProductoRepository();
            try {
                $productoRepo->SaveProducto($producto);
                header("Location: ../views/Login/RegisterCliente.php?msg=Agregado+con+éxito");
                exit();
            } catch (Exception $error) {
                header("Location: ../views/Login/RegisterCliente.php?msg=".$error->getMessage());
                exit();
            }
          
        }



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

$controlador = new ProductoController();
$controlador->accion();