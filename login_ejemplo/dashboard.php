<?php
include("config.php");
session_start();
if(empty($_SESSION["id"])){
  header("Location: index.php");
  exit();
};

$id = $_SESSION["id"];

$sql = $conn->prepare("SELECT correo FROM usuarios WHERE id = ?");
$sql->bind_param("i", $id);
$sql->execute();
$sql->store_result();

// Verificar si el usuario existe en la base de datos
if($sql->num_rows === 1){
  $sql->bind_result($correo);
  $sql->fetch();
}else{
  // Si no se encuentra el usuario en la base de datos, vamos a cerrar la sesion
  session_unset();
  session_destroy();
  header("Location: index.php");
  exit();
}
$sql->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Bievenido, <?php echo htmlspecialchars($correo); ?></h1>
  <div>
    <a href="cerrarSesion.php">Cerrar sesion</a>
  </div>
</body>
</html>