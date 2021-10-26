<?php
$numero = 10;

// Creamos la primera matriz de bits aleatorios
$inicial1 = [];
for ($i = 0; $i < $numero; $i++) {
    $inicial1[$i] = rand(0, 1);
}

// Mostramos los bits aleatorios de la primera matriz
print "  <pre style=\"font-size: 300%;\">\n";
print "   A   : ";
foreach ($inicial1 as $bit) {
    print "$bit ";
}
print "\n";
print "\n";

// Creamos la segunda matriz de bits aleatorios
$inicial2 = [];
for ($i = 0; $i < $numero; $i++) {
    $inicial2[$i] = rand(0, 1);
}

// Mostramos los bits aleatorios de la segunda matriz
print "   B   : ";
foreach ($inicial2 as $bit) {
    print "$bit ";
}
print "\n";
print "\n";

// Creamos la matriz con el resultado de la conjunción lógica
$resultado = [];
for ($i = 0; $i < $numero; $i++) {
    if ($inicial1[$i] == 1 && $inicial2[$i] == 1 ) {
        $resultado[$i] = 1;
    } else {
        $resultado[$i] = 0;
    }
}

/* Otra forma de calcular los valores complementarios
// Creamos la matriz con el resultado de la conjunción lógica
$resultado = [];
for ($i = 0; $i < $numero; $i++) {
    $resultado[$i] = (int)($inicial1[$i] && $inicial2[$i]);
}
*/

// Mostramos los valores calculados
print "A and B: ";
foreach ($resultado as $bit) {
    print "$bit ";
}
print "\n";
print "</pre>\n";
?>