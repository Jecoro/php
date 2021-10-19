<?php
    $cadena = $_POST['campo1'];	
    $char = $_POST['campo2'];
    $char2 = $_POST['campo3'];	
    $len = strlen($char);	
    $patron1 = "/^[a-z]+$/";
     if (preg_match($patron1, $char)and $len==1){
	
	echo str_replace($char,$char2,$cadena);
    }  
?>

