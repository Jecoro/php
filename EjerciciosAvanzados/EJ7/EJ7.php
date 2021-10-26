<?php
 $n= rand(1, 20);
 $res=0;
 echo "Sumatorio de ".$n."<br>";
 for($i=1;$i<=$n;$i++){
    $res=$res+$i;

 }   
 echo $res;
?>