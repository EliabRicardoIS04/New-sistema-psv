<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración - Login</title>
    <link rel="stylesheet" href="/proaula/Views/css/AdminLogin.css">
</head>
<body>
    <div class="login-container">
        <h1>Administración</h1>
        <h2>Login</h2>
        <form action="/proaula/Controllers/AdministradorSitioController.php" method="post">
            <div class="input-group">
                <label for="correo">Correo</label>
                <input type="text" id="correo" name="correo" required>
            </div>
            <div class="input-group">
                <label for="contrasena">Contraseña</label>
                <input type="password" id="contrasena" name="contrasena" required>
            </div>
            <button type="submit" id="accion" value="login" name="accion">Iniciar Sesión</button>
        </form>
        <p class="register-link">¿No tienes acceso? <a href="?views=AdminRegister">Regístrate aquí</a></p>
    </div>
</body>
</html>
