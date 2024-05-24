<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre nosotros</title>
    <link rel="icon" type="image/png" href="../../assets/images/Icon.png">
    <!--Styles-->
    <link rel="stylesheet" href="../css/carrito.css">
    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">
    <!--Icons-->
    <script src="https://kit.fontawesome.com/93bffd6dca.js" crossorigin="anonymous"></script>
</head>

<body>
    <header id="top">
        <div class="header-intro">
            <form action="">
                <input type="text" name="" id="" class="buscar-input">
                <input type="submit" value="Buscar" class="buscar">
            </form>
            <a href="content.php" class="link-inicio">Sistema-psv</a>
            <a href="carrito.php" class="link-carrito"><i class="fa-solid fa-bag-shopping"></i> Carrito</a>
        </div>
    </header>
    <main>
        <div class="container">
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "shop";
            $totalPrecio = 0;

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Error de conexión a la base de datos: " . $conn->connect_error);
            }

            session_start();
            $id_usuario = $_SESSION['id_usuario'];
            if (isset($_POST['eliminar_producto'])) {
                $id_producto_eliminar = $_POST['eliminar_producto'];

                $sql_eliminar = "DELETE FROM carrito WHERE id_usuario = '$id_usuario' AND id_producto = '$id_producto_eliminar'";
                $conn->query($sql_eliminar);

                header('Location: carrito.php');
                exit();
            }

            $sql = "SELECT p.id, p.nombre, p.precio, p.imagen
            FROM productos p
            INNER JOIN carrito c ON p.id = c.id_producto
            WHERE c.id_usuario = '$id_usuario'";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Hay productos en el carrito, puedes mostrarlos en un bucle
                while ($fila = $result->fetch_assoc()) {
                    $id_producto = $fila['id'];
                    $nombre = $fila['nombre'];
                    $precio = $fila['precio'];
                    $imagen = $fila['imagen'];
                    echo '<form method="post">';
                    echo '<img src="' . $imagen . '" alt="Imagen del producto">';
                    echo '<p class="nombre-producto">' . $nombre . '</p>';
                    echo '<p class="precio-producto">' . '$' . $precio . '</p>';
                    echo '<input type="hidden" name="eliminar_producto" value="' . $id_producto . '">';
                    echo '<input type="submit" value="Eliminar" class="btn-eliminar">';
                    echo '</form>';
                    $totalPrecio += $precio;
                }

                echo '<p class="total">Precio total: $' . $totalPrecio . '</p>';
            } else {
                echo "El carrito está vacío";
            }

            $conn->close();
            ?>

            <?php 
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "shop";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Error de conexión a la base de datos: " . $conn->connect_error);
            }



            $sql1 = "SELECT id_producto FROM carrito WHERE id_usuario = '$id_usuario'";
            $result1 = $conn->query($sql1);


            $sql = "SELECT cantidad FROM carrito WHERE id_usuario = '$id_usuario'";
            $result = $conn->query($sql);

            $canT1 = 0;
            $canTOTAL1 = 0;

            if ($result->num_rows > 0) {
                // Iterar sobre los resultados
                while ($row1 = $result->fetch_assoc()) {
                    $canT = $row1["cantidad"];
                    $canT1 = $canT1 + $canT;

                if ($result1->num_rows > 0) {
                // Iterar sobre los resultados
                while ($row2 = $result1->fetch_assoc()) {
                    $id_producto = $row2["id_producto"];
                    
                        $sql3 = "SELECT id, precio FROM productos WHERE id = '$id_producto'";
                        $result3 = $conn->query($sql3);

                         if ($result3->num_rows > 0) {
                        
                        while ($row3 = $result3->fetch_assoc()) {

                            if($id_producto == $row3['id']){
                            $canTOTAL =  $canT * $row3['precio'];
                            $canTOTAL1 = $canTOTAL+$canTOTAL1 ;
                            }
                         
                         }
                        }

                     }
                    }

                }
            } 

           

            



            $conn->close();
            ?>

        </div>
        <button class="btn-comprar">Comprar Todo</button>
        <form action="../admin/agregarlistaenvio.php" method="post" class="form-envio">
            <button type="button" class="btn-salir">X</button>
            <h2>Formulario de envio</h2>
            <label>Nombre</label>
            <input type="text" name="nombre" id="">
            <label>Telefono</label>
            <input type="number" name="telefono" id="">
            <label>Direccion</label>
            <input type="text" name="direccion" id="">
            <label>Fecha</label>
            <input type="date" name="fecha" id="">
            <label>Compañia de envio</label>
            <select name="compania" id="">
                <option value="enviya">Envi Ya</option>
                <option value="faster">Faster</option>
            </select>
            <label>Medio de pago</label>
            <select name="mediopago" id="">
                <option value="cashHold">cashHold</option>
                <option value="TransFi">TransFi</option>
            </select>
            <label>Cantidad de productos</label>
            <p class="cantidad"><?php echo $canT1; ?></p>
            <label>Precio Total</label>
            <p class="total"><?php echo $canTOTAL1; ?></p>
            <input type="submit" value="Enviar" class="btn-enviar">
        </form>
    </main>
    <script src="../../assets/envio.js"></script>
</body>