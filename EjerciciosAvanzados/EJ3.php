<?php
function  calcula_extension()
{
    $path = $_POST['campo'];
    $extension = pathinfo($path, PATHINFO_EXTENSION);
    return $extension;
}
$dato=calcula_extension();
function tipodeFichero($extension)
{
    $tipo = strtoupper($extension);
    switch ($tipo) {
        case ($tipo = "PDF"):
            $mensaje = "Documento Adobe PDF";
            echo $mensaje;
            break;
        case ($tipo = "TXT"):
            $mensaje = "Documento de texto";
            echo $mensaje;
            break;
        case ($tipo = "HTML"):
            $mensaje = "Documento HTML";
            echo $mensaje;
            break;
        case ($tipo = "PPT"):
            $mensaje = "Presentacion Microsoft Powerpoint";
            echo $mensaje;
            break;
        default: 
            $mensaje = "Archivo".$tipo;    
    }
}

tipodeFichero($dato);