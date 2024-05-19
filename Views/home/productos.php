<?php 
 $page1 = "productos";
 
 ?>
<?php  include("template/encabezado.php");?> 
    <style>
        .container{
            
            padding:15px;
            width:700px;
        }
        table {
            color: white;
            font-size: 14px;
            table-layout: fixed;
            border-collapse:collapse;
        }

        thead{
            background: #171717;
        }

        th{
            padding: 20px 15px;
            font-weight: 700;
            text-transform: uppercase;
        }

         td{
            padding: 15px;
             border-bottom: solid 1px rgba(0,0,0,0);
         }

         tbody , tr:hover{
           background: #f64b3c;

         }
         tbody{
            background-color:#171717;
         }
         main{
           display: flex;
           align-items: center;
           justify-content: center;
           min-height: 100vh;
            background-image:url("imagenes/fondo5.jpg");
         background-size: cover;
        }
    </style>
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

   
        <?php include("template/pie.php");?>