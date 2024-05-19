<?php 
 $page = "contactos";
 ?>
<?php include("template/encabezado.php");?>
        <style>
            main{
                position: relative;
                top:83px;
                height:900px;
               
            }
            .contenedor{
                display:flex;
                width: 100%;
                height: 100%;
                background-color: white;
                background-image:url("imagenes/fondo2.jpg");
                background-size: cover;
                background-position: center;

            }
            .contactos{
                position: relative;
                top: 100px;
                left: 200px;
                padding-left: 30px; 
                padding-top: 180px;


                border: solid 1px black;
                background-color: white;
                width: 400px;
                height: 600px;
                background-image:url("imagenes/fondo2.jpg");
                background-size: cover;
                background-position: center;                

            }
            .contactos p{
                color:white;
            }

            .datos{
                position: relative;
                top: 150px;
                margin: 15px;  
                width:  50%;
                width: 600px;
                height: 500px;
                left:  500px;
                padding-left: 150px;
                padding-top: 70px;
                border: solid 1px black;
                background-color: white;
                background-image:url("imagenes/fondo2.jpg");
                background-size: cover;
                background-position: center;
            }
            .datos label{
                color: white;
            }
            .datos legend{
                color:white;
            }
            .bnt{
                position: relative;
                left: 20px;
            }
        </style>
        <main>
            <div class = "contenedor">
                <div class = "contactos">
                    <p>INFORMACIÓN DE CONTACTO:</p> <br><br>
                    <p>Dirección: 123 Calle nueva venesia, Cartagena</p><br>
                    <p>Teléfono: (+57) 320 5722230</p><br>
                    <p>Email: angel@gmail.com</p><br>
                    <p>Redes sociales: <a href="https://www.facebook.com/">Facebook</a>, <a href="https://www.twitter.com/">Twitter</a></p>

                </div>
                <div class = "datos">
                    <form action="">
                        
                        <legend>CONTACTATE CON NOSOTROS</legend><br><br>
                        <label> nombre y apellido:</label>
                        <input type="text" placehoder = "ingrese su nombre" name = "np"><br><br>
                        <label> Correo:</label>
                        <input type="email" placehoder = "ingrese su email" name = "correo"><br><br>
                        <label> Telefono::</label>
                        <input type="number" placehoder = "ingrese su telefono" name = "np"><br><br>
                        <label>pais:</label>
                        <input type="text" placehoder = "ingrese su pais    " name = "np"><br><br>
                        <label>Ciudad:</label>
                        <input type="text" placehoder = "ingrese su ciudad" name = "np"><br><br><br>

                        <input type="submit" value = "enviar" class = "btn">

                        
                    </form>
                </div>
            </div>      
        </main>

<?php include("template/pie.php"); ?>