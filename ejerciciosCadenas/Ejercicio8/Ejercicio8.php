<?php
    $cadena = $_POST['campo1'];		

    for($i=0;$i<strlen($cadena);$i++){
	
	if (ctype_lower($cadena[$i])) {
            echo strtoupper($cadena[$i]);
        } else {
            echo strtolower($cadena[$i]);
        } 

    } 
?>

