<?php
$x = 2;
$y = 3;

// Imprimir los valores de x e y antes de intercambiarlos
echo "Antes del intercambio: x=$x, y=$y <br/>";

// Intercambiar los valores de x e y
$y = $x + $y;
$x = $y - $x;
$y = $y - $x;

// Imprimir los valores de x e y después de intercambiarlos
echo "Después del intercambio: x=$x, y=$y";
?>