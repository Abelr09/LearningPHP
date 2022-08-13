<?php

//El ciclo empieza desde la posicion 0
$x = 1;
while ($x < 6) {
    echo "El valor de la variable es: $x <br>";
    $x++;
}

//DO WHILE es casi lo mismo pero en este caso primero se comprueba si la condicion es verdadera y luego se ejecuta eol codigo

$x = 1;
do {
    echo "El valor de la variable es: $x <br>";
    $x++;
} while ($x <= 6);

//CICLO FOR

for ($i = 0; $i <= 10; $i += 2) {
    echo "el numero es: $i <br>";
}