<?php
include("config.php");

// Necessitamos el id del usuario a eliminar
$id = 9; 

// Vamos a realizar una consulta preparada para evitar Inyeccion SQL
$sql = $conn->prepare("DELETE FROM users WHERE id = ?");

// Vamos vincular los parametros
$sql->bind_param("i", $id);

// Vamos a ejecutar la consulta
if($sql->execute()){
  echo "Eliminacion exitosa!";
}else{
  echo "Error al eliminra: " . $conn->error;
};

// Ceramos la conexion
$sql->close();
$conn->close();