<?php  
require_once 'EJ12.php';  
$dec = $_POST['decimal'];
$rom = $_POST['Romano'];
// Convertimos un decimal a Romano  
echo "El numero ".$dec." en romano es: ".EJ12::decimalRomano($dec)."<br>";  
// Convertimos un Romano a Decimal  
echo "El numero ".$rom." en decimal es: ".EJ12::romanoDecimal($rom); 
?>