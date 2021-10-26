<?php
$fecha=$_POST['fecha'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];




$fecha_nacimiento = new DateTime($fecha);
$hoy = new DateTime();
$edad = $hoy->diff($fecha_nacimiento);

    
echo $nombre." ".$apellidos." tiene: ".$edad->y." años y: ".$edad->days." dias";

    



?>
