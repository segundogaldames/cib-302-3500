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
                    <a href="<?= $_layoutParams['root'] ?>contacto">Contacto</a>
                </li>
            </ul>
        </div>
        <div class="right">
            hola
        </div>
    </nav>