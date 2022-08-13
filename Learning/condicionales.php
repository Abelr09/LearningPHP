<?php
// //if
$edad = 18;
if ($edad >= 18) {
    echo "Tu edad es igual o mayor a: " . $edad;
}

// //if else
$edad = 17;
if ($edad >= 18) {
    echo "Eres mayor de edad ";
} else {
    echo "Eres menor de $edad años ";
}

//elseif
$x = "x";
if ($x == "a") {
    echo "La seleccion es a ";
} else if ($x == "b") {
    echo "La seleccion es b ";
} elseif ($x == "c") {
    echo "La seleccion es c ";
} else {
    echo "Ninguna seleccion es valida ";
}

//switch()

$x = "f";
switch ($x) {
    case "a":
        echo "El valor almacenado es: " . $x;
        break;
    case "b":
        echo "El valor almacenado es: " . $x;
        break;
    case "c":
        echo "El valor almacenado es: " . $x;
        break;
    case "d":
        echo "El valor almacenado es: " . $x;
        break;
    default:
        echo "El valor  '$x' no se encuentra en los case";
        break;
}