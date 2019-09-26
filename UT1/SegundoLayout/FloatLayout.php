<!DOCTYPE html>
<?php
/**
 * 
 * @author Daniel García
 * 
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

    <h2>Layout Flotante</h2>
    <p> En este ejemplo, hemos creado un encabezado, dos columnas / cuadros y un pie de página. En pantallas más
        pequeñas, las columnas se apilarán una encima de la otra. </p>
    <p> Cambie el tamaño de la ventana del navegador para ver el efecto de respuesta (aprenderá más sobre esto en
        nuestro el capítulo, HTML Resposive).</p>

    <header>
        <h2>Ejemplo de PHP y repasando HTML5</h2>
    </header>

    <section>
        <nav>
            <ul>
                <li><a href="https://www.w3schools.com/html/default.asp">HTML en w3schools</a></li>
                <li><a href="https://www.w3schools.com/css/default.asp">CSS en w3schools</a></li>
            </ul>
            <img src="img/logo.png" alt="Logo MASANZ" width="200px">
        </nav>
        <article>
            <header> Empezamos con texto y también podemos recordar HTML y CSS<br>
                Revisa el Archivo CSS y Cambia Elementos y Valores<br>
                Si tenemos problemas con los acentos y las ñ tenemos varias posibilidades:</header>

            <p> <b>La etiqueta article</b> tiene contenido con significado propio,<br>puede ser de otros autores. </p>
            <p>La codificación:
                <ul>
                    <li>la codoficación del proyectyo y los archivos debe ser (UTF-8)</li>
                    <li>se revisa en un editor de texto tipo Bloc de Notas, si el archivo esta realmente alamacenado como utf8,</li>
                    <li>siempre tenemos las entidades de caracter,</li>
                    <li>o bien revisamos php.ini: default_charset y probamos a quitar el comentario...</li>
                    <li>trabajemos con BD ultilizaremos funciones para codoficar en utf8</li>
                </ul>
            </p>
        </article>
    </section>

    <footer>
        <p>FOOTER</p>
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