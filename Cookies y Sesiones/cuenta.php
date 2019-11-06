<?php
include "includes/cabecera.php";
include "includes/funciones.php";
echo "<script>
document.getElementById('cuenta').classList.add('active');
</script>";
if (existeCuenta()) {
  ?>
  <div>
    Ya hay una cuenta creada<br><br><br>
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