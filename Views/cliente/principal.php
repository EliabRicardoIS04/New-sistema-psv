<?php
$page = "principal";

// Ajusta la ruta de la imagen según sea necesario
$img = "/proaula/Views/img/principalfondo.jpg";
?>

<main>
    <section class="contenedor-1">
        <div class="cor">
            <img src="<?php echo $img; ?>" alt="Fondo Principal">
            <div class="corHijo">
                <h1>Obten tu servicio ahora</h1>
                <p style="color: white;">Somos la empresa que se preocupa por
                    tu seguridad, cuidamos tu bienestar con
                    productos y servicios de calidad.
                </p>
                <a id="boton-1" href="?views=login">
                    OBTEN TUS PRODUCTOS
                </a>
            </div>
        </div>
    </section>
</main>
