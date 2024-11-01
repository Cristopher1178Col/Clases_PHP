<?php
/*
 -Enteros o INT
 -No contienten decimales
 -Puedesn ser positivos o negativos
 -Puede contener numeros octales (base 8) hexadecimales (16) binarios (base 2)
 */

echo "<br />";
echo"------------------ENTEROS---------------";
echo "<br />";


$puntaje =120;
echo $puntaje;
echo "<br />";

//hexadecimal

$numHexa= 0x6FFF6;
echo $numHexa;
echo "<br />";

//convertir string a entero
$puntaje = 50;
$total= "12" + $puntaje;
echo $total;
echo "<br />";

//numeros negativos
$puntajetotal = 8 - 20;
echo $puntajetotal;
echo "<br />";

//obtener un tamaño  de un entero (determinado por el sistema)

echo PHP_INT_SIZE;

//obtener un tamaño minimo de un entero (determinado por el sistema)

echo PHP_INT_MIN;

//obtener un tamaño maximo de un entero (determinado por el sistema)

echo PHP_INT_MAX;
echo "<br />";
echo "---------------------------------DECIMALES-------------------------------";
echo "<br />";

//Definir decimales

$pagototal =102.56;
echo "<br />";
echo $pagototal;

$saldopendiente= -56.23;
echo "<br />";
echo $saldopendiente;

// redondear decimales

$puntaje = 48.51;
echo "<br />";
echo round($puntaje);

//comparar decimales con precision 0.1

$precio = 1.87;
$estimado = 1.98;
echo "<br />";
echo (abs($precio - $estimado) < 0.1)? "PAGA" : "NO PAGA"




?>
