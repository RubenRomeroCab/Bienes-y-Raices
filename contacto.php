<?php

require 'includes/funciones.php';

incluirTemplates('header');
?>

    <main class="contenedor seccion">
        <h1>Contacto</h1>

        <picture class="img">
            <source srcset="build/img/destacada3.webp"  type="image/webp">
            <source srcset="build/img/destacada3.jpg"  type="image/jpg">
            <img loading="lazy" src="build/img/destacada3.jpg" alt="imagen destacada">
        </picture>
        <h2>Llene el forumalario de contacto</h2>

        <form class="formulario" action="">

            <fieldset>
                <legend>Información personal</legend>

                <label for="nombre">Nombre</label>
                <input type="text" placeholder="Tu nombre" id="nombre">

                <label for="email">E-mail</label>
                <input type="email" placeholder="Tu E-mail" id="email">

                <label for="telefono">Telefono</label>
                <input type="tel" placeholder="Tu E-mail" id="telefono">

                <label for="mensaje">Mensaje</label>
                <textarea name="mensaje" id="mensaje"></textarea>
            </fieldset>

            <fieldset>
                <legend>Informacion de la propiedad</legend>

                <label for="opciones">Vende o Compra: </label>
                <select name="" id="opciones">
                    <option value="" disabled selected>Seleccione</option>
                    <option value="Compra">Compra</option>
                    <option value="Vende">Vende</option>
                </select>

                <label for="precio">Precio o Presupuesto</label>
                <input type="number" placeholder="Precio o Presupuesto" id="precio">
            </fieldset>


            <fieldset>
                <legend>Información de la propiedad</legend>
            
                <p>¿Cómo quieres que nos pongamos en contacto?</p>
            
                <div class="forma-contacto">
                  
                        <label for="contactar-telefono">Teléfono</label>
                        <input name="contacto" type="radio" value="telefono" id="contactar-telefono">
                   
            
                  
                        <label for="contactar-email">E-mail</label>
                        <input name="contacto" type="radio" value="email" id="contactar-email">
                  
                </div>
            
                <p>Teléfono</p>
            
                <label for="fecha">Fecha:</label>
                <input type="date" id="fecha">
            
                <label for="hora">Hora</label>
                <input type="time" id="hora" min="09:00" max="18:00">
            </fieldset>
            <input type="submit" value="Enviar" class="boton-verde">
        </form>
    </main>

    <?php
       incluirTemplates('footer');
    ?>
