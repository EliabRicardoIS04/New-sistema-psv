<?php
session_start();
include_once "../../models/Turno.php";
$turno = @$_SESSION["turno"];
$turno = @unserialize($turno);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUSCAR TURNO</title>
</head>
<body>
    <center>
        <H2>FORMULARIO PARA BUSCAR TURNO</H2>
        <ht/>
        <form action="../../controllers/turnoController.php" method="post">
            <table border="1">
                <tr>
                    <th>ID: </th>
                    <td> <input type="number" name="turnoId"  id="turnoId" value="<?= @$turno->turnoId ?>" required></td>
                </tr>
                <tr>
                    <th>jornada: </th>
                    <td> <input type="text" name="jornada"  id="jornada" value="<?= @$turno->jornada ?>" readonly></td>
                </tr>
                <tr>
                    <th>hora inicio: </th>
                    <td> <input type="time" name="horaInicio"  id="horaInicio" value="<?= @$turno->horaInicio ?>" readonly></td>
                </tr>
                <tr>
                    <th>hora fin: </th>
                    <td> <input type="time" name="horaFin"  id="horaFin" value="<?= @$turno->horFin ?>" readonly></td>
                </tr>
                <tr>
                    <th>Fecha: </th>
                    <td> <input type="date" name="fecha"  id="fecha" value="<?= @$turno->fecha ?>" readonly></td>
                </tr>

                <td colspan="2" style="text-align:center">
                    <input  type="hidden"  name="pagina"  value="buscar"/>
                    <input  type="submit"  name="accion" id="acccion"  value="buscar"/>
                    &nbsp;&nbsp;&nbsp;
                    <input type="reset" id="limpiar" value="limpiar"/>
                </td>
            </table>
    
         </form>
         <br/>
         <hr/>
         <span><?= @$_REQUEST["msg"] ?></span>
    </center>
</body>
</html>