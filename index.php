<?php
// ------- COMENTARIOS EN PHP -------
// Comentario de una sola línea
/*
    Comentario de 
    varias líneas
    de codigo
*/

// ------- VARIABLES EN PHP -------
$variable1 = 10;
$variable2 = "Hola desde PHP :)";

// ----------- TIPOS DE DATOS ------------
// Numero entero (int) : Representa un valor nnumerico sin decimales.
$edad = 20;

// Numero decimal (float) : Representa un valor numerico con decimales.
$pi = 3.1416;

// Cadena de texto (string) : Representa una secuencia de caracteres.
$texto = "Hola, PHP es lo mejod :D";

// Booleano (bool) : Representa un valor verdadero o falso.
$mayorDeEdad = true; // true / false

// Arreglo (array) : Representa una coleccion de elementos.
$frutas = ["Manzana", "Naranja", "Pera"];
$frutas2 = array("Manzana", "Naranja", "Pera");

// Null : Representa un valor nulo.
$variableNull = null;

// ------------ ECHO Y CONCATENACION ------------
// ECHO : Es una funcion que utiliza PHP para imprimir o mostrar contenidos en pantalla (en la salida).
// Vamos a utilizar ECHO con comillas simples.
$nombre = "Jose";
echo 'Hola, soy $nombre <br>';

// Con comillas dobles
echo "Hola, soy $nombre <br>";

// Usando ECHO con concatenacion
echo '<h1>Hola</h1> ' . 'buenas noches ' . $nombre. '<br>';

// ---------- print_r : Es una funcion que muestra informacion sobre variables.
print_r(value: $frutas);
echo "<br>";

// --- var_dump : Es una funcion que muestra informacion estructurada sobre variables.
var_dump($frutas);
echo "<br>";

// -------------- OPERADORES COMPARATIVOS EN PHP --------------

// --- IGUAL (==) : Compara si dos valores son iguales.
// $a == $b

// --- IDENTICO (===) : Compara si dos valores son iguales y del mismo tipo.
// $a === $b

// --- DIFERENTE (!=) : Compara si dos valores son diferentes.
// $a != $b; $a <> $b;

// --- NO IDENTICO (!==) : Compara si dos valores son diferentes y del mismo tipo.
// $a !== $b;

// --- MAYOR QUE (>) : Compara si un valor es mayor que otro.
// $a > $b;

// --- MENOR QUE (<) : Compara si un valor es menor que otro.
// $a < $b;

// --- MAYOR O IGUAL QUE (>=) : Compara si un valor es mayor o igual que otro.
// $a >= $b;

// --- MENOR O IGUAL QUE (<=) : Compara si un valor es menor o igual que otro.    
// $a <= $b;

// ------------ OPERADORES ARITMETICOS EN PHP -------------
// --- SUMA (+) : Suma dos valores.
$a = 10;
$b = 5;
$resultado = $a + $b; // El resultado seria 15
echo "<br> El resultado es : $resultado";

// --- RESTA (-) : Resta dos valores.
echo '<br>' . $a - $b; // El resultado seria 5

// --- MULTIPLICACION (*) : Multiplica dos valores.
echo '<br>' . $a * $b; // El resultado seria 50

// --- DIVISION (/) : Divide dos valores.
echo '<br>' . $a / $b; // El resultado seria 2

// --- MODULO (%) : Devuelve el resto de la division de dos valores.
echo '<br>' . $a % $b; // El resultado seria 0

// --- POTENCIA (**)
echo '<br>' . $a ** $b; // El resultado seria 100000

// --- Podemos realizar combinaciones
echo '<br>'. ($a + $b) * $a / $b;

// ------------ OPERADORES DE ASIGNACION EN PHP -------------
// = : Asignacion simple
$a = 20;

// += : Asignacion con suma
$a += 10;

// -= : Asignacion con resta
$a -= 5;

// *= : Asignacion con multiplicacion
$a *= 2;

// /= : Asignacion con division
$a /= 3;

// %= : Asignacion con modulo
$a %= 4;

// **= : Asignacion con potencia
$a **= 2;

// Asignacion con concatenacion
$texto = "Hola ";
$texto .= "Como estas?";
echo "<br> $texto";

// ------------ OPERADORES LOGICOS EN PHP -------------
// -- AND (&& o and) : Devuelve verdadero si ambos operandos son verdaderos.
$resultado = true && true; // El resultado seria verdadero
var_dump($resultado);

// -- OR (|| o or) : Devuelve verdadero si alguno de los operandos es verdadero.
$resultado = true || false; // El resultado seria verdadero
var_dump($resultado);

// -- NOT (!) : Devuelve el contrario de un valor.
var_dump(!true);

// XOR (o xor) : Devuelve true si una y sola UNA de las expresiones es verdadero.
var_dump(true xor false xor false xor false);

// ------------ CONDICIONALES EN PHP -------------
// IF - ELSE
$edad = 17;

if($edad >= 18) {
    echo "<br> Es mayor de edad";
} else {
    echo "<br> Es menor de edad";
};

// ELSEIF
if($edad >= 18) {
    echo "IF";
}elseif($edad >=15){
    echo "ELSEIF";
}else{
    echo "ELSE";
};

// --- SWITCH
$dia = "Viernes";
switch($dia){
    case "Lunes":
        echo "Es lunes";
        break;
    case "Viernes":
        echo "Es viernes";
        break;
    default:
        echo "Hoy no es lunes ni viernes";
        break;
};

// ---------- OPERADOR TERNARIO -----------
$edad = 19;
echo "<br> ";
echo $edad >=19 ? "Es mayor de edad" : "Es menor de edad";

/* --------- EJERCICIOS SECCION 1 ------------
1. Calcular e imprimir el area de un rectangulo.
2. Verificar si un numero es par o impar.
3. Comprobar si un estudiante aprobo o reprobo un examen.
4. Calcular e imprimir la circunferencia de un circulo.
5. Determinar si un year es bisiesto o no.
6. Determinar la estacion del year segun un mes (Por numero de mes)
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seccion 1</title>
</head>
<body>
    <h1><?php echo $variable2 ?></h1>
</body>
</html>