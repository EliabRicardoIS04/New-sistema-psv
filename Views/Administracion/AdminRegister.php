<?php $c = "/proaula/Views/css/AdminRegister.css"; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>::: REGISTER :::</title>
    <link rel="stylesheet" href="<?php echo $c; ?>" />
</head>
<body>
    <div class="container">
        <form action="/proaula/Controllers/AdministradorSitioController.php" method="post">
            <div class="form-body">
                <div class="row">
                    <div class="form-holder">
                        <div class="form-content">
                            <div class="form-items">
                                <h3>REGISTRATE EN NUESTRA PAGINA</h3>
                                <p>Rellena los datos a continuación.</p>
                                <form class="requires-validation" novalidate>
                                    <div class="col-md-12 form-group">
                                        <input class="form-control" type="text" name="cedula" id="cedula" placeholder="Cedula" required />
                                        <div class="valid-feedback">¡Cedula válida!</div>
                                        <div class="invalid-feedback">¡La cedula no puede estar en blanco!</div>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <input class="form-control" type="text" name="nombres" id="nombres" placeholder="Nombres" required />
                                        <div class="valid-feedback">¡Nombre válido!</div>
                                        <div class="invalid-feedback">¡El nombre no puede estar en blanco!</div>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <input class="form-control" type="text" name="apellidos" id="apellidos" placeholder="Apellidos" required />
                                        <div class="valid-feedback">¡Apellido válido!</div>
                                        <div class="invalid-feedback">¡El apellido no puede estar en blanco!</div>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <input class="form-control" type="email" name="correo" id="correo" placeholder="Correo Electrónico" required />
                                        <div class="valid-feedback">¡Correo válido!</div>
                                        <div class="invalid-feedback">¡El correo no puede estar en blanco!</div>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <input class="form-control" type="password" name="contrasena" id="contrasena" placeholder="Contraseña" required />
                                        <div class="invalid-feedback">¡La contraseña no puede estar en blanco!</div>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <input class="form-control" type="text" name="usuario" id="usuario" placeholder="Usuario" required />
                                        <div class="valid-feedback">¡Usuario válido!</div>
                                        <div class="invalid-feedback">¡El usuario no puede estar en blanco!</div>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <input class="form-control" type="text" name="celular" id="celular" placeholder="Celular" required />
                                        <div class="valid-feedback">¡Celular válido!</div>
                                        <div class="invalid-feedback">¡El celular no puede estar en blanco!</div>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <input class="form-control" type="text" name="telefono" id="telefono" placeholder="Teléfono" required />
                                        <div class="valid-feedback">¡Teléfono válido!</div>
                                        <div class="invalid-feedback">¡El teléfono no puede estar en blanco!</div>
                                    </div>         
                                    <div class="col-md-12 form-group">
                                        <input class="form-control" type="text" name="horario" id="horario" placeholder="Horario" required />
                                        <div class="valid-feedback">Horario válido!</div>
                                        <div class="invalid-feedback">¡El Horario no puede estar en blanco!</div>
                                    </div>
                            
                                    <div class="form-button mt-3">
                                        <button id="submit" type="submit" class="btn btn-primary" name="accion" value="Registrar" id="accion">Registrar</button>
                                    </div>
                                    <div class="form-button mt-3">
                                        <button class="btn btn-secondary" type="reset" id="limpiar" value="limpiar">Limpiar</button>
                                    </div>
                                    <div class="form-button mt-3">
                                        <button id="login" type="button" class="btn btn-info">
                                            <a href="?views=login" style="color: white;">Login</a>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
