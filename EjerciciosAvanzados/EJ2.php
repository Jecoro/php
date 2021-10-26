<?php
echo "<h1>Pagina de Bienvenida</h1>";
$hora = date('G'); 
switch ($hora) {
   case (($hora >= 8) AND ($hora < 14)):
        $mensaje = "Buenos dias";
    echo $mensaje;
         break;
   case (($hora >= 14) AND ($hora < 21)):
         $mensaje = "Buenas tardes"; 
    echo $mensaje;
         break;
   case (($hora >=21) AND ($hora < 24)):
         $mensaje = "Buenas noches"; 
    echo $mensaje;
         break;
}
?>