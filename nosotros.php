<?php

require 'includes/funciones.php';

incluirTemplates('header');
?>
    <main class="contenedor seccion">
        <h1>Conoce sobre nosotros</h1>

        <div class="nosotros-intro">
            <div class="img">
                <img src="src/img/nosotros.jpg" alt="">
            </div>
            <div class="text">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Eveniet voluptatum quis beatae fuga. Suscipit nisi excepturi
                    voluptas veniam alias tenetur expedita eligendi ex temporibus reprehenderit nemo eos, vitae,
                    asperiores quaerat?
                </p>

                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Quia quod voluptates placeat dolorem tenetur provident et
                    culpa consequatur corrupti tempore assumenda asperiores,
                    rerum distinctio vel ex molestias suscipit ad deleniti.
                </p>
            </div>
        </div>

        <div class="nosotros">
            <h2>Mas sobre nosotros</h2>
            <div class="iconos-nosotros">
                <div class="icono">
                    <img src="build/img/icono1.svg" alt="icono seguridad" loading="lazy">
                    <h3>Seguridad</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, quidem nemo. Veritatis dolorem
                        accusamus sapiente ullam tempore dolor magnam qui delectus nemo doloribus necessitatibus, cumque
                        dolore consectetur ut, autem optio?</p>
                </div>
                <div class="icono">
                    <img src="build/img/icono2.svg" alt="icono precio " loading="lazy">
                    <h3>Precio</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, molestias veritatis placeat
                        ex
                        a quasi hic eveniet molestiae consequatur incidunt eligendi illo illum labore quaerat, aperiam
                        fugit
                        ut! Ut, neque.</p>
                </div>
                <div class="icono">
                    <img src="build/img/icono3.svg" alt="icono precio" loading="lazy">
                    <h3>Tiempo</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, iure? Ratione iusto ut
                        odit
                        laborum fugit error qui repudiandae, atque consequuntur possimus eius nam unde excepturi dolor
                        doloremque corrupti dolore!</p>
                </div>
            </div>
        </div>
    </main>
    <?php
       incluirTemplates('footer');
    ?>