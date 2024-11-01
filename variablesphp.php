<?php 

//definir variables

$nombre = "Cristopher";

$url ="www.youtube.com/lubutech";
echo "<h3>Direccion</h3>";
echo $url;
echo"<br/>";

// cambiando el valor de una variable 

$url = "www.lubutech.com";
echo $url;
echo "<br/>";

// variables tipo string y concatenar

$apellido = "Benavides";
$nombre = "Cristopher";

print  $nombre . " " . $apellido;
echo "<br/>";

// variables de tipo entero

$estatura = 123;

echo "Estaura: $estatura";
echo "<br/>";


// suma de valores

$num1=100;
$num2=2045;

$total= $num1 + $num2;

echo "La suma de los numeros es: $total";
echo "<br/>";

// suma con funcion

function sumar(){

$var1 = 500;
$var2 = 2000;
$total =  $var1 + $var2;

echo "la suma de los numeros es: $total";

}

sumar();

echo "<br/>";

function resta(){

    $var1 = 50510;
    $var2 = 20100;
    $total =  $var1 + $var2;
    
    echo "la resta de los numeros es:". $total;
    
    }
    
    resta();

    echo "<br/>";

function multiplicacion(){

    $var1 = 5741;
    $var2 = 2000;
    $total =  $var1 * $var2;

    echo " la multiplicacion de los numeros es". $total;

}    

multiplicacion();

echo "<br/>";

// variables locales 


$contacto = "Cristopher";

function mostrarcontacto(){

    $contacto = "Juan Pablo";
    echo $contacto;

}

echo mostrarcontacto();
echo"<br/>";
echo $contacto;


//variables globales 

global $mensaje;

$mensaje =  "Saludo";

function mostrarcontacto3(){

    global $mensaje;
    echo $mensaje;

}

echo"<br/>";
mostrarcontacto3();
echo"<br/>";
echo $mensaje;


// variables estaticas

function contador(){

    static $num=1;
    echo $num;
    $num = $num + 1;
}

echo"<br/>";
echo contador();
echo"<br/>";
echo contador();
echo"<br/>";
echo contador();
echo"<br/>";
echo contador();
echo"<br/>";
echo contador();
echo"<br/>";
echo contador();
echo"<br/>";echo"<br/>";

//variables superglobales

$saludo2;
$saludo2 = "Hola";

echo $GLOBALS['saludo2']  . "<br/>";

echo"<br/>";



?>