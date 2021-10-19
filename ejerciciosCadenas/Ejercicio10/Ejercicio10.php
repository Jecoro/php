<?php
    $cadena1 = $_POST['campo1'];
    $cadenainversa=strrev($cadena1);
    if (strcasecmp($cadena1,$cadenainversa) == 0) {
        echo $cadena1." is equal to ".$cadenainversa;
    } else {
	echo "No son iguales";
    } 
   //Funciona para PALABRAS palindromas como pone el enunciado
?>

