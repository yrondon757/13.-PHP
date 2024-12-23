<?php
// Vamos a obtener los datos del formulario utilizando el metodo get
if($_SERVER["REQUEST_METHOD"] == "GET"){
    $nombre = $_GET["nombre"] ?? "";
    $edad = $_GET["edad"] ?? "";
    $contrasena = $_GET["contrasena"] ?? "";
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