<?php

// INiciar sesion
session_start();

// Destruir las variables de sesion
session_unset();

// Destruir la sesion
session_destroy();

// Redirigir a la pagina de inicio
header("Location: index.php");
exit();