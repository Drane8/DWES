<?php
include "includes/cabecera.php";
?>
<form id='form' action="compra.php" method="post">
  <div>
    <fieldset>
      <legend>Tarjeta de crédito</legend>
      <label>Titular</label>
      <input type="text" name="titular" /><br />
      
      <label>Número Tarjeta</label>
      <input type="text" name="tarjeta" /><br />
    </fieldset>
    <label>&nbsp;</label>
    <input type="submit" name="comprar" value="Comprar" /><br />
  </div>
</form>
<?php
include "includes/pie.php";
?>