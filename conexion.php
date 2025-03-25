<?php
function conectar() {
    $servername = "localhost";
    $username = "root";
    $password = "1234567";
    $dbname = "Practica_PWEB";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Error en la conexión: " . $conn->connect_error);
    }

    return $conn;//retorna la conexion
}

$conn = conectar();//conn se usara para abrir la conexion en donde se necesite

?>