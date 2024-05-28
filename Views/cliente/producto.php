<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prodcutos</title>
    <link rel="icon" type="image/png" href="../../assets/images/Icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!--Styles-->
    <link rel="stylesheet" href="/proaula/Views/css/carrito.css">
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
                <input type="text" name="" id="accion" class="buscar-input" name="accion" value="Buscar">
                <input type="submit" value="Buscar" class="buscar">
            </form>
            <a href="content.php" class="link-inicio">Sistema-psv</a>
            <a href="carrito.php" class="link-carrito"><i class="fa-solid fa-bag-shopping"></i> Carrito</a>
        </div>
    </header>

    <div class="container">
        <br>
        <div class="alert alert-success">
            Pantalla de mensaje...
            <a class="badge badge-success">Ver carrito</a>
        </div>
    </div>
        <?php require_once $_SERVER['DOCUMENT_ROOT']."/proaula/Controllers/ProductoController.php";
                $cont = new ProductoController(); $cont->AllProduct();?>
        <div class="row">
            <?php foreach ($productos as $producto) : ?>
                <div class="col-3">
                    <div class="card">
                        <img title="<?php echo $producto->getNombre(); ?>" class="card-img-top" src="<?php echo $producto->getFoto(); ?>" alt="<?php echo $producto->getNombre(); ?>">
                        <div class="card-body">                            <span><?php echo $producto->getNombre(); ?></span>
                            <h5 class="card-title"><?php echo $producto->getPrecio(); ?>$</h5>
                            <p class="card-text"><?php echo $producto->getDescripcion(); ?></p>
                            <!-- Puedes usar un formulario para enviar los datos del producto -->
                            <form action="tu_controlador.php" method="POST">
                                <input type="hidden" name="nombre" value="<?php echo $producto->getNombre(); ?>">
                                <input type="hidden" name="precio" value="<?php echo $producto->getPrecio(); ?>">
                                <input type="hidden" name="foto" value="<?php echo $producto->getFoto(); ?>">
                                <input type="hidden" name="descripcion" value="<?php echo $producto->getDescripcion(); ?>">
                                <input type="hidden" name="marca" value="<?php echo $producto->getMarca(); ?>">
                                <button class="btn btn-primary" name="btnAccion" type="submit" value="Agregar">
                                    Agregar al carrito
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
         





    <div class="contenedor">
        <h1>Carrito de Compras</h1>
        <div class="cart">
            <div class="cart-item">
                <img src="producto1.jpg" alt="Producto 1">
                <div class="item-details">
                    <h2>Producto 1</h2>
                    <p class="price">$10.00</p>
                    <p class="quantity">Cantidad: 1</p>
                </div>
                <button class="remove-btn">Eliminar</button>
            </div>
            <div class="cart-item">
                <img src="producto2.jpg" alt="Producto 2">
                <div class="item-details">
                    <h2>Producto 2</h2>
                    <p class="price">$15.00</p>
                    <p class="quantity">Cantidad: 2</p>
                </div>
                <button class="remove-btn">Eliminar</button>
            </div>
            <!-- Más productos pueden ser añadidos de la misma manera -->
        </div>
        <div class="summary">
            <h2>Resumen del Pedido</h2>
            <p class="total">Total: $40.00</p>
            <button class="checkout-btn">Proceder al Pago</button>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>