<?php $css ="/proaula/Views/css/login.css";
$controller ="/proaula/Controllers/ClienteController.php";
?>
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
    <link rel="stylesheet" href="<?php echo $css; ?>">
</head>

<div class="classBody ">
    <div class="classDiv">
        <h2>¡Bienvenido(a) sistema-psv!</h2>
        <p>
        Descubre nuestra nueva visión de la seguridad. Una estrategia adaptable, evolutiva y predictiva, con la que crecemos junto a nuestros clientes. En ella, gracias a la combinación de profesionales altamente cualificados, la tecnología y los datos, prevenimos y respondemos de forma adecuada a situaciones no programadas 
        </p>
    </div>
    <form class="classform" action="<?php echo $controller; ?>" method="post">
        <img src="assets/images/Icon.png" alt="" srcset="">
        <p>Por favor inicia sesion</p>
        <input type="email" name="correo" placeholder="Email" required>
        <input type="password" name="contrasena" placeholder="Contraseña" required>
        <input type="submit" value="login"  name="accion"  id="accion">
        <p>¿No tienes una cuenta? <a href ="?views=RegisterCliente">Cree una</a>
        
    </form>
</div>

</html>