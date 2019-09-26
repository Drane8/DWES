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

            <h2>Variables, tipos de datos, operadores y constantes</h2>
            <hr />
            <table border="1px solid black">
                <caption>Datos de un alumno</caption>
                <?php
                define('INSTITUTO', 'CI Mª Ana Sanz');
                define('HORAS', 8);
                $nombre = 'María Huici';
                $edad = 23;
                $modulo = 'Desarrollo en entorno servidor';
                $nota1 = 7.5;
                $nota2 = 6;
                $media = ($nota1 + $nota2) / 2;
                echo "<tr><td>Nombre:</td>
                <td>$nombre</td></tr>";
                echo "<tr><td>Edad:</td>
                <td>$edad</td></tr>";
                echo "<tr><td>Módulo:</td>
                <td>$modulo</td></tr>";
                echo "<tr><td>Media:</td>
                <td>$media</td></tr>";?>
            </table>
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