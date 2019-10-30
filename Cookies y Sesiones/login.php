<?php
include "includes/cabecera.php";
?>
<form id='form' action="validar.php" method="post">
  <div>
    <label>Usuario</label>
    <input type="text" name="usuario" /><br />
    <label>Contraseña</label>
    <input type="password" name="password" /><br />
    <label>&nbsp;</label>
    <input type="submit" name="login" value="Login" /><br />
  </div>
</form>
<?php
include "includes/pie.php";
?>