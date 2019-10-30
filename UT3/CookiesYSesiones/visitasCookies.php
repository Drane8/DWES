<?php
$caducidad = 60 * 60 * 24 * 30 + time(); 

if($_COOKIE["visitas"] == NULL){
    setcookie("visitas", 1, $caducidad); 
} else {
    $suma = $_COOKIE["visitas"] + 1;
    setcookie("visitas", $suma, $caducidad); 
}

if ($_COOKIE["visitas"] > 4) {
    echo "Tienes un cupón de descuento del 25%! tu visita nª ". $_COOKIE["visitas"];
}
?>