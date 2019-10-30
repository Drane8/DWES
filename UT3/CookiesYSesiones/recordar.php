<?php
if ($_REQUEST['opcion'] == "recordar")
    setcookie("mail", $_REQUEST['mailusuario'], time() + (60 * 60 * 24 * 30), "/"); //30 d�as
elseif ($_REQUEST['opcion'] == "norecordar")
    setcookie("mail", "", time() - 1000, "/");
?>
<html>
    <head>

        <title>Problema</title>
    </head>
    <body>
    <center>
        <?php
        if ($_REQUEST['opcion'] == "recordar")
            echo "cookie creada";
        elseif ($_REQUEST['opcion'] == "norecordar")
            echo "cookie eliminada";
        ?>
        <br>
        <a href="formrecordar.php">Volver a la página</a>
    </center>
</body>

</html>