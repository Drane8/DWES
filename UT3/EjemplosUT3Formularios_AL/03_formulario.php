<?php

include "includes/cabecera.php";
?>
<form id='form' action="ejemplo03.php" method="post">
    <div>
        <label>Nombre</label>
        <input type="text" name="nombre" /><br />
        <br />

        <label>Comentarios</label>
        <textarea name="comentarios" rows="6" cols="25">Comentarios</textarea>
        <br />

        <label>&nbsp;</label>
        <input type="submit" name="" value="Enviar" /><br />
    </div>
</form>
<?php
include "includes/pie.php";
?>