<?php
$nombre = "Luis Fernando ";
$salario = 300000;

//El = es  un operador de asignación, no de comparación. los operadores se usan para realizar operaciones sobre las variables
//El == es un operador de comparación, se usa para comparar el valor de dos

$apellido = "Benavides";
$suma = 30 + 2;

//diferentes tipos de operadores
//aritmicos

$sueldo = 200000;
$subsidioTransporte = 30000;
$salud = 800000;
$pension = 344000;
$ingresos  = $sueldo + $subsidioTransporte;
$egresos =  $salud + $pension;

$total  = $ingresos - $egresos;
echo  "El total es: $total";

$subsidioTransporte = 30000;
$salud = 800000;
$pension = 344000;
$ingresos  = $sueldo + $subsidioTransporte;
$egresos =  $salud + $pension;
echo "<br />";


//calcular area de un rectangulo
$base = 10;
$altura = 20;
$area  = $base * $altura;
echo  "El area del rectangulo es: $area";

echo "<br />";
//division
$num1=50;
$num2=10;
$division =  $num1 / $num2;
echo  "El resultado de la division es: $division";

echo "<br />";

//porcentaje

$sumaNotas = 43;
$cantidadMaterias = 5;
$promedio = $sumaNotas / $cantidadMaterias;
echo  "El promedio es: $promedio %";
echo "<br />";


//modulo
$a = 51 % 2;
echo   "El modulo es: $a";
echo "<br />";

//exponenciacion

$b = 2;
$c = 4;
$exponenciacion = $c **  $b;
echo  "El resultado de la exponenciacion es: $exponenciacion";
echo "<br />";

//operadores condicionales

$puedeingresar = (true) ?  "si" : "no";
echo   "Puedes entrar: $puedeingresar";
echo "<br />";


//operadores logicos and or %% ||
$permiso  = true;
$autenticacion =false;
echo ($permiso and $autenticacion) ? "Bienvenido administrador" : "Bienvenido invitado";
echo "<br />";

$total = 30;
$pasaMateria = 50;
$Validarpasa = ($total > $pasaMateria) ? true : false;
echo  $Validarpasa ? "Pasa la materia" : "No pasa la materia";
echo "<br />";

//Operador +=

$contador = 1;
//contador = contador +1
$contador += $contador;
echo $contador;
echo "<br />";


//operador -=

$contador = 1;
//contador = contador -1
$contador -= $contador;
echo $contador;
echo "<br />";

//operador*=

$contador = 1;
//contador = contador -1
$contador *= $contador;
echo $contador;
echo "<br />";

//operador /=

$contador = 52;
//contador = contador -1
$contador /= 2;
echo $contador;
echo "<br />";

//operador%=

$contador = 61;
//contador = contador -1
$contador %= 2;
echo $contador;
echo "<br />";

//.= sirve para autoasignar
$nombrecompleto = "Cristopher Benavides";
$nombrecompleto .= " Lopez";
echo $nombrecompleto;
echo "<br />";

//operadores de incremento
$conta = 21;
$conta += 1;
echo $conta;
echo "<br />";

//Post incremento

echo $conta++;
echo "<br />";
echo $conta;
echo "<br />";
//Pre incremento

echo ++$conta;
echo "<br />";
echo  $conta;

//



?>