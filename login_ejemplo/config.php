<?php
// Configuracion de base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tiendaonline";

$conn = new mysqli($servername, $username, $password, $dbname); 

if($conn->connect_error){
  echo "Error de conexion: " . $conn->connect_error;
};