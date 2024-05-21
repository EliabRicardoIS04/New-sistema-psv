<?php 
 $page = "servicios";
 class servicio {
    public $idServicio;
    public $servicio;

    function __construct($servicio) {
        $this->servicio = $servicio;
    }

    function get_servicio() {
        return $this->servicio;
    }
}

class empleado extends servicio {
    public $idEmpleado;
    public $nombre;
    public $apellido;
    public $edad;
    public $foto;
    public $descripcion;

    function __construct($foto, $nombre, $apellido, $edad, $descripcion,  $servicio) {
        parent::__construct($servicio);
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
        $this ->foto = $foto;
        $this->descripcion = $descripcion;
    }

    // Resto de los métodos...

    function Mostrar(){
        return ' <center>
        <table style="border-collapse: collapse; border: 1px solid white;">
            <thead>
                <tr>
                    <th style="border: 1px solid white; padding: 5px;">foto</th>
                    <th style="border: 1px solid white; padding: 5px;">Nombre</th>
                    <th style="border: 1px solid white; padding: 5px;">apellido</th>
                    <th style="border: 1px solid white; padding: 5px;">edad</th>
                    <th style="border: 1px solid white; padding: 5px;">descripción</th>
                    <th style="border: 1px solid white; padding: 5px;">servicio</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="border: 1px solid white; padding: 5px;"><img src="data:image/jpeg;base64,' . base64_encode($this->foto) . '" alt="Imagen JPG" width="25" height="25"></td>
                    <td style="border: 1px solid white; padding: 5px;">' . $this->nombre . '</td>
                    <td style="border: 1px solid white; padding: 5px;">' . $this->apellido . '</td>
                    <td style="border: 1px solid white; padding: 5px;">' . $this->edad . '</td>
                    <td style="border: 1px solid white; padding: 5px;">' . $this->descripcion . '</td>
                    <td style="border: 1px solid white; padding: 5px;">' . $this->servicio . '</td>
                </tr>
            </tbody>
        </table>
        </center>   ';
    }
}

$listaEmpleados = new SplDoublyLinkedList;

$urlfoto1 = "imagenes/userempleasos.png";
                    $contenido = file_get_contents($urlfoto1);
                    $servi = "vigilante";
                    
                    
                    $empleado1 = new empleado($contenido,"Juan", "perez", 25, "es muy fdofsdfsd", $servi);
                    $empleado2 = new empleado($contenido,"carlos", "zuñiga", 22, "es muy inteligente", $servi);
                    $empleado3 = new empleado($contenido,"hernesto", "paredes", 26, "es muy fdsfsdfsd",$servi);
                    $empleado4 = new empleado($contenido,"pedro", "ricardo", 45, "es muy dfsdffdsf", $servi);
                    $empleado5 = new empleado($contenido,"maria", "arias", 55, "es muy idsfsdfsddfe", $servi);

                    $listaEmpleados->push($empleado1);
                    $listaEmpleados->push($empleado2);
                    $listaEmpleados->push($empleado3);
                    $listaEmpleados->push($empleado4);
                    $listaEmpleados->push($empleado5);
 ?>

?>
       
        <main>
           <div class = "container">
           <div class = "vigilancia">
                <h2>
                    vigilancia
                    
                </h2>
                <p>
                    la vigilancia es esencial para garantizar la seguridad. En áreas como la seguridad pública, 
                    la vigilancia permite monitorear y detectar posibles amenazas, delitos o comportamientos sospechosos.
                     Los sistemas de vigilancia, como las cámaras de seguridad o los sistemas de detección de intrusos, 
                     ayudan a prevenir y responder rápidamente ante situaciones peligrosas.
                </p>
                <h2>
                    empleados
                </h2>
                <?php
                
                    foreach($listaEmpleados as $lista){
                        echo $lista ->Mostrar();
                    }
                ?>

            </div>       

            <div class = "supervision">
                <h2>
                    Supervición
                </h2>
                <p>
                    La supervisión de la seguridad es de vital importancia en cualquier entorno, ya sea en el ámbito personal,
                    empresarial o incluso a nivel de la sociedad en su conjunto. La supervisión efectiva de la seguridad 
                    implica la monitorización constante y proactiva de posibles amenazas, riesgos y vulnerabilidades
                </p>
                 <h2>
                    empleados
                 </h2>   
                  <?php
                    $servi = "supervisor";
                    
                    foreach($listaEmpleados as $lista){
                        echo $lista -> Mostrar();
                    }
                  ?>
            </div>


           </div>
            <div class = "config">
                 <h2>
                    Configurar sistemas de camaras
                </h2>
                <p>
                    La supervisión de la seguridad es de vital importancia en cualquier entorno, ya sea en el ámbito personal,<br>
                    empresarial o incluso a nivel de la sociedad en su conjunto. La supervisión efectiva de la seguridad <br>
                    implica la monitorización constante y proactiva de posibles amenazas, riesgos y vulnerabilidades
                </p>
                 <h2>
                    empleados
                 </h2>   
                  <?php
                   
                    foreach($listaEmpleados as $lista){
                        echo $lista -> Mostrar();
                    }
                  ?>
            </div>
        </main>


