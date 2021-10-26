<?php
$numero = 10;

// Creamos la matriz de bits aleatorios
$inicial = [];
for ($i = 0; $i < $numero; $i++) {
    $inicial[$i] = rand(0, 1);
}

// Mostramos los bits aleatorios de la matriz
print "  <pre style=\"font-size: 300%\">\n";
print " A: ";
foreach ($inicial as $bit) {
    print "$bit ";
}
print "\n";
print "\n";

// Creamos la matriz con la detección de los cambios

$resultado = [];
for ($i = 0; $i < $numero - 1; $i++) {
    $resultado[$i] = (int) ($inicial[$i] != $inicial[$i + 1]);
}

// Mostramos los valores calculados
print "&Delta;A:  ";
foreach ($resultado as $bit) {
    print "$bit ";
}
print "\n";
print "</pre>\n";
?>