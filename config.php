<?php

$ip = "18.222.163.51";
$user = "admin";
$pass = "Transporte#";
$dbname = "transporte_rural";

// Conexión a la base de datos
$conn = new mysqli($ip, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

error_reporting(E_ALL & ~E_WARNING);

?>