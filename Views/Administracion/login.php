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
        <form action="authenticate.php" method="post">
            <div class="input-group">
                <label for="username">Nombre de Usuario</label>
                <input type="text" id="username" name="usuario" required>
            </div>
            <div class="input-group">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="contrasena" required>
            </div>
            <button type="submit">Iniciar Sesión</button>
        </form>
        <p class="register-link">¿No tienes acceso? <a href="?views = AdminRegister.php">Regístrate aquí</a></p>
    </div>
</body>
</html>
