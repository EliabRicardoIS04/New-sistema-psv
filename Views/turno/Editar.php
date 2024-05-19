<?php

session_start();
//include_once(__DIR__.'/../../models/Cargo.php');
include_once(__DIR__.'/../../models/Turno.php' );
//require_once(__DIR__ . '/../models/vistasModelo.php');
$turno = @$_SESSION['turno'];
$turno = @unserialize($turno);
if(@$_SESSION["turno"] == null){
    $turno = NULL;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>:: EDITAR ::</title>
</head>
<body>
    <center>
        <h2>BUSCAR Y EDITAR</h2>
        <hr/>
        <form action="" method="post">
            <table>
                <tr>
                    <th>Id</th>
                    <td><input type="number" name="id" value="<?= @$turno ->turnoId ?>"
                                id="id" <? ($usuario != NULL)? "readonly ":"required" ?>/></td>
                </tr>
                <tr>
                    <th>Jornada</th>
                    <td><input type="text" name="jornada" value="<?= @$turno ->jornada ?>"
                                id="jornada" <? ($turno != NULL)? " ":"readonly" ?>/></td>
                </tr>
                <tr>
                    <th>Hora inicio</th>
                    <td><input type="time" name="horainicio" value="<?= @$turno ->horainicio ?>"
                                id="horainicio" <? ($turno != NULL)? " ":"readonly" ?>/></td>
                </tr>
                <tr>
                    <th>Hora fin</th>
                    <td><input type="time" name="horafin" value="<?= @$turno ->horafin ?>"
                                id="horafin" <? ($turno != NULL)? " ":"readonly" ?>/></td>
                </tr>
                <tr>
                    <th>Fecha</th>
                    <td><input type="date" name="fecha" value="<?= @$turno ->fecha ?>"
                                id="fecha" <? ($turno != NULL)? " ":"readonly" ?>/></td>
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