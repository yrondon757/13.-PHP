<?php
// ----------- SECCION 3 PHP ------------

// ------- HASH
/*
Hash se refiere comunmente a la funcion que es una tecnica pra convertir datos de cualquier longitud
mediante un algoritmo especifico. El resultdo de este proceso se llama HASH
*/

// Dato de ejemplo
$data = "Hola, esto es un ejemplo de hash en PHP";

// Generar un hash usando un algoritmo SHA256
$hash = hash('sha256', $data);

// Vamos a imprimir el hash
echo "Datos: $data <br>";
echo "Hash256: $hash <br>";

// -------------- EJEMPLO CON CONTRASENA

// Contrasena original
$contrasenaOriginal = "seguro123";

// Vamos a generar un hash para esa contrasena
$hashContrasena = password_hash($contrasenaOriginal, PASSWORD_DEFAULT);

echo "Contrasena original: $contrasenaOriginal <br>";
echo "Hash de la contrasena: $hashContrasena <br>";

// Vamos a simular un inicio de sesion con una contrasena ingresada por el usuario
$contrasenaIngresada = "seguro123";

// Vamos a verificar la contrasena usando password_verify
if(password_verify($contrasenaIngresada, $hashContrasena)){
  echo "Contrasena correcta";
}else{
  echo "Contrasena incorrecta";
};

// --------------- ISSET -------------
/*
Es una funcion que se utiliza para verificar si una variable esta definida o es nula (NULL)
*/

// Definir variables
$miVariable = "Hola, soy una variable";
$miVariable2 = "Hola, soy la variable2";
echo "<br>";
// Verificar si una o mas variables estan definidas
if(isset($miVariable, $miVariable2, $hola)){
  echo "La variable existe";
}else{
  echo "La variable no existe";
};

// -------------- COOKIES ----------
/*
Las cookies son pequenos fragmentos de datos que se almacenan en el lado del cliente (Navegador) y se
utilizan para recordar informacion especifica del usuario entre solicitudes HTTP. Puedes usar cookies para
mantener el estado de la sesion, recordar las preferencias de usuario o almacenar informacion personal (temporal)
*/

// ---------- CREAR UNA COOKIE
// Para establecer una cookie con el nombre usuario y el valor "jose" debemos hacer lo siguiente:
setcookie("usuario", "Jose", time() + 60, "/");

// Vamos a recuperar el valor de la COOKIE "usuario" y el valor "Jose"
if(isset($_COOKIE["usuario"])){
  $nombre = $_COOKIE["usuario"];
  echo "<br> El usuario es: $nombre";
}else{
  echo "<br> No se ha encontrado la cookie";
};

// Editar una cookie
setcookie("usuario", "Yenetson", time() + 30, "/");

// Eliminar una cookie
setcookie("usuario", "", time() - 3600, "/");

// ------------- VARIABLES SUPER GLOBALES --------------
/*
Las variables super globales en PHP son variables predefinidas que estan siempre accesibles, independientemente
de donde te encuentres. Estas variables contienen infromacion valiosa, como datos de formulario, cookies, sesiones
y mas......
*/

// ----- $_GET : Contiene datos enviados a traves del METODO GET generalemente desde un formulario o con parametros en la URL
// URL : ejemplo.php?nombre=Jose&edad=30
// Recuperar datos de la variable super global $_GET
$nombre = $_GET["nombre"] ?? "";
$edad = $_GET["edad"] ?? "";

echo "<br> Nombre: $nombre";
echo "<br> Edad: $edad";

// ----- $_POST : Contiene datos enviados a traves del METODO POST, comunmente utilizados en formularios HTML.
// Formulario = <form action="ejemplo.php" method="post"></form>
$usuario = $_POST["usuario"] ?? "";

// ----- $_COOKIE : Contiene dtos enviados a traves de cookies.
$recuperar = $_COOKIE["usuario"] ?? "";

// ----- $_SESSION : Contiene datos enviados a traves de sesiones. Que podemos almacenar informacion a lo largo
// de las paginas y sesiones del USUARIO.

// INiciar sesion
session_start();

// Vamos a establecer una variable de sesion
$_SESSION["usuario"] = "pedrito23";
$_SESSION["loquequiero"] = "ganar";

// Recuperar y mostrar l vrible de session en otra pagina si lo deseo
echo "<br> Hola " . $_SESSION["usuario"] . "<br>";
echo "<br>" . $_SESSION["loquequiero"] . "<br>";

// Finalizar la sesion
$_SESSION = [];
session_unset();
session_destroy();
//header("Location: index.php");

// ------ $_SERVER : Contiene informacion sobre el servidor y la ejecucion del script

// Obtener nombre del servidor
echo $_SERVER["SERVER_NAME"] . "<br>";

// Obtener direccion IP del servidor
echo $_SERVER["SERVER_ADDR"] . "<br>";

// Obtener direccion ip del cliente
echo $_SERVER["REMOTE_ADDR"] . "<br>";

// Obtener el metodo HTTP
echo $_SERVER["REQUEST_METHOD"] . "<br>";

// Obtener la URL
echo $_SERVER["REQUEST_URI"] . "<br>";

// OBtener el protocolo
echo $_SERVER["SERVER_PROTOCOL"] . "<br>";

// -------- $_ENV : Contiene variables de entorno en el servidor
$_ENV["secreto"] = "12345";
$_ENV["clave"] = "12345543543";

echo $_ENV["secreto"] . "<br>";

// ---------------- REGEX en PHP

// EXpresiones regulares

// --- preg_match : SE utiliza para realizar una busqueda de un patron de una cadena, devuelve 1 si hay coincidencia
// y 0 si no hay coincidencia

$cadena = "Hola, mi numero de telefono es 123-456-3023";
if(preg_match("/\b\d{3}-\d{3}-\d{4}\b/", $cadena)){
  echo "<br> Encontrado";
}else{
  echo "<br> No encontrado";
};

// --- preg_replace : Se utiliza para reemplazar un patron de una cadena.
$cadena = "Hola, soy Yenetson y tengo 33 annos";
$nuevaCadena = preg_replace("/\d{2}/", "30", $cadena);
echo "<br>" . $nuevaCadena . "<br>";

// --- preg_split = Se utiliza pra dividir una cadena de un arreglo de subcadenas.

$cadena = "manzana,pera,naranja";
$frutas = preg_split("/,/", $cadena);
print_r($frutas);
