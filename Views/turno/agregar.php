<<<<<<< HEAD

<?php $controller = $_SERVER["DOCUMENT_ROOT"]."/proaula/Controller/TurnoController"?>
=======
>>>>>>> master
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AGREGAR TURNO</title>
</head>
<body>
    <center>
        <H2>FORMULARIO PARA AGREGAR TURNO</H2>
        <hr/>
<<<<<<< HEAD
        <form action="../../Controllers/ShiftController.php" method="post">
            <table border="1">
                
=======
        <form action="../../controllers/turnoController.php" method="post">
            <table border="1">
                <tr>
                    <th>ID: </th>
                    <td> <input type="number" name="turnoId"  id="turnoId" required></td>
                </tr>
>>>>>>> master
                <tr>
                    <th>jornada: </th>
                    <td> <input type="text" name="jornada"  id="jornada" required></td>
                </tr>
                <tr>
                    <th>hora inicio: </th>
                    <td> <input type="time" name="horaInicio"  id="horaInicio" required></td>
                </tr>
                <tr>
                    <th>hora fin: </th>
                    <td> <input type="time" name="horaFin"  id="horaFin" required></td>
                </tr>
                <tr>
                    <th>Fecha: </th>
                    <td> <input type="date" name="fecha"  id="fecha" required></td>
                </tr>

                <td colspan="2" style="text-align:center">
                    <input  type="submit"  name="accion"  value="Guardar" id="accion"/>
                    &nbsp;&nbsp;&nbsp;
                    <input type="reset" id="limpiar" value="limpiar"/>
                </td>
            </table>
    
         </form>
    </center>
</body>
</html>