<?php 
 $page = "nosotros";
 ?>

<?php include("template/encabezado.php"); ?>

        <style>
            main{
                height: 2800px;
                position: relative;
                top: 83px;
                


            }
            h1{
                color: #02122c;
                font-size: 45px;
            }
            p{
                color: #484b52;
                font-weight:bold;
                font-size: 15px;
            }

            .circulo{
                border-radius: 60%;
                height:200px;
                width: 200px;
                background-color: lightblue;
                display:inline-block;
                margin: 20px;
            }
            .circulo2{
                border-radius: 60%;
                height:200px;
                width: 200px;
                background-color: #c8c8d8;
                display:inline-block;
                margin: 20px;
            }

            .somos{
                height: 400px;
                background-color:rgba(0,0,0,0.3);
                padding: 10px;
                text-align: center;
              
            }
          
            .somos::before{
                content:"";
                display: block;
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-image: url('imagenes/somos.jpg');
                background-size: cover;
                background-position: center;
                opacity: 0.5;
                z-index: -1;
            }
           
            .historia{
                height: 400px;
                padding: 10px;
                background-color: #c8c8d8;
                text-align: center;
            }
            .bloque1, .bloque2{
                display:inline-block;
            }
            .bloque1{
                position: relative;
                left: 0px;
                height: 250px;
                width: 800px;
                border: dashed 2px white;
                
                padding: 10px;
                bottom:80px;
            }
            .bloque1 p{
                text-align: justify;
            }
           
            .bloque2{
               height:350px;
               width: 600px;
               background-image:url('imagenes/historia.jpg');
            }
            
            .mision{
                height: 400px;
               
                padding:15px;
                position: relative;
                display: inline-block;
                padding: 0;
                border: solid 1px black;
            }
            
            .mision_text {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                color: white;   
                background-position: center;
                
            }
           
            .misionImagen{
                height: 400px;
                width: 2000px;
                opacity: 0.5;
                background-size:cover;
            }
            
            .vision{
                height: 400px;
                padding: 10px;
                background-color: #c8c8d8;
                text-align: center;  
            }
            .vision_text, .vision_imagen{
                display:inline-block;
            }
            .vision_text{
                position: relative;
                left: 0px;
                height: 150px;
                width: 800px;
                border: dashed 2px white;
                
                padding: 10px;
                bottom:100px;
                margin: 15px;
            }
            .vision_text p{
                text-align: justify;
            }
            
            .vision_imagen{
               height:350px;
               width: 600px;
               background-image:url('imagenes/vision.jpg');
            }
            .tipos{
                height: 600px;
                padding: 10px;
                background-color: white;
                text-align: center;
            }
            .valores{
                height: 600px;
                padding: 10px;
                background-color: white;
                text-align: center;
            }
            
        </style>

        <main>
            <div class = "somos">
                <br><br><br>
                <h1>
                    ¿Quienes Somos?
                </h1><br>
                
                <p>
                    Somos una empresa de vigilancia y seguridad privada de colombia que nos encargamos de proteger tu empresa<br>
                    brindando vigilancia e instalación de sistemas de camaras en tu empresa o negocio dando soporte a esos sistemas <br>
                    llevamos mas de #### años en esta labor tenemos sedes en ## ciudades de nuestro pais
                </p>
                
                
            </div>
            <div class = "historia">
               
                <div class = "bloque1">
                <h1>
                        NUESTRA HISTORIA
                    </h1><br>
                    
                    <p>
                        La empresa fue fundada por ######### en el año ####, la idea fue tomada por las inseguridades de nuestras<br>
                        ciudades y empresas por hurtos, sucesos y muertes, donde el señor ####### fue atracado y robado y su hija <br>
                        fue muerta y nadie lo pudo ayudar en este incidente y por esta razón el decidio crear la empresa en vigilancia <br>
                        y seguridad privada para brindar una mayor protección a las empresas de nuestro pais, creamos la primer  <br>
                        sede en barranquilla en año #### donde solo empezamos con 3 vigilantes ademas muchas dificultades se  <br>
                        presentaron, en el primer dia de trabajo fuimos robados y se nos bajaron las ganas de seguir a muchos  <br>
                        pero seguimos esforzandonos en esos momentos dificiles y logramos crecer muchos al cabo de 4 años de  <br>
                        creada la empresas tuvimos 500 trabajadores y ofreciamos el sevicio a mas de 100 empresas en colombia  <br>
                        llegamos a tener sedes en cartagena, bogota, cali, bucaramanga,medellin, magdalena, magange, etc. <br>
                        
                    </p>
                </div>

                <div class = "bloque2">
                        
                </div>
               


                

            </div>
            
           <div class = "mision">
                 <img src="imagenes/mision.jpg" class = "misionImagen">
                 <div class = "mision_text">
                    <h1>
                        MISIÓN
                    </h1><br>
                
                    <p>
                        Proveer una información confiable y oportuna en tiempo real para los usuarios de los servicios de vigilancia y seguridad <br>
                        privada relacionandola con la legilidad e idonia y capacidades tecnicas para los prestadores de los servicios <br>
                    </p>
                 </div>
            </div>
            
            <div class = "vision">
                <div class = "vision_imagen">

                </div>
                <div class = "vision_text">
                    <h1>
                        VISIÓN
                    </h1><br>
                
                    <p>
                        Proporsionar y garantizar seguridad privada integral a nuestros clientes con un recurso humano profesional <br> 
                         y calificado empleando tecnología innovadora y recurrir a las necesidades y exigencias permitiendo generar <br>
                         tranquilidad, satisfacción y confianza. 
                    </p>
                 </div>

                
            </div>
            <div class = "tipos">
                <br><br><br><br>
                 <h1>
                    LABORES MANEJADAS
                </h1><br>
               
                <div class = "circulo">
                    <br><br><br><br><br>
                    Supervición
                </div>
                <div class = "circulo">
                    <br><br><br><br><br>
                    Listado
                </div>
                <div class = "circulo">
                    <br><br><br><br><br>
                    Supervición
                </div>
                <div class = "circulo">
                    <br><br><br><br><br>
                    Supervición
                </div>
                <div class = "circulo">
                    <br><br><br><br><br>
                    Supervición
                </div>



               
                
            </div>
            <div class = "valores">
                <br><br><br>
                 <h1>
                    VALORES
                </h1><br>
                <div class = "circulo2">
                    <br><br><br><br><br>
                    Integridad
                </div>
                <div class = "circulo2">
                    <br><br><br><br><br>
                    Integridad
                </div>
                <div class = "circulo2">
                    <br><br><br><br><br>
                    Integridad
                </div>
                <div class = "circulo2">
                    <br><br><br><br><br>
                    Integridad
                </div>
                <div class = "circulo2">
                    <br><br><br><br><br>
                    Integridad
                </div>
            
                


               
                
            </div>
        

              
        </main>


<?php include("template/pie.php"); ?>