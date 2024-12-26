<?php
include("config.php");

// Vamos a iniciar sesion una vez al inicio
session_start();
if(!empty($_SESSION["id"])){
  header("Location: dashboard.php");
  exit();
};

if($_SERVER["REQUEST_METHOD"] == "POST"){
  // Vamos a obtener los datos del formulario
  $correo = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
  $clave = $_POST["password"] ?? "";
  if(!$correo || empty($clave)){
    echo "Correo o clave vacios";
    exit();
  };

  // Vamos a realizar una consulta SQL preparada para prevenir inyeccion SQL
  $sql = $conn->prepare("SELECT id, clave FROM usuarios WHERE correo = ?");
  $sql->bind_param("s", $correo);
  $sql->execute();
  $sql->store_result();
  if($sql->num_rows === 1){
    $sql->bind_result($id, $hashedPassword);
    $sql->fetch();

    // Vamos a verificar si la contrasena es correcta
    if(password_verify($clave, $hashedPassword)){
      // INiciar sesion de forma segura
      session_regenerate_id(true); // Esto lo que hace es prevenir la fijacion de sesion
      $_SESSION["login"] = true;
      $_SESSION["id"] = $id;
      header("Location: dashboard.php");
      exit();
    }else{
      echo "Clave invalida";
    }
  }
  $sql->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="post">
    <section>
      <label for="email">Correo:</label>
      <input type="email" name="email" id="email">
    </section>
    <section>
      <label for="password">Contrasena:</label>
      <input type="password" name="password" id="password">
    </section>
    <section>
      <input type="submit" value="Iniciar sesion">
    </section>
  </form>
</body>
</html>