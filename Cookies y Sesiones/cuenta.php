<?php
/**
 * Esta página da la opcion al usuario de crear una cuenta o en caso de que ya
 * este creada borrarla par apoder hacer una nueva
 * 
 * @author Daniel García
 */
include "includes/cabecera.php";
if (isset($_COOKIE['usuario']) && isset($_COOKIE['password'])) {
  ?>
  <div>
    Ya hay una cuenta creada<br>
    <form id='form' action="crear_cuenta.php" method="post">
      <input type="submit" name="borrar" value="Borrar cuenta" /><br />

  </form>
  </div>

<?php
} else {
  ?>
  <form id='form' action="crear_cuenta.php" method="post">
    <div>
      <label>Usuario</label>
      <input type="text" name="usuario" required /><br />
      <label>Contraseña</label>
      <input type="password" name="password" required /><br />
      <label>&nbsp;</label>
      <input type="submit" name="crear" value="Crear cuenta" /><br />

    </div>
  </form>
<?php
}
include "includes/pie.php";
?>