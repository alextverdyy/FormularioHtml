<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "prueba";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$nombre = $_REQUEST["nombre"];

$apellido1 = $_REQUEST["apellido1"];
$apellido2 = $_REQUEST["apellido2"];
$usuario = $_REQUEST["user"];
$pass = $_REQUEST["contrasena"];
$mail = $_REQUEST["mail"];
$domicilo = $_REQUEST["direccion"];
$poblacion = $_REQUEST["poblacion"];
$provincia = $_REQUEST["provincia"];
$nif = $_REQUEST["nif"];
$telefono = $_REQUEST["telefono"];


$sql = "INSERT INTO usuarios (`Usuario_nombre`, `Usuario_apellido1`, `Usuario_apellido2`, `Usuario_nick`, `Usuario_clave`, `Usuario_email`, `Usuario_domicilio`, `Usuario_poblacion`, `Usuario_provincia`, `Usuario_nif`, `Usuario_numero_telefono`)
        VALUES ('$nombre','$apellido1','$apellido2','$usuario','$pass',' $mail',' $domicilo','$poblacion',' $provincia','$nif','$telefono')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    echo $nombre;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>