<?php 
 $page = "principal";
 ?>

<?php include("template/encabezado.php"); 
?>

        <style>
            main{
                
                height: 900px;
                background-image: url("imagenes/fondo.jpg");
                background-size: cover;
                background-position: center;
                
                
                
                
            }
          

            body {
                text-align: center;
                font-family: sans-serif;
                background-color: #3c3c3c;
            }
            .contenedor-1{
                width: 100%;
                height: 120vh;

            }


            .head {
                display: flex;
                align-items: center;
                justify-content: space-between;
                height: 63px;
                background: #171717;
                position: fixed;
                width: 100%;
                z-index: 100;
                overflow: hidden;
            }


            .logo {
                margin-left: 30px;
                padding-left: 30px;
                height: 150px;
                
            }



            .navbar {
                display: flex;
                margin-right: 10px;
                height: 30px 0;
                
            }


            .navbar a {
                display: block;
                padding: 20px 20px;
                color: #fff;
                text-decoration: none;
                text-transform: uppercase;
                font-size: 20px;
            }

            .navbar a:hover {
                background: #424242;
            }


            .banner{
                width: 50%;
                height: calc(100vh -50px);
                display: flex;
                justify-content: start;
                align-items: center;
               
                position: relative;
                top:200px;
                left: 500px;

            }

            .banner_textos{
                
                width: 100%;
                display: flex;
                flex-direction: column;
                padding-left: 00px;
                color: white;

            }

            .banner_textos h1{
                font-size: 60px;
                padding-right: 150px;


            }

            .banner_textos p{
                font-size: 30px;
                margin: 30px 0 75px 0;
                padding-right: 100px;
            }

            .banner_textos a{
                background-color: #f64b3c;
                padding: 20px 0;
                text-align: center;
                text-decoration: none;
                width: 50%;
                font-size: 20px;
                color: #fff;
                border-radius: 40px;
                margin-left: 15%;
            }
            .banner_textos a:hover{
                background-color: #fff;
                color: #f64b3c;
            
            }

            /* seccion 2 */

            
            

        </style>

        <main>
        <section class="contenedor-1">
        
        
                
        <div class="banner">
           
            <div class="banner_textos">
                
             <h1>Obten tu servicio ahora</h1>
                 <p>Somos la empresa que se preocupa por
                  tu seguridad, cuidamos tu bienestar con 
                  productos y servicio de calidad.
                 </p>
             <a href="productos.php"> OBTEN TU PRODUCTOS</a>
            </div>
        </div>
    </section>
    

     
        </main>


<?php include("template/pie.php"); ?>