<?php
// -------- SECCION 2 PHP--------

// -------- FUNCIONES SIN PARAMETROS --------
function saludar(){
    echo "Hola mundo desde una funcion sin parametros";
};

// Llamar a la funcion.
saludar();

// -------- FUNCIONES CON PARAMETROS --------
function suma ($num1, $num2){
    return $num1 + $num2;
};

echo '<br>' . suma(10,30);

// -------- FUNCIONES ANONIMAS (closures) --------
$resta = function($a, $b){
    return $a - $b;
};

echo '<br>' . $resta(10,30);

// -------- FUNCIONES FLECHAS (Arrow functions) --------
$funcionFlecha = fn($a, $b) => $a * $b;

echo '<br>' . $funcionFlecha(10,30);

// -------- RECURSIVIDAD --------
function factorial($num){
    if($num == 1){
        return 1;
    }else{
        return $num * factorial($num - 1);
    };
};

echo '<br>' . factorial(5);

// -------- BUCLES --------

// ---- WHILE
$contador = 1;
while($contador <= 5){
    echo '<br> Repeticion: ' . $contador;
    $contador++; // $contador = $contador + 1;
};

// ---- DO WHILE
$contador = 1;
do{
    echo '<br> Repeticion DO WHILE' . $contador;
    $contador++; // $contador = $contador + 1;
} while($contador <= 10); // while(false);

// ---- FOR
for($i = 1; $i <= 10; $i++){
    echo '<br> Repeticion FOR: ' . $i;
};

// ---- FOREACH
$colores = ["Rojo", "Azul", "Verde", "Amarillo", "Naranja"];

foreach($colores as $color){
    echo '<br> Color: ' . $color;
};

// ---- FOREACH con array asociativo
// Clave y valor
$persona = array("nombre"=>"Yenetson", "edad"=>33);

foreach($persona as $clave => $valor){
    echo "<br> $clave : $valor";
};

// -------- METODOS DE STRINGS Y ARRAYS --------

// ---- METODO DE STRINGS

// - Longitud de un string
$texto = "Bienvenido a PHP";
$longitud = strlen($texto);
echo "<br> La longitud del texto es : $longitud";

// - Convertir de mayusculas o minusculas
$mayusculas = strtoupper($texto);
$minusculas = strtolower($texto);
echo "<br> El texto en minusculas: $mayusculas";
echo "<br> El texto en mayusculas: $minusculas";

// - Obtener un substring
$subcadena = substr($texto, 13, 3);
echo "<br> Subcadena: $subcadena";

// - Reemplazar un string
$nuevoTexto = str_replace("PHP", "python", subject: $texto);
echo "<br> Nuevo texto : $nuevoTexto";

// - Convertir un string a un array
$texto = "Hola, como estas?, espero que bien...";
$convertir = explode(",", $texto);
echo "<br>";
print_r($convertir);

// --- METODOS DE ARRAYS

// - Obtener la longitud de un array
$array = ["Mouse", "Teclado", "Monitor"];
$longitud = count($array);
echo "<br> La longitud del array es: $longitud <br>";

// - Anadir un elemento al final del array
array_push($array, "Impresora");
print_r($array);

// - Eliminar un elemento del final del array
$ultimoElemento = array_pop($array);
echo "<br> El ultimo elemento es: $ultimoElemento";
print_r($array);

// - Ordenar un array

// Ascendente
sort($array);
echo "<br>";
print_r($array);

// Descendente
rsort($array);
echo "<br>";
print_r($array);

// - Buscar en un array
$position = array_search("Mouse", $array);
echo "<br> La posicion del elemento es : $position <br>";

// ----------- Asoc.ARRAY, Clases y objetos

// ---- Array asociativos : Permiten asociar claves con valores y son muy utiles
// para representar datos estructurados.
$persona = array(
    "nombre"=>"Jose",
    "apellido"=>"Perez",
    "edad"=>18
);

echo "<br> Nombre: " . $persona["nombre"] . "<br>";
echo "<br> Apellido: " . $persona["apellido"] . "<br>";
echo "<br> Edad: " . $persona["edad"] . "<br>";

// ---- Clases y objetos
// En PHP los objetos son instancias de clases.
// Public = Acceso a todos los metodos y propiedades.
// Private = Acceso exclusivo a los metodos y propiedades.

class Persona{
    public $nombre;
    public $apellido;
    public $edad;

    // Vamos a crear una funcion constructora
    public function __construct($nombre, $apellido, $edad){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
    }

    // Puedo crear un metodo
    public function saludar(){
        return "Hola, mi nombre es $this->nombre y tengo $this->edad";
    }

    // Metodo GET para obtener informacion
    public function getNombre(){
        return $this->nombre;
    }

    // Metodo SET para establecer informacion
    public function setNombre($nombre){
        $this->nombre =$nombre;
    }
};

$persona1 = new Persona("Jose","Perez",  18);

var_dump($persona1);
echo "<br> Nombre: $persona1->nombre"; // '<br> Nombre: ' . $persona1->getNombre();
$persona1->setNombre("Pedro");
echo '<br> Nombre: ' . $persona1->getNombre();
echo '<br> ' . $persona1->saludar();

// ------------ TRY - CATCH - FINALLY
try{
    echo "<br> Esto se ejecuta";
}catch(exception $error){
    echo " Se presento un error: " . $error->getMessage();
}finally{
    echo "<br> Esto se ejecuta siempre";
};

// -------------- CONEXION A BASE DE DATOS
// Configuracion
/*
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "apiflask2";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    echo "Error de conexion: " . $conn->connect_error;
}else{
    echo "<br> Conexion exitosa";
};

// Para cerrar la conexion utilizamos
$conn->close();
*/

// --------------- MODULARIZACION ----------------
// include()
// Recomendable incluir al inicio del archivo
include("funciones.php");

echo "<br>" . sumar(10,30);



?>