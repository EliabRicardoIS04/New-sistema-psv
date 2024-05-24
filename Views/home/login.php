<!DOCTYPE html>
<html lang="en" class="classHtml">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesion</title>
    <link rel="icon" type="image/jpg" href="views/img/logo.jpg">
    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">
    <!--Styles-->
    <link rel="stylesheet" href="views/archivos-css/login.css">
</head>

<div class="classBody ">
    <div class="classDiv">
        <h2>¡Bienvenido(a) sistema-psv!</h2>
        <p>
            Aquí encontrarás una amplia selección de prendas de alta calidad
            y con estilo para hombres y mujeres. ¡Gracias por elegir Coral, esperamos que
            encuentres todo lo que buscas!
        </p>
    </div>
    <form class="classform" action="Views/home/market.php" method="post">
        <img src="assets/images/Icon.png" alt="" srcset="">
        <p>Por favor inicia sesion</p>
        <input type="email" name="usuario" placeholder="Email" required>
        <input type="password" name="contrasenia" placeholder="Contraseña" required>
        <input type="submit" href = "market.php">
        <p>¿No tienes una cuenta? <a href = "?p=contactos">Contactos</a>Crea una aquí</p>
        
    </form>
</div>

</html>