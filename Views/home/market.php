<?php
$conexion = new mysqli('localhost', 'root', '', 'shop');

if ($conexion->connect_error) {
    die('Error de conexión: ' . $conexion->connect_error);
}

$filtro = isset($_GET['filtro']) ? $_GET['filtro'] : 'todo';
$busqueda = isset($_GET['buscar']) ? $_GET['buscar'] : '';

// Construir la consulta SQL con el filtro y la búsqueda
$consulta = "SELECT id, nombre, precio, imagen FROM productos";

if ($filtro != 'todo') {
    $consulta .= " WHERE tipo_prenda = '$filtro'";
}

if (!empty($busqueda)) {
    if ($filtro != 'todo') {
        $consulta .= " AND";
    } else {
        $consulta .= " WHERE";
    }
    $consulta .= " nombre LIKE '%$busqueda%'";
}

$resultado = $conexion->query($consulta);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="icon" type="image/png" href="../../assets/images/Icon.png">
    <!--Styles-->
    <link rel="stylesheet" href="../archivos-css/style.css">
    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
    <!--Iconos-->
    <script src="https://kit.fontawesome.com/93bffd6dca.js" crossorigin="anonymous"></script>
</head>

<body>
    <header id="top">
        <div class="header-intro">
            <form action="" method="post">
                <input type="text" name="" id="" class="buscar-input">
                <input type="submit" value="Buscar" class="buscar">
            </form>
            <h3>Sistema-PSV</h3>
            <a href="carrito.php"><i class="fa-solid fa-bag-shopping"></i> Carrito</a>
        </div>
        <div class="header-info">
            <div>
                <h1>Productos</h1>
                <p>Explora nuestra tienda y las diferentes productos que tenemos.</p>
                <a class="link-carrito" href="#main"><i class="fa-solid fa-bag-shopping"></i> Comprar Ahora</a>
            </div>
            <div class="img-portada">

            </div>
        </div>
    </header>
    <main id="main">
    <form action="<?ph
   
    
    p echo $_SERVER['PHP_SELF']; ?>" method="get" class="form-filtrar">
    <input type="text" name="buscar" value="<?php echo $busqueda; ?>" placeholder="Buscar" class="buscar-input">
    <select name="filtro" id="filtro">
        <option value="todo" <?php if ($filtro == 'todo') echo 'selected'; ?>>Todo</option>
        <option value="camisetas" <?php if ($filtro == 'camisetas') echo 'selected'; ?>>Camisetas</option>
        <option value="sudaderas" <?php if ($filtro == 'sudaderas') echo 'selected'; ?>>Sudaderas</option>
        <option value="chaquetas" <?php if ($filtro == 'chaquetas') echo 'selected'; ?>>Chaquetas</option>
        <option value="pantalones" <?php if ($filtro == 'pantalones') echo 'selected'; ?>>Pantalones</option>
        <option value="vestidos" <?php if ($filtro == 'vestidos') echo 'selected'; ?>>Vestidos</option>
        <option value="trajes" <?php if ($filtro == 'trajes') echo 'selected'; ?>>Trajes</option>
    </select>
    <input type="submit" value="Filtrar">
</form>

<div class="container">
    <?php
    while ($fila = $resultado->fetch_assoc()) {
        // Mostrar los productos filtrados o buscados
        echo '<form action="../consultas/agregarCarrito.php" method="post">';
        echo '<img src="' . $fila['imagen'] . '" alt="Imagen del producto">';
        echo '<p class="nombre-producto">' . $fila['nombre'] . '</p>';
        echo '<p class="precio-producto">' . "$" . $fila['precio'] . '</p>';
        echo '<input type="hidden" name="id_producto" value="' . $fila['id'] . '">';
        echo '<input type = "submit" value="Agregar Carrito">';
        echo '</form>';
    }

    // Cerrar la conexión
    $conexion->close();
    ?>
</div>

        <div class="container-models-photos">
            <div class="item-1"></div>
            <div class="item-2"></div>
            <div class="item-3"></div>
            <div class="item-4"></div>
            <div class="item-5"></div>
        </div>
    </main>
    <footer>
        <div class="footer-div-info">
            <h3>Sistema-psv</h3>
            <p>En Sistema-psv, nos enorgullece ofrecer productos de seguridad de la más alta calidad. 
                Nuestro equipo de servicio al cliente está siempre disponible para ayudarlo a encontrar la solución 
                de seguridad perfecta para sus necesidades.
                 ¡Visite nuestra tienda en línea hoy mismo y descubra cómo podemos ayudarlo a mantenerse seguro!.</p>
        </div>
        <div class="catalogo">
            <h3>CATALOGO</h3>
            <p>Pantalones</p>
            <p>camara</p>
            <p>porra</p>
            <p>arma</p>
        </div>
        <nav class="aboutus">
            <h3>SOBRE NOSOTROS</h3>
            <a href="about.html">Sobre nosotros</a>
            <a href="reviews.html">Reseñas</a>
            <a href="questions.html">Preguntas Frecuentes</a>
            <a href="contactanos.php">Contactanos</a>
            <a href="about.html">Nuestros Productores</a>
        </nav>
        <div class="copyright">
            <p>©2023 Sistema-psv, Inc</p>
            <a href="#top">Volver al principio <i class="fa-solid fa-arrow-up"></i></a>
        </div>
    </footer>
</body>

</html>