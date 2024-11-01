<?php
//constantes
/*
1- no se necesita usar $
2- solo se define con el metodo define
3- se asigna una unica vez
4- el alcance o SCOPE es  globalse puede acceder desde cualquier logar de las constantes
*/

//definir una constante y su valor

define('CUOTA',2000);

$valorcuota=CUOTA;

echo "el valor de la cuota es: $valorcuota";
echo"<br/>";
echo"<br/>";
echo "el valor de la cuota es: " .CUOTA. "<br/>";




?>

