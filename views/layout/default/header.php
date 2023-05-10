<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
            if (isset($this->titulo)) {
                echo $this->titulo;
            }
        ?>
    </title>
    <link rel="stylesheet" href="<?= $_layoutParams['ruta_css'] ?>reset.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&family=Roboto+Mono:wght@200;500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="<?= $_layoutParams['ruta_css'] ?>styles.css">
</head>

<body>
    <!-- seccion cabecera -->
    <header>
        <div>

        </div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div>Buscador</div>
    </header>
    <!-- seccion navegador -->
    <nav>
        <div class="left">
            izquierda
        </div>
        <div class="center">
            <ul>
                <li>
                    <a href="<?= $_layoutParams['root'] ?>">Inicio</a>
                </li>
                <li>
                    <a href="#">Acerca de</a>
                </li>
                <li>
                    <a href="<?= $_layoutParams['root'] ?>contactos">Contacto</a>
                </li>
                <li>
                    <a href="<?= $_layoutParams['root'] ?>noticias">Noticias</a>
                </li>
            </ul>
        </div>
        <div class="right">
            hola
        </div>
    </nav>