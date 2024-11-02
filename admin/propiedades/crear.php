<?php

require '../../includes/templates/config/database.php';
$db = conectarDB();


require '../../includes/funciones.php';

incluirTemplates('header');
?>

<main class="contenedor seccion">
    <h1>Crear</h1>

    <a href="../index.php" class="boton boton-verde">Volver</a>

    <form action="" class="formulario">
        <fieldset>
            <legend>Informacion General</legend>

            <label for="titulo">Titulo : </label>
            <input type="text" id="titulo" placeholder="Titulo ">

            <label for="precio">Precio : </label>
            <input type="number" id="precio" placeholder="Precio ">

            <label for="imagen">Imagen : </label>
            <input type="file" id="imagen" accept="image/jpeg">

            <label for="descripcion">Descripcion</label>
            <textarea name="descripcion" id="descripcion"></textarea>
        </fieldset>


        <fieldset>
            <legend>Informacion de la propiedad</legend>

            <label for="habitaciones">habitaciones : </label>
            <input type="number" id="habitaciones" placeholder="Cantidad de habitaciones " min="1" max="9" >


            <label for="wc">Baños : </label>
            <input type="number" id="wc" placeholder="Cantidad de WC " min="1" max="9" >

            <label for="parkin">Parking : </label>
            <input type="number" id="parking" placeholder="Cantidad de Parkin " min="1" max="9" >
        </fieldset>


        <fieldset>
            <legend>Vendedor</legend>

            <select name="" id="">
                <option value="Juan">Juan</option>
                <option value="Ruben">Ruben</option>
            </select>
        </fieldset>


        <input type="submit" value="Crear Propiedad" class="boton boton-verde">

    </form>

</main>

<?php
incluirTemplates('footer');
?>
