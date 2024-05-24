
<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/proaula/Infrastructure/Repositories/ProductoInventarioRepository.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/proaula/Models/Entities/ProductoInventario.php";

class ProductoInventarioController{

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
        $ProductoInventarioRepo = new ProductoInventarioRepository();


        if(empty(trim($nombre))){
            echo "el valor no puede estar vacio";
        }else{
            try{
                $ProductoInventario = $ProductoInventarioRepo->FindProductoInventarioByName($nombre);
                

            }catch(Exception $e){
                $e->getMessage();
            }
        }
       
    }

    public static function SaveProduct(){

        $producto_inventario_id       = @$_REQUEST['producto_inventario_id'];
        $nombre                       = @$_REQUEST['nombre'];
        $marca                        = @$_REQUEST['marca'];
        $precio                       = @$_REQUEST['precio'];
        $proveedor                    = @$_REQUEST['proveedor'];
        $descripcion                  = @$_REQUEST['descripcion'];
        $cantidad                     = @$_REQUEST['cantidad'];
        $fecha_ingreso                = @$_REQUEST['fecha_ingreso'];
        $hora_ingreso                 = @$_REQUEST['hora_ingreso'];
        




       

        $datos = array();
        $datos = [$producto_inventario_id,$nombre,$marca,$precio,$descripcion,$proveedor,
                    $cantidad,$fecha_ingreso,$hora_ingreso];

      
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
            $ProductoInventario = new ProductoInventario($producto_inventario_id,$nombre,$marca,$precio,$proveedor,
            $descripcion,$cantidad,$fecha_ingreso,$hora_ingreso);
            $ProductoInventarioRepo = new ProductoInventarioRepository();
            try {
                $ProductoInventarioRepo->SaveProductoInventario($ProductoInventario);
                header("Location: ../views/Login/RegisterCliente.php?msg=Agregado+con+éxito");
                exit();
            } catch (Exception $error) {
                header("Location: ../views/Login/RegisterCliente.php?msg=".$error->getMessage());
                exit();
            }
          
        }



    }

    public static function FindProductoInventario(){
        
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

$controlador = new ProductoInventarioController();
$controlador->accion();