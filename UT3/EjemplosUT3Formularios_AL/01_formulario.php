<?php

include "includes/cabecera.php";
?>
<form id='form' action="ejemplo01-02.php" method="post">
    <div>
        <label>Nombre</label>
        <input type="text" name="nombre" />
        <br />

        <label>Edad</label>
        <input type="text" name="edad" />
        <br />

        <label>&nbsp;</label>
        <input type="submit" name="" value="Enviar" /><br />
    </div>
</form>
<?php
include "includes/pie.php";
?>