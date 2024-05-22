<?php 
 $page1 = "productos";
 
 ?>

    
    <main>
    <div class="container">
        <br>
        <center>
            <H1>Listada de producto</H1>
        </center>
        <br>
        <div class="container">
            <hr>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Imagen</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "BD/Conexion.php";

                    $Sql = "SELECT * FROM productos";
                    $resultado = $conexion->query($Sql);

                    while ($Fila = $resultado->fetch_assoc()) { ?>

                        <tr>
                            <th scope="row"><?php echo $Fila['Id']?></th>
                            <td><?php echo $Fila['Nombre']?></td>
                            <td><?php echo $Fila['Descripcion']?></td>
                            <td><img style="width: 200px;" src="data:image/jpg;base64,<?php echo base64_encode($Fila['Imagen'])?>" alt=""></td>
                           
                        </tr>
                </tbody>
            <?php } ?>
            </table>
        </div>

    </div>
    </main>

   
   
