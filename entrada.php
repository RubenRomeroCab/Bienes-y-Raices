<?php

require 'includes/funciones.php';

incluirTemplates('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Guia para la decoracion de tu hogar</h1>

        <picture>
           
            <source srcset="build/img/blog2.webp" type="image/webp">
            <source srcset="build/img/blog2.jpg" type="image/jpg">
            <img loading="lazy" src="build/img/blog2.jpg" alt="imagen del blog">
        </picture>

        <p class="informacion-meta">Escrito el: <span>14/10/2024</span> por: <span>Admin</span></p>


        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            Quidem, nulla nesciunt aspernatur quas eum dignissimos ab nam sapiente maiores. Animi vitae earum, soluta
            consequatur natus velit quam voluptatibus beatae odit?</p>

        </div>
    </main>

    <?php
       incluirTemplates('footer');
    ?>
