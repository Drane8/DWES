
<?php
if ($_REQUEST['radio'] == "rojo")
    setcookie("color", "#ff0000", time() + 3600, "/");
elseif ($_REQUEST['radio'] == "verde")
    setcookie("color", "#00ff00", time() + 3600, "/");
elseif ($_REQUEST['radio'] == "azul")
    setcookie("color", "#0000ff", time() + 3600, "/");
?>
<html>
    <head>
        <title>Problema</title>
    </head>
    <body>
    <center>
        Se creó la cookie.
        <br>
        <a href="formCookie.php">Volver a la página</a>
    </center>
</body>
</html>