<?php

require 'includes/funciones.php';

incluirTemplates('header', $inicio = true);
?>
<main class="contenedor seccion">
    <h1>Más Sobre Nostros</h1>

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
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, molestias veritatis placeat ex
                a quasi hic eveniet molestiae consequatur incidunt eligendi illo illum labore quaerat, aperiam fugit
                ut! Ut, neque.</p>
        </div>
        <div class="icono">
            <img src="build/img/icono3.svg" alt="icono precio" loading="lazy">
            <h3>Tiempo</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, iure? Ratione iusto ut odit
                laborum fugit error qui repudiandae, atque consequuntur possimus eius nam unde excepturi dolor
                doloremque corrupti dolore!</p>
        </div>
    </div>
</main>

<section class="seccion contenedor">
    <h2>Casas y departamentos en venta</h2>

    <div class="contenedor-anuncios">
        <div class="anuncio">
            <picture>
                <source srcset="build/img/anuncio1.webp" type="image/webp">
                <source srcset="build/img/anuncio1.jpg" type="image/jpg">
                <img src="build/img/anuncio1.jpg" alt="anuncio" loading="lazy">
            </picture>
            <div class="contenido-anuncio">
                <h3>Casa de lujo en el lago</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, eius?
                    Temporibus repudiandae ratione quidem excepturi fugiat alias vitae
                    nulla minus! Animi consequatur accusantium facilis nihil nulla labore porro deleniti ullam.
                </p>
                <p class="precio">3.000.000</p>
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
                <a href="anuncios.html" class="boton boton boton-amarillo-block">Ver propiedad</a>
            </div>
        </div>

        <div class="anuncio">
            <picture>
                <source srcset="build/img/anuncio2.webp" type="image/webp">
                <source srcset="build/img/anuncio2.jpg" type="image/jpg">
                <img src="build/img/anuncio2.jpg" alt="anuncio" loading="lazy">
            </picture>
            <div class="contenido-anuncio">
                <h3>Casa terminados de lujo</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, eius?
                    Temporibus repudiandae ratione quidem excepturi fugiat alias vitae
                    nulla minus! Animi consequatur accusantium facilis nihil nulla labore porro deleniti ullam.
                </p>
                <p class="precio">3.000.000</p>
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
                <a href="anuncios.html" class="boton boton-amarillo-block">Ver propiedad</a>
            </div>
        </div>

        <div class="anuncio">
            <picture>
                <source srcset="build/img/anuncio3.webp" type="image/webp">
                <source srcset="build/img/anuncio3.jpg" type="image/jpg">
                <img src="build/img/anuncio3.jpg" alt="anuncio" loading="lazy">
            </picture>
            <div class="contenido-anuncio">
                <h3>Casa de lujo con piscina</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, eius?
                    Temporibus repudiandae ratione quidem excepturi fugiat alias vitae
                    nulla minus! Animi consequatur accusantium facilis nihil nulla labore porro deleniti ullam.
                </p>
                <p class="precio">3.000.000</p>
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
                <a href="anuncios.html" class="boton boton boton-amarillo-block">Ver propiedad</a>
            </div>
        </div>
    </div>

    <div class="alinear-derecha">
        <a href="anuncios.html" class="boton-verde">Ver todas</a>
    </div>
</section>
<section class="imagen-contacto">
    <h2>Encuntra la casa de tus sueños</h2>
    <p>Llena el formulario y un asesor se pondra en contacto contigo</p>
    <a href="contacto.html" class="boton-amarillo">Contacto</a>
</section>
<div class="contenedor seccion-inferior">
    <section class="blog">
        <h3>Nuestro blog</h3>
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog1.webp" type="image/webp">
                    <source srcset="build/img/blog1.jpg" type="image/jpg">
                    <img loading="lazy" src="build/img/blog1.jpg" alt="imagen del blog">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.html">
                    <h4>Terraza en el techo de tu casa</h4>
                    <p class="informacion-meta">Escrito el: <span>14/10/2024</span> por: <span>Admin</span></p>
                </a>
                <p>Consejos para contruir una terraza en el techo de tu casa con los mejores materiales y ahorrando
                    dinero </p>
            </div>
        </article>
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog2.webp" type="image/webp">
                    <source srcset="build/img/blog2.jpg" type="image/jpg">
                    <img loading="lazy" src="build/img/blog2.jpg" alt="imagen del blog">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.html">
                    <h4>Guia para la decoracion de tu hogar</h4>
                    <p class="informacion-meta">Escrito el: <span>14/10/2024</span> por: <span>Admin</span></p>
                </a>
                <p>Maximiza el espacio en tu hogar con esta guia , aprende a combinar muebles y colores para darle
                    vida a tu espacio </p>
            </div>



        </article>

    </section>
    <section class="testimoniales">
        <h3>Testimoniales</h3>
        <div class="testimonial">
            <blockquote>
                El personal de comportó de una excelente forma , muy buena atencion y la casa que me ofrecieron
                cumple con todas mis expectativas.
            </blockquote>
            <p> - Ruben romero</p>
        </div>
    </section>
</div>
    <?php
       incluirTemplates('footer');
    ?>
