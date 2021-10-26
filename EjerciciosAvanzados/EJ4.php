<?php 
   echo "<h1>Conversion Euros-Pesetas</h1>"; 
   $cant = $_POST['campo'];
   $pesetas=$cant*166.386;
   echo $cant."€ son = ".$pesetas;
?>