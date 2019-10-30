<?php
session_start();
?>
<html>
    <head>
        <title>Problema</title>
    </head>
    <body>
    <center>
        <?php
        echo "Nombre de usuario recuperado de la variable de sesión:" . $_SESSION['usuario'];
        echo "<br><br>";
        echo "La clave recuperada de la variable de sesión:" . $_SESSION['clave'];
        ?>
    </center>
</body>
</html>
