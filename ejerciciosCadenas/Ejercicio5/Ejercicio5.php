<?php
    $cadena = $_POST['campo1'];
    foreach (explode(" ", $cadena) as $palabra){
	$letra = substr($palabra, 0,1);
	echo strtoupper($letra."  ");
    }	
    
?>

