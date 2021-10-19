<?php
    $cadena = $_POST['campo1'];	
    $subcadena = $_POST['campo2'];
    $pos = strpos($cadena, $subcadena);

if ($pos === false) {
    echo "La cadena '$subcadena' no fue encontrada en la cadena '$cadena'";
} else {
    echo "La cadena '$subcadena' fue encontrada en la cadena '$cadena'";
    echo " y existe en la posicion $pos";
}
?>