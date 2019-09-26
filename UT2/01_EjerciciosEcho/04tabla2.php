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
                <caption>Datos de un producto</caption>
                <?php
                define('IVA', 21);
                define('DESCUENTO', 25);
                $precioProducto = 234.89;
                $descuento = $precioProducto * DESCUENTO / 100;
                $precioDescuento = $precioProducto - $descuento;
                $iva = $precioProducto * IVA / 100;
                $precioFinal = $precioDescuento + $iva;
                echo "<tr><td>Precio producto::</td>
                <td>$precioProducto</td></tr>";
                echo "<tr><td>Descuento 25%</td>
                <td>$descuento</td></tr>";
                echo "<tr><td>Precio con descuento::</td>
                <td>$precioDescuento</td></tr>";
                echo "<tr><td>IVA 21%</td>
                <td>$iva</td></tr>";
                echo "<tr><td>Precio final</td>
                <td>$precioFinal</td></tr>";
                ?>
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