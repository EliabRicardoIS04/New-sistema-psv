<?php

session_start();
include_once(__DIR__.'/../../models/Turno.php');
$turno = @$_SESSION['turno'];
$turno = @unserialize($turno);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>:: ELIMINAR ::</title>
</head>
<body>
    <center>
        <h2>BUSCAR Y ELIMINAR</h2>
        <hr/>
        <form action="" method="post">
            <table>
                <tr>
                    <th>Id</th>
                    <td><input type="number" name="id" value="<?= @$turno ->turnoId ?>"
                                id="id"/></td>
                </tr>
                <tr>
                    <th>Jornada</th>
                    <td><input type="text" name="jornada" value="<?= @$turno ->jornada ?>"
                                id="jornada" readonly/></td>
                </tr>
                <tr>
                    <th>Hora inicio</th>
                    <td><input type="time" name="horainicio" value="<?= @$turno ->horainicio ?>"
                                id="horainicio" readonly/></td>
                </tr>
                <tr>
                    <th>Hora fin</th>
                    <td><input type="time" name="horafin" value="<?= @$turno ->horafin ?>"
                                id="horafin" readonly/></td>
                </tr>
                <tr>
                    <th>Fecha</th>
                    <td><input type="date" name="fecha" value="<?= @$turno ->fecha ?>"
                                id="fecha" readonly/></td>
                </tr>

                <tr>
                    <td colspan="2" style="text-align:center">
                        <input  type="hidden"  name="pagina"  value="editar"/>
                        <input  type="submit"  name="accion" id="acccion"  value="buscar" id="accion"/>
                        &nbsp;&nbsp;&nbsp;
                        <input  type="submit"  name="accion" id="acccion"  value="Editar" id="accion"/>
                        &nbsp;&nbsp;&nbsp;
                        <input type="reset" id="limpiar" value="limpiar"/>
                    </td>
                </tr>
            </table>

        </form>
        <hr/>
        <hr/>
        <span><?= @$_REQUEST["msg"]?></span>
    </center>
    
</body>
</html>