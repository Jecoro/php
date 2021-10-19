<?php
    $cadena = $_POST['campo1'];	
    $char = $_POST['campo2'];
    $len = strlen($char);	

     if ($len==1){
    	$n = substr_count($cadena,$char);
	echo "Se repite: ".$n." veces";
	
    }  
?>

