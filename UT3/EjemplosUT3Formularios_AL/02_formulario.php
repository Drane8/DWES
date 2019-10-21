<?php
// puedo dejar vacío action = "" o action = "?"
include "includes/cabecera.php";
?>
<form id='form' action="" method="">
<div>
    <label>Nombre</label>
    <input type="text" name="nombre" value="Pedro" />
    <br />

    <label>Edad</label>
    <input type="text" name="edad" value="21" />
    <br />

    <label>&nbsp;</label>
    <input type="submit" name="" value="Enviar" /><br />
</div>
</form>
<?php
include "includes/pie.php";
?>