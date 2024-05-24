<?php $c = "/proaula/Views/css/register.css";?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>::: REGISTER :::</title>
    <link rel="stylesheet" href="<?php echo $c; ?>" />
  </head>

  <body>
    <form
      action="../../Controllers/ClienteController.php"
      method="post"
    >
      <div class="form-body">
        <div class="row">
          <div class="form-holder">
            <div class="form-content">
              <div class="form-items">
                <h3>REGISTRATE EN NUESTRA PAGINA</h3>
                <p>Fill in the data below.</p>
                <form class="requires-validation" novalidate>
                    <div class="col-md-12">
                        <input
                          class="form-control"
                          type="text"
                          name="cedula"
                          id="cedula"
                          placeholder="Cedula"
                          required
                        />
                        <div class="valid-feedback">Cedula field is valid!</div>
                        <div class="invalid-feedback">
                          Cedula field cannot be blank!
                        </div>
                      </div>
                  <div class="col-md-12">
                    <input
                      class="form-control"
                      type="text"
                      name="nombres"
                      id="nombres"
                      placeholder="Nombres"
                      required
                    />
                    <div class="valid-feedback">nombres field is valid!</div>
                    <div class="invalid-feedback">
                      nombres field cannot be blank!
                    </div>
                  </div>
                  <div class="col-md-12">
                    <input
                      class="form-control"
                      type="text"
                      name="apellidos"
                      id="apellidos"
                      placeholder="Apellidos"
                      required
                    />
                    <div class="valid-feedback">apellidos field is valid!</div>
                    <div class="invalid-feedback">
                      apellidos field cannot be blank!
                    </div>
                  </div>

                  <div class="col-md-12">
                    <input
                      class="form-control"
                      type="email"
                      name="correo"
                      id="correo"
                      placeholder="E-mail Address"
                      required
                    />
                    <div class="valid-feedback">Email field is valid!</div>
                    <div class="invalid-feedback">
                      Email field cannot be blank!
                    </div>
                  </div>


                  <div class="col-md-12">
                    <input
                      class="form-control"
                      type="password"
                      name="contrasena"
                      id="contrasena"
                      placeholder="Password"
                      required
                    />
                    <div class="valid-feedback">Password field is valid!</div>
                    <div class="invalid-feedback">
                      Password field cannot be blank!
                    </div>
                  </div>
                  <div class="col-md-12">
                    <input
                      class="form-control"
                      type="text"
                      name="usuario"
                      id="usuario"
                      placeholder="usuario"
                      required
                    />
                    <div class="valid-feedback">Password field is valid!</div>
                    <div class="invalid-feedback">
                      Password field cannot be blank!
                    </div>
                  </div>

                  <div class="col-md-12">
                    <input
                      class="form-control"
                      type="text"
                      name="celular"
                      id="celular"
                      placeholder="celular"
                      required
                    />
                    <div class="valid-feedback">celular field is valid!</div>
                    <div class="invalid-feedback">
                      celular field cannot be blank!
                    </div>
                  </div>
                  <div class="col-md-12">
                    <input
                      class="form-control"
                      type="text"
                      name="telefono"
                      id="telefono"
                      placeholder="telefono"
                      required
                    />
                    <div class="valid-feedback">telefono field is valid!</div>
                    <div class="invalid-feedback">
                      telefono field cannot be blank!
                    </div>
                  </div>
                  <div class="col-md-12">
                    <input
                      class="form-control"
                      type="text"
                      name="ciudad"
                      id="ciudad"
                      placeholder="ciudad"
                      required
                    />
                    <div class="valid-feedback">ciudad field is valid!</div>
                    <div class="invalid-feedback">
                      Username field cannot be blank!
                    </div>
                  </div>

                  <div class="col-md-12">
                    <input
                      class="form-control"
                      type="text"
                      name="departamento"
                      id="departamento"
                      placeholder="departamento"
                      required
                    />
                    <div class="valid-feedback">departamento field is valid!</div>
                    <div class="invalid-feedback">
                      departamento field cannot be blank!
                    </div>
                  </div>
                  <div class="col-md-12">
                    <input
                      class="form-control"
                      type="text"
                      name="barrio"
                      id="barrio"
                      placeholder="barrio"
                      required
                    />
                    <div class="valid-feedback">barrio field is valid!</div>
                    <div class="invalid-feedback">
                      barrio field cannot be blank!
                    </div>
                  </div>

                 

                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value=""
                      id="invalidCheck"
                      required
                    />
                    <label class="form-check-label"
                      >I confirm that all data are correct</label
                    >
                    <div class="invalid-feedback">
                      Please confirm that the entered data are all correct!
                    </div>
                  </div>

                  <div class="form-button mt-3">
                    <button id="submit" type="submit" class="btn btn-primary" name="accion"  value="Registrar" id="accion">
                      Register
                    </button>
                  </div>
                  <div class="form-button mt-3">
                    <button   class="btn btn-primary" type="reset" id="limpiar" value="limpiar">
                      Limpiar
                    </button>
                  </div>
                 
                  <div class="form-button mt-3">
                    <button id="login" type="button" class="btn btn-primary">
                      <a href="">Login</a>
                    </button>
                  </div>

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </body>
</html>
