<?php
session_start();
include "includes/cabecera.php";
echo "<script>
document.getElementById('login').classList.add('active');
</script>";
if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
  ?>
  <div>
    Ya estas logueado<br>
    <form id='form' action="validar.php" method="post">
      <input type="submit" name="logout" value="Log out" /><br />

    </form>
  </div>
<?php
} else {
  ?>
  <form id='form' action="validar.php" method="post">
    <div>
      <label>Usuario</label>
      <input type="text" name="usuario" required /><br />
      <label>Contraseña</label>
      <input type="password" name="password" required /><br />
      <label>&nbsp;</label>
      <input type="submit" name="login" value="Login" /><br />
    </div>
  </form>
<?php
}
include "includes/pie.php";
?>