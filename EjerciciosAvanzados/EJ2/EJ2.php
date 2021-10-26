<?php
echo "<h1>Pagina de Bienvenida</h1>";
$fecha = date('G'); 
if($fecha >=8 && $fecha <=13){
    echo"Buenos dias";
}else if($fecha >=14 && $fecha <=20){
    echo "Buenas tardes";
}else{
    echo"Buenas noches";
}
?>