<?php
require 'includes/funciones.php';
incluirTemplates('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Propiedad</h1>
        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpg">
            <img loading="lazy" src="build/img/destacada.jpg" alt="Imagen de la propiedad">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">>$3.000.000</p>

            <ul class="iconos-caracteristicas">
                <li>
                    <img loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                    <p>3</p>
                </li>
                <li>
                    <img loading="lazy" src="build/img/icono_estacionamiento.svg" alt="estacionamiento">
                    <p>3</p>
                </li>
                <li>
                    <img loading="lazy" src="build/img/icono_dormitorio.svg" alt="dormitorio">
                    <p>4</p>
                </li>
            </ul>


            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Quidem, nulla nesciunt aspernatur quas eum dignissimos ab nam sapiente maiores. Animi vitae earum,
                soluta consequatur natus velit quam voluptatibus beatae odit?</p>

        </div>
    </main>
    <?php
        incluirTemplates('footer');
    ?>
