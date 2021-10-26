<?php
echo "<h1>Pagina de Bienvenida</h1>";
$hora = date('G'); 
switch ($hora) {
   case (($hora >= 6) AND ($hora < 12)):
        $mensaje = "Buenos dias";
    echo $mensaje;
         break;
   case (($hora >= 12) AND ($hora < 18)):
         $mensaje = "Buenas tardes"; 
    echo $mensaje;
         break;
   case (($hora >= 0) AND ($hora < 6)):
         $mensaje = "Buenas noches"; 
    echo $mensaje;
         break;
}
?>