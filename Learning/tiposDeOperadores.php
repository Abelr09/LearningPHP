<?php
//SUMA

$x = 12;
$y = 10;
echo $x + $y;
echo "<br>";
//RESTA

$x = 12;
$y = 10;
echo $x - $y;
echo "<br>";
//MULTIPLICACION

$x = 12;
$y = 10;
echo $x * $y;
echo "<br>";
//DIVISION

$x = 12;
$y = 10;
echo $x / $y;
echo "<br>";

//EXPONENCIAL

$x = 2;
$y = 3;
echo $x ** $y;
echo "<br>";

//OPERADORES DE ASIGNACION

$x = 12;
echo $x;

//OPERADORES DE ADICION

$x = 2;
$x += 2;
echo $x;

//OPERADORES DE sustraccion

$x = 2;
$x -= 2;
echo $x;

//OPERADORES DE MULTIPLICACION

$x = 2;
$x *= 2;
echo $x;

//OPERADORES DE division

$x = 2;
$x /= 2;
echo $x;

//OPERADOR DE ASIGNACION DE MODULO
$x = 3;
$x %= 2;
echo $x;

//OPERADORES DE COMPARACION IGUAL

$x = 20;
$y = 20;
var_dump($x == $y);

//OPERADORES DE COMPARACION IDENTICO
//COMPARA EL TIPO DE DATO CON EL VALOR INGRESADO

$x = 20;
$y = "20";
var_dump($x === $y);

//OPERADOR DE COMPARACION NO ES IGUAL

$x = 20;
$y = 200;
var_dump($x != $y);

//OPERADOR DE COMPARACION DIFERENTE

$x = 50;
$y = 20;
var_dump($x <> $y);

//OPERADOR DE COMPARACION DIFERENTE
//esto identifica 2 tipos de datos, string e int
$x = "20";
$y = 20;
var_dump($x !== $y);

//OPERADOR DE COMPARACION MAYOR QUE

$x = 50;
$y = 20;
var_dump($x > $y);

//OPERADOR DE COMPARACION MENOR QUE

$x = 50;
$y = 20;
var_dump($x < $y);

//OPERADOR DE COMPARACION MAYOR O IGUAL QUE

$x = 50;
$y = 20;
var_dump($x >= $y);

//OPERADOR DE COMPARACION MENOR O IGUAL QUE

$x = 50;
$y = 20;
var_dump($x <= $y);

//OPERADORES DE PRE INCREMENTO

$x = 10;
echo ++$x;
echo "<br>";
echo $x;

//OPERADORES DE POST INCREMENTO

$x = 10;
echo $x++;
echo "<br>";
echo $x;

//OPERADORES DE PRE DECREMENTO

$x = 10;
echo --$x;
echo "<br>";
echo $x;

//OPERADORES DE PRE DECREMENTO

$x = 10;
echo $x--;
echo "<br>";
echo $x;

//OPERADORES DE CADENAS TIPO CONCATENACION (.)

$a = "h";
$b = "o";
$c = "l";
$d = "a";
echo $a . $b . $c . $d;

//OPERADORES DE CADENAS TIPO asignacion de concatenacion (.=)

$a = "h";
$b = "o";
$c = "l";
$d = "a";
echo $a .= $b;
echo "<br>";
echo $a .= $c;
echo "<br>";
echo $a .= $d;
echo "<br>";
echo $a;