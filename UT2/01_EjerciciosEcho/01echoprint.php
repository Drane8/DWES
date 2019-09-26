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
        <h1>Ejercicios de la UT2</h1>

    </header>

    <nav>
        <a href="#">Enlace1</a>
        <a href="#">Enlace2</a>
        <a href="#">Enlace3</a>
    </nav>

    <main>
        <section>

            <p>Hola! este es mi primer ejemplo en PHP</p>
            <hr />
            <p>PHP es un lenguaje de script de servidor</p>
            <p> También se pueden escribir con echo, en PHP, las <p> de la siguiente manera: </p>
                <?php
                echo "<p>Con la sentencia <span class='comen'>echo</span> mostramos información en el navegador</p>";
                echo "<p>Si utilizo \\n puedo insertar \n saltos de línea en el código fuente\n del navegador</p>";
                echo '<p>pero solo funciona con las comillas dobles\n, no con las simples </p>';
                echo "<hr />";
                ?>
                <h3>Ahora practicaremos con print</h3>
                <?php
                print "Hola este es mi primer ejemplo con <span class='comen'>print</span> <br />";
                print 'Las comillas simples también funcionan con <span class="comen">print</span>'
                ?>
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