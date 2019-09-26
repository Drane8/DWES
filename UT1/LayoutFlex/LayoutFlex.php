<!DOCTYPE html>
<?php

/**
 * Ejemplo para enseñar los primeros días
 *  (al menos un comentario obligatorio con las etiquetas @author, @return y @param)
 *
 * Descripción extensa (opcional)
 *
 * @author Fulanito de Tal <fulanito@example.com>
 * @copyright 2019 Fulanito de Tal
 * @license http://www.fsf.org/licensing/licenses/gpl.txt GPL 2 or later
 * @version 2019-09-09
 * @link http://www.example.org
 */
?>
<html lang="es">

<head>
    <title>Plantilla Layout</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<body>

    <h2>CSS Layout Float</h2>
    <p> En este ejemplo, hemos creado un encabezado, dos columnas / cuadros y un pie de página. En pantallas más
        pequeñas, las columnas se apilarán una encima de la otra. </p>
    <p> Cambie el tamaño de la ventana del navegador para ver el efecto de respuesta (aprenderá más sobre esto en
        nuestro el capítulo, HTML Resposive).</p>

    <header>
        <h2>Ciudades</h2>
    </header>

    <section>
        <nav>
            <ul>
                <li><a href="#">London</a></li>
                <li><a href="#">Paris</a></li>
                <li><a href="#">Tokyo</a></li>
            </ul>
        </nav>

        <article>
            <h1>London</h1>

            <p> Londres es la capital de Inglaterra. Es la ciudad más poblada del Reino Unido, con un área metropolitana
                de más de 13 millones de habitantes. </p>
            <p> De pie en el río Támesis, Londres ha sido un importante asentamiento durante dos milenios, y su historia
                se remonta a su fundación por los romanos, que la llamaron Londinium. </p>
        </article>
    </section>

    <footer>
        <p>Footer</p>
        <p class="copyright">
            &copy;
            <?php
            setlocale(LC_TIME, 'Spanish');
            $fecha = strftime("%A, %d  %B %Y");
            echo utf8_encode($fecha);
            ?>
            <!-- <?php echo date("Y"); ?> --> Ejercicios iniciales de PHP
        </p>
    </footer>

</body>

</html>