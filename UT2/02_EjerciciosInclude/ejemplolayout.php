<!DOCTYPE html>
<html lang="es">

<head>
    <title>Layout con CSS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">

</head>

<body>

    <header>
        <img src='img\logo.png' width="85" height="70" alt="El logo de Mª Ana Sanz" />
        <h1>Ejemplos de la UT2</h1>
        <p>Se debe cambiar el tamaño de la ventana del navegador para ver el efecto de respuesta.</p>
    </header>

    <nav>
        <a href="#">Enlace1</a>
        <a href="#">Enlace2</a>
        <a href="#">Enlace3</a>
    </nav>

    <main>
        <section>
           Estoy en un section dentro del main
        </section>
    </main>
    <footer>
        <p>Desarrollo web en entorno servidor</p>
        <p class="copyright">
            &copy;
            <?php
            setlocale(LC_TIME, 'Spanish');
            $fecha = strftime("%A, %d  %B %Y");
            echo utf8_encode($fecha);
            ?> Ejercicios iniciales de PHP
        </p>
    </footer>
</body>

</html>