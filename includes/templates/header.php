<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes y Raices</title>
    <link rel="stylesheet" href="/PHP/bienesraices_inicio/build/css/app.css">
</head>

<body>
    <header class="header <?php echo  $inicio ? 'inicio' : '' ;?>">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="index.php">
                    <img src="/PHP/bienesraices_inicio/build/img/logo.svg" alt="logo">
                </a>

                <div class="menu-mobile">
                    <img src="/PHP/bienesraices_inicio/build/img/barras.svg" alt="foto menu navegacion">
                </div>


                <div class="derecha">
                    <img class="dark-mode-boton" src="/PHP/bienesraices_inicio/build/img/dark-mode.svg" alt="">
                    <nav class="navegacion">
                        <a href="nosotros.php">Nosotros</a>
                        <a href="anuncios.php">Anuncio</a>
                        <a href="blog.php">Blog</a>
                        <a href="contacto.php">Contacto</a>
                    </nav>

                </div>

            </div>

            <?php if($inicio) {?>
                 <h1>Venta de casas y departamentos Exclusivos de lujo</h1>
           <?php } ?>
           
        </div>
        </div>

    </header>