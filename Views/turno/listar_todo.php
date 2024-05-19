<?php
    session_start();
    include_once '../../models/Turno.php';
    $lista_turnos = @$_SESSION["lista_turnos"];
    $lista_turnos = unserialize($lista_turnos);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listados de turno</title>
</head>
<body>

    <center>
        <h2>Listado de turno</h2>
        <hr/>
        <?php
            if(@$_SESSION['lista_turno'] != NULL){
        ?>
            <table border="1">
                <tr>
                    <th>item</th>
                    <th>ID</th>
                    <th>Jornada</th>
                    <th>Hora inicio</th>
                    <th>Hora fin</th>
                    <th>Fecha</th>
                </tr>
                <?php
                    foreach($lista_turnos as $indice => $turno){
                ?>
                <tr>
                    <td>
                        <?= ($indice + 1) ?>
                    </td>
                    <td>
                        <?= @$turno->turnoId ?> 
                    </td>
                    <td>
                        <?= @$turno->jornada ?> 
                    </td>
                    <td>
                        <?= @$turno->horainicio ?> 
                    </td>
                    <td>
                        <?= @$turno->horafin ?> 
                    </td>
                    <td>
                        <?= @$turno->fecha  ?> 
                    </td>

                </tr>
                <?php }?>
            </table>
            <?php }?>

    </center>
    
</body>
</html>