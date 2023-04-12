<?php
 #echo '<h1 style="font-size:40px">Hola Noticias</h1>';
 $saludar = 'Hola noticias';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Proyecto</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <!-- seccion cabecera -->
    <header>
        <div>
            <?= $saludar; ?>
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
                    <a href="index.html">Inicio</a>
                </li>
                <li>
                    <a href="#">Acerca de</a>
                </li>
                <li>
                    <a href="#">Contacto</a>
                </li>
            </ul>
        </div>
        <div class="right">
            hola
        </div>
    </nav>
    <!-- seccion principal -->
    <section>
        <aside>
            <ul>
                <li>
                    <a href="#">Categoría 1</a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="#">Categoría 2</a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="#">Categoría 3</a>
                </li>
            </ul>
        </aside>
        <article>
            <div class="notice">
                <a href="#">
                    <div class="articulo">
                        <div class="imagen">
                            <img src="img/noticias/imagen_1.jpeg" alt="" width="100%">
                        </div>
                        <div class="text">
                            <h1 class="title-articulo">Titulo</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem unde, enim hic doloremque similique, quam exercitationem, aliquam architecto velit dolorum inventore quae libero magnam iure molestiae quia ad nostrum dolor.</p>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="articulo">
                        <div class="imagen">
                            <img src="img/noticias/imagen_1.jpeg" alt="" width="100%">
                        </div>
                        <div class="text">
                            <h1 class="title-articulo">Titulo</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem unde, enim hic
                                doloremque similique, quam exercitationem, aliquam architecto velit dolorum inventore
                                quae libero magnam iure molestiae quia ad nostrum dolor.</p>
                        </div>
                    </div>
                </a>
                <div class="articulo">
                    Noticia
                </div>
                <div class="articulo">
                    Noticia
                </div>
                <div class="articulo">
                    Noticia
                </div>
                <div class="articulo">
                    Noticia
                </div>
            </div>
        </article>
    </section>
    <!-- seccion pie de pagina -->
    <footer>
        pie de pagina
    </footer>
</body>
</html>