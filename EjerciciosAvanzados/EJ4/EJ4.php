<?php 
   echo "<h1>Conversion Euros-Pesetas</h1>"; 
   $cant = $_POST['campo'];
   if(empty($cant)){
        echo"No has introducido una cantidad";
   }else{
    if(is_numeric($cant)){    
       $pesetas=$cant*166.386;
      echo $cant."€ son = ".$pesetas." pesetas";
   }else{
      echo"No has introducido un numero";
   }  

   }
   echo"<a href=".$_SERVER["HTTP_REFERER"].">VOLVER</a>";
?>