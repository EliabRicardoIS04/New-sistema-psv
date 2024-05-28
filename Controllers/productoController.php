<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/proaula/Infrastructure/Repositories/ProductoRepository.php";
include_once $_SERVER["DOCUMENT_ROOT"] . "/proaula/Models/Entities/Producto.php";

class ProductoController
{

    public static function accion()
    {
        $accion =  @$_REQUEST["accion"];
        switch ($accion) {
            case 'Agregar':
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


    public static function findProductByname()
    {
        $nombre = @$_REQUEST['nombre'];
        $productoRepo = new ProductoRepository();


        if (empty(trim($nombre))) {
            echo "el valor no puede estar vacio";
        } else {
            try {
                $producto = $productoRepo->FindProductoByName($nombre);
            } catch (Exception $e) {
                $e->getMessage();
            }
        }
    }

    public static function SaveProduct()
    {
        $imagen = "";

        $producto_id     = @$_REQUEST['producto_id'];
        $nombre          = @$_REQUEST['nombre'];
        $marca           = @$_REQUEST['marca'];
        $precio          = @$_REQUEST['precio'];
        $descripcion     = @$_REQUEST['descripcion'];
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Verificar si el archivo fue subido sin errores
            if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
                // Información del archivo subido
                $fileTmpPath = $_FILES['imagen']['tmp_name'];
                $fileName = $_FILES['imagen']['name'];
                $fileSize = $_FILES['imagen']['size'];
                $fileType = $_FILES['imagen']['type'];
                $fileNameCmps = explode(".", $fileName);
                $fileExtension = strtolower(end($fileNameCmps));
        
                // Directorio donde se guardará el archivo subido
                $uploadFileDir = 'C:/xampp/htdocs/proaula/Views/img-productos/';
                $destPath = $uploadFileDir . $fileName;
        
                // Crear el directorio si no existe
                if (!is_dir($uploadFileDir)) {
                    mkdir($uploadFileDir, 0777, true);
                }
        
                // Mover el archivo del directorio temporal al directorio de destino
                if (move_uploaded_file($fileTmpPath, $destPath)) {
                    // Almacenar la ubicación del archivo en una variable
                    $imagen = $destPath;
                    echo "Archivo subido exitosamente. Ubicación permanente del archivo: " . $imagen;
                } else {
                    echo 'Error moviendo el archivo al directorio de destino. Asegúrate de que el servidor web tenga permisos de escritura.';
                }
            } else {
                echo 'Error en la subida del archivo. Error: ' . $_FILES['imagen']['error'];
            }
        } else {
            echo 'Método de solicitud no válido.';
        }


            $datos = array();
            $datos = [$producto_id, $nombre, $marca, $precio, $descripcion, $imagen];


            foreach ($datos as $indice => $valor) {
                echo $valor;
            }

            foreach ($datos as $indice => $valor) {
                if (empty(trim($valor))) {
                    $posiciones_vacias[] = $indice;
                }
            }
            if (!empty($posiciones_vacias)) {
                echo "Los siguientes índices tienen valores vacíos: " . implode(", ", $posiciones_vacias);
            } else {
                $producto = new Producto($producto_id, $nombre, $marca, $precio, $descripcion);
                $productoRepo = new ProductoRepository();
                try {
                    $productoRepo->SaveProducto($producto);
                    header("Location: ../WebAdmin/?views=producto&msg=Agregado+con+éxito");
                    exit();
                } catch (Exception $error) {
                    header("Location: ../WebAdmin/?views=producto&msg=" . $error->getMessage());
                    exit();
                }
            }
        }
    }


    public static function FindProducto()
    {
    }

    public static function UpdateProduct()
    {
    }
    public static function DeteleProduct()
    {
    }
    public static function AllProduct()
    {
        $ProductoRepo = new ProductoRepository();

        $productos = array();
        $productos = $ProductoRepo->GetAllProductos();
    }
    public static function GetProductByCampo()
    {
    }

    public function uploadFile()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Verificar si el archivo fue subido sin errores
            if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
                $fileTmpPath = $_FILES['imagen']['tmp_name'];
                $fileName = $_FILES['imagen']['name'];
                $fileSize = $_FILES['imagen']['size'];
                $fileType = $_FILES['imagen']['type'];
                $fileNameCmps = explode(".", $fileName);
                $fileExtension = strtolower(end($fileNameCmps));

                // Directorio donde se guardará el archivo subido
                $uploadFileDir = './uploaded_files/';
                $dest_path = $uploadFileDir . $fileName;

                // Crear el directorio si no existe
                if (!is_dir($uploadFileDir)) {
                    mkdir($uploadFileDir, 0777, true);
                }

                // Mover el archivo del directorio temporal al directorio de destino
                if (move_uploaded_file($fileTmpPath, $dest_path)) {
                    return $dest_path;
                } else {
                    return 'Error moviendo el archivo al directorio de destino. Asegúrate de que el servidor web tenga permisos de escritura.';
                }
            } else {
                return 'Error en la subida del archivo. Error: ' . $_FILES['imagen']['error'];
            }
        }
        return 'Método de solicitud no válido.';
    }
}

$controlador = new ProductoController();
$controlador->accion();
