<?php
// puedo dejar vacío action = "" o action = "?"
include "includes/cabecera.php";;
?>
<form id='form' action="" method="">
<div>
    <label>Nombre</label>
    <input type="text" name="nombre" /><br />

    <label>Password</label>
    <input type="password" name="" /><br />

    <label>&nbsp;</label>
    <input type="submit" name="" value="Enviar" /><br />
    <input type="hidden" name="" value="siEnviado" /><br />
</div>
</form>
<?php
include "includes/pie.php";
?>