<?php
include("config.php");

// Vamos a tener los datos a registrar/insertar
$nombre = "Pedro";
$apellido = "Gonzalez";
$ciudad = "Barcelona";
$email = "pedro@gmail.com";

// Vamos a tener el ID para actualizar el usuario
$id_usuario_actualizar = 9; 

// Vamos a realizar una consulta preparada para evitar Inyeccion SQL
$sql = $conn->prepare("UPDATE users SET nombre = ?, apellido = ?, ciudad = ?, email = ? WHERE id = ?");

// Vamos vincular los parametros
$sql->bind_param("ssssi", $nombre, $apellido, $ciudad, $email, $id_usuario_actualizar);

// Vamos a ejecutar la consulta
if($sql->execute()){
  echo "Actualizacion exitosa!";
}else{
  echo "Error al actualizar: " . $conn->error;
};

// Ceramos la conexion
$sql->close();
$conn->close();