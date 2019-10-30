<html>
    <head>
        <title>Colores</title>
    </head>
    <body
    <?php if (isset($_COOKIE['color']))
        echo " bgcolor=\"$_COOKIE[color]\""
        ?>
        >
    <center>
        <form action="Cookie.php" method="post">
            Seleccione de que color desea que sea la página::<br>
            <input type="radio" value="rojo" name="radio">Rojo<br>
            <input type="radio" value="verde" name="radio">Verde<br>
            <input type="radio" value="azul" name="radio">Azul<br>
            <input type="submit" value="Crear cookie">
        </form>
    </center>
</body>
</html>