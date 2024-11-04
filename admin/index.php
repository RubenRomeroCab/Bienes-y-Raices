<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/PHP/bienesraices_inicio/includes/funciones.php";

incluirTemplates('header');
?>

<main class="contenedor seccion">
    <h1>Administrador de bienes raices</h1>

    <a href="propiedades/crear.php" class="boton boton-verde">Nueva propiedad</a>

</main>

<?php
incluirTemplates('footer');
?>
