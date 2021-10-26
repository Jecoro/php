<?php
    $fecha=$_POST['fecha'];
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellidos'];
    function calculaedad($fechanacimiento){
        list($ano,$mes,$dia) = explode("-",$fechanacimiento);
        $ano_diferencia  = date("Y") - $ano;
        $mes_diferencia = date("m") - $mes;
        $dia_diferencia   = date("d") - $dia;
        if ($dia_diferencia < 0 || $mes_diferencia < 0)
          $ano_diferencia--;
        return $ano_diferencia;
      }
    echo "La edad de ".$nombre." ".$apellido." es:<b> ".calculaedad ($fecha)." años. </b>";
     
?>
