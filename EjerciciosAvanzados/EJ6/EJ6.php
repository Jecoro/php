<?php
    echo "<h1>Tabla de multiplicar</h1>";
    $num = $_POST['campo'];
    for($i=0;$i<11;$i++){
        $res=$num*$i;
        echo $num."x".$i."= ".$res."<br>";
    }
?>