<?php

$texto = "Texto desde php";
$numero = 12;
$numero1 = 13;
echo "El mensaje es :$texto <br>";
echo "El numero es :" . $numero;

// //Variable global
$valor = 34;
function mostrarr()
{
    echo "El valor de la variable " . $valor;
}
$mostrar();
echo "Valor de la variable " . $valor;

// //Variable local
function mostrar()
{
    $valor = 34;
    echo "El valor de la variable " . $valor;
}
$mostrar();
echo "Valor de la variable " . $valor;

// //Variable static
// //CON static VARIABLES SON REUTILIZADAS EN LAS SIGTES FUNCIONES

// function valor()
{
    static $x = 1;
    echo $x . "<br>";
    $x++;
}
valor();
valor();
valor();

// //Tipos de variables
// // LA FUNCION VAR_DUMP SE ENCARGA DE EVALUAR TODA LA INFORMACION DE UNA VARIABLE

// //type string
$cadena = "mensaje";
var_dump($cadena);
echo "<br>";

// //type integer
$number = 12;
var_dump($number);
echo "<br>";

// //type float

$decimal = 12.6;
var_dump($decimal);
echo "<br>";

// //type boolean

$bool = true;
var_dump($bool);
echo "<br>";

// //type array

$days = array("Monday", "Tuesday", "Wednesday");
var_dump($days);
echo "<br>";

//Funciones para trabajar con cadenas
//strlen() sirve para saber el numero de caracteres de un mensaje

$cadena = "message of text";
echo "Numero de caracteres: " . strlen($cadena);

//str_word_count() se encarga de contar el numero de palabras dentro de un texto

echo "Numero de palabras: " . str_word_count($cadena);
echo "<br>";

//strrev() se encarga de mostrar un texto en reversa

echo "mensaje en reversa: " . strrev($cadena);
echo "<br>";

//strpos() se encarga de buscar una palabra o frase dentro de una cadena

echo "Ubicacion del texto: " . strpos($cadena, "of");
echo "<br>";

//str_replace() sirve para reemplazar alguna parte de la cadena

$cadena = "message of text sent ";
echo str_replace("sent", "received", $cadena);

//FUCTIONS PARA NUMEROS 

//is_int() se encarga de verificar si una variables es numerica o no

$numero = 12;
echo var_dump(is_int($numero));

//is_float es para verificar si es numero decimal o entero
//is_double es basicamente los mismo

echo var_dump(is_float($numero));

//is_finite o is_infite su nombre ya lo dice todo

echo "Valor: " . var_dump(is_finite($numero));
echo "<br>";
echo "Valor: " . var_dump(is_infinite($numero));

is_numeric() 
$numero = 12;
echo  var_dump(is_numeric($numero));
echo "<br>";
$numero = "12";
echo  var_dump(is_numeric($numero));
echo "<br>";
$numero = "12" + 2;
echo  var_dump(is_numeric($numero));
echo "<br>";
$numero = "Text";
echo  var_dump(is_numeric($numero));
echo "<br>";

//Conversion de float y cadena a entero

$n = 123456;
$n = (int)$n;
echo var_dump(is_int($n));
echo $n;
echo "<br>";
$n = 1234.15;
$n = (int)$n;
echo var_dump(is_int($n));
echo $n;

//pi() para obtener el valor d π

echo pi();


//min() para obtener el numero menor y max() para obtener el numero mayor
echo "Numero mayor: " . min(12, 23, 3, 67, 98, 9);
echo "<br>";
echo "Numero mayor: " . max(12, 23, 3, 67, 98, 9);

//abs() esta funcion se encargar de retornarnos el valor positivo de cualquier numero positivo

$x = -3.5;
echo "Numero negativo: .$x
Numero positivo: " . abs($x);

//sqrt() se encarga de retornarnos el valor de la raiz cuadrada de un numero ingresado

$x = 64;
echo "La raiz cuadrada de: " . $x . " es " . sqrt($x);

//round() se encarga de redondear un numero decila a un numero entero, a partir de .5

echo round(1.2) . "<br>";
echo round(1.5) . "<br>";
echo round(3.4) . "<br>";
echo round(4.49) . "<br>";

//rand() se encarga depoder generar numeros aleatorios, partiendo de ciertas condiciones

echo rand(1, 8);

//Constante
//Una constante no puede ser modificada
define("x", 12);
echo x;