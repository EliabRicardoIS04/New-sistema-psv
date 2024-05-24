<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrar Productos</title>
    <link rel="stylesheet" href="/proaula/Views/css/producto.css">
</head>
<body>
    <h1>Información:</h1>
    <h2 >En este apartado usted como administrador podra agregar, eliminar, editar y buscar los productos que quiere
        que aparezcan en la plataforma del cliente.
    </h2>
    <section class="main-content">
        <div class="container">
            <h1>Administrar Productos</h1>
            <!-- Formulario para agregar un nuevo producto -->
            <form action="guardar_producto.php" method="post">
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" required>
                </div>
                <div class="form-group">
                    <label for="marca">Marca:</label>
                    <input type="text" id="marca" name="marca" required>
                </div>
                <div class="form-group">
                    <label for="precio">Precio:</label>
                    <input type="number" id="precio" name="precio" step="0.01" required>
                </div>
                <div class="form-group">
                    <label for="imagen">Imagen:</label>
                    <input type="file" id="imagen" name="imagen" required>
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripción:</label>
                    <textarea id="descripcion" name="descripcion" rows="4" required></textarea>
                </div>
                <button type="submit">Agregar Producto</button>
            </form>

            <!-- Formulario para buscar productos -->
            <form action="buscar_productos.php" method="get">
                <div class="form-group">
                    <label for="buscar">Buscar Producto:</label>
                    <input type="text" id="buscar" name="buscar" required>
                </div>
                <button type="submit">Buscar</button>
            </form>

            <!-- Botones para editar y eliminar productos -->
            <div class="action-buttons">
                <button class="edit-button">Editar</button>
                <button class="delete-button">Eliminar</button>
            </div>
        </div>
    </section>

</body>
</html>
