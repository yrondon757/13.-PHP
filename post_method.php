<?php
// Vamos a obtener los datos del formulario utilizando el metodo get
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nombre = $_POST["nombre"] ?? "";
    $edad = $_POST["edad"] ?? "";
    $contrasena = $_POST["contrasena"] ?? "";
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hola <?php echo $nombre ?></h1>
    <p>Tu edad es: <?php echo $edad ?></p>
    <p>Tu contrasena es: <?php echo $contrasena ?></p>
</body>
</html>