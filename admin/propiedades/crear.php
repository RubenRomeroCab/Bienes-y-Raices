<?php

require '../../includes/templates/config/database.php';
$db = conectarDB();

//echo "<pre>";
//var_dump($_SERVER['REQUEST_METHOD']);
//echo "</pre>";


//Mensajes de errores 

$errores = [];

$titulo = '';
$precio = '';
$descripcion = '';
$habitaciones = '';
$wc = '';
$estacionamiento = '';
$vendedores = '';



//Ejecutar el codigo despues de validar
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  //  echo "<pre>";
   // var_dump($_POST);
   // echo "</pre>";

    $titulo = $_POST['titulo'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];
    $habitaciones = $_POST['habitaciones'];
    $wc = $_POST['wc'];
    $estacionamiento = $_POST['estacionamiento'];
    $vendedores = $_POST['vendedores_id'];

    if (!$titulo) {
        $errores[] = 'Debes añadir un titulo';
    }

    if (!$precio) {
        $errores[] = 'Debes añadir un precio';
    }

    if (strlen($descripcion) < 50) {
        $errores[] = "Debes añadir una descripcion de mas de 50 caracteres";
    }

    if (!$habitaciones) {
        $errores[] = "Debes añadir una habitacion";
    }

    if (!$wc) {
        $errores[] = "Debes añadir una cantidad de baños";
    }

    if (!$estacionamiento) {
        $errores[] = "Debes añadir una estacionamiento";
    }

    if (!$vendedores) {
        $errores[] = "Debes seleccionar un vendedor";
    }

    // echo "<pre>";
    // var_dump($errores);
    // echo "</pre>";


    //Revisamos si tenemos errores
    if (empty($errores)) {

        $query = "INSERT INTO propiedades (titulo , precio ,descripcion , habitaciones , wc , estacionamiento , vendedores_id) 
                    VALUES ('$titulo ' , '$precio' , '$descripcion' , '$habitaciones', '$wc' , '$estacionamiento', '$vendedores')";

        echo $query;

        $resultado = mysqli_query($db, $query);
    }
}


require '../../includes/funciones.php';
incluirTemplates('header');
?>

<main class="contenedor seccion">
    <h1>Crear</h1>

    <a href="../index.php" class="boton boton-verde">Volver</a>

    <?php  foreach($errores as $error):?>

        <div class="alerta error">
            <?php echo $error; ?>

        </div>

    
    <?php endforeach; ?>

    <form id="formulario" class="formulario" method="POST" action="">
        <fieldset>
            <legend>Informacion General</legend>

            <label for="titulo">Titulo : </label>
            <input type="text" id="titulo" name="titulo" placeholder="Titulo " value="<?php echo $titulo;?>">

            <label for="precio">Precio : </label>
            <input type="number" id="precio" name="precio" placeholder="Precio " value="<?php echo $precio;?>">

            <label for="imagen">Imagen : </label>
            <input type="file" id="imagen" name="imagen" accept="image/jpeg">

            <label for="descripcion">Descripcion</label>
            <textarea name="descripcion" id="descripcion"><?php echo $descripcion ?></textarea>
        </fieldset>


        <fieldset>
            <legend>Informacion de la propiedad</legend>

            <label for="habitaciones">habitaciones : </label>
            <input type="number" id="habitaciones" name="habitaciones" placeholder="Cantidad de habitaciones " min="1" max="9" value="<?php echo $habitaciones; ?>">


            <label for="wc">Baños : </label>
            <input type="number" id="wc" name="wc" placeholder="Cantidad de WC " min="1" max="9" value="<?php echo $wc;?>">

            <label for="estacionamiento">Parking : </label>
            <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Cantidad de Parkin " min="1" max="9" value="<?php echo $estacionamiento;?>">
        </fieldset>


        <fieldset>
            <legend>Vendedor</legend>

            <select name="vendedores_id">
                <option value="">Seleccione</option>
                <option value="1">Juan</option>
                <option value="2">Ruben</option>
            </select>
        </fieldset>


        <input type="submit" value="Crear Propiedad" class="boton boton-verde">

    </form>

</main>

<?php
incluirTemplates('footer');
?>