<?php
// Vamos a incluir la conexion a la base de datos
include("config.php");

$sql = "SELECT * FROM users";
// Vamos a verificar si la consulta se ejecuta correctamente
if($result = $conn->query($sql)){
  if($result->num_rows > 0){
    // Nosotros podemos iterar sobre los resultados
    while($row = $result->fetch_assoc()){
      // vamos a sanitizar la salida de lo datos.
      $nombre = htmlspecialchars($row["nombre"]);
      $apellido = htmlspecialchars($row["apellido"]);

      echo "Nombre: $nombre -  Apellido: $apellido <br>";
    };
  }else{
    echo "0 resultados...";
  };
}else{
  echo "Error en la consulta: " . $conn->error;
};

// Cerramos la conexion
$conn->close();