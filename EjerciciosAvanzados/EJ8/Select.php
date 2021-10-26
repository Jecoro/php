<?php
$servername = "localhost";
$database = "directorio";
$username = "root";
$password = "";

$campo = $_POST['campo'];
$dato = $_POST['dato'];

$conexión = mysqli_connect($servername, $username, $password, $database);
// 1) Conexión
if ($conexión = mysqli_connect($servername, $username, $password, $database)) {

    echo "<p>MySQL le ha dado permiso a PHP para ejecutar consultas con ese usuario</p>";

    if ($campo == "telefono") {

        // 2) Preparar la orden SQL
        $consulta = "SELECT * FROM clientes 
    WHERE (telefono='$dato')";
    } else {
        $consulta = "SELECT * FROM clientes 
    WHERE (apellidos like '$dato%') ";
    }

    // 3) Ejecutar la orden y obtener datos
    $datos = mysqli_query($conexión, $consulta);

    // 4) Ir Imprimiendo las filas resultantes
    while ($fila = mysqli_fetch_array($datos)) {

        echo $fila["id_cliente"];
        echo "<br>";
        echo $fila["nombre"];
        echo "<br>";
        echo $fila["apellidos"];
        echo "<br>";
        echo $fila["direccion"];
        echo "<br>";
        echo $fila["pablacion"];
        echo "<br>";
        echo $fila["codigopostal"];
        echo "<br>";
        echo $fila["telefono"];
        echo "<br>";
        echo $fila["email"];
    }
} else {
    echo "<p> MySQL no conoce ese usuario y password</p>";
}
