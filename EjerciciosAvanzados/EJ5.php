<?php 
   echo "<h1>Conversion De Monedas</h1>"; 
   $cant = $_POST['campo'];
   $divisa=$_POST['moneda'];
   $cambio; 
   
   if(empty($cant)){
    echo"No has introducido una cantidad";
}else{
   switch ($divisa) {
    case ($divisa == "dolares"):
        $cambio = 1.325;
        break;
    case ($divisa == "libras esterlinas"):
        $cambio = 0.927;
        break;
    case ($divisa == "yenes japoneses"):
        $cambio = 118.232;
        break;
    case ($divisa == "francos suizos"):
        $cambio = 1.515;
        break;  
}
   $nuevaCantidad=$cant*$cambio;
   echo $cant."€ son = ".$nuevaCantidad." ".$divisa;
   echo"</br>";
   echo"<a href=".$_SERVER["HTTP_REFERER"].">VOLVER</a>";
}   
?>