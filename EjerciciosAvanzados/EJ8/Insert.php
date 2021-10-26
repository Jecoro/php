<?php
$servername = "localhost";
$database = "directorio";
$username = "root";
$password = "";

$name = $_POST['nombre'];
$secodname = $_POST['apellidos'];
$direct = $_POST['direccion'];
$city = $_POST['poblacion'];
$cp = $_POST['codigopostal'];
$phone = $_POST['telefono'];
$mail = $_POST['email'];

//Connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully"."<br>";
 
$sql = "INSERT INTO clientes (nombre,apellidos,direccion,pablacion,codigopostal,telefono,email) 
        VALUES ('$name','$secodname','$direct','$city','$cp','$phone','$mail')"; 

if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>