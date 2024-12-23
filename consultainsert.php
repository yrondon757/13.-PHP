<?php
include("config.php");

// Vamos a tener los datos a registrar/insertar
$nombre = "Jeison";
$apellido = "Hernandez";
$ciudad = "Madrid";
$email = "jeison@gmail.com";

// Vamos a realizar una consulta preparad para evitar Inyeccion SQL
$sql = $conn->prepare("INSERT INTO users (nombre,apellido,ciudad,email) VALUES (?,?,?,?)");

// Vamos vincular los parametros
$sql->bind_param("ssss", $nombre, $apellido, $ciudad, $email);

// Vamos a ejecutar la consulta
if($sql->execute()){
  echo "Registro exitoso!";
}else{
  echo "Error al registrar: " . $conn->error;
};

// Ceramos la conexion
$sql->close();
$conn->close();