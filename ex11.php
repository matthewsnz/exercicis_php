<?php 

// Funciones con cadenas de texto (strings)

$cadena = "Hola";

$cadena[0] = "C";

echo "Ahora cadena es: " . $cadena . "<br>"; // Saldra Cola (H por C)

// Funciones preestablecidas de PHP

// Strlen --> medir la longitud del texto
$cadena = "Aquesta cadena té moltes lletres";
$num_caracters = strlen($cadena);

echo "El total de caràcters es: " . $num_caracters . "<br>";

// strpos -- retorna la casella on troba la subcadena dins de la cadena pasada
// Sempre retorna la primera ocurrencia

$email = "hola@jviladoms.cat";
echo "Posició @: " .strpos($email, "@") . "<br>";

// strcmp --> String compare, compara dos cadenas 
// si retorna 0 es igual 
// strcmp($cad1, $cad2);
// si retorna <0 la primera cadena es mas pequeña
// si retorna >0 la primera cadena es mas grande

$cad1 = "Matthew";
$cad2 = "Perro";
echo "Utilizamos strcmp: " . strcmp($cad1, $cad2). "<br>";

// substr: retorna una subcadena de caracters d'una cadena a partir d'una 
// posicio especifica fins al final o del tamany especificat. La cadena 
// original no pateix cap modificació

$cadena = "PHP és un llenguatge fàcil";
echo "El substr de 0 a 3 es: " .substr($cadena, 0, 3) . "<br>"; // Saldra PHP
echo "El substr de 21" .substr($cadena,  21) . "<br>";

// trim: eliminar los espacios vacios en blanco y saltos de linea que hay al principio y al final de una cadena

echo "Ejemplo con todo trim: " .trim("        Hola que tal          "). "<br>";

//ltrim: elimina los espacios que hay en blanco al principio de la cadena 
echo "Ejemplo de ltrim: " . ltrim("        Hola que tal          ") . "<br>";

// str_replace($antiga, $nova, $cadena): substitueix la cadena $antiga per la cadena $nova dins de $cadena

$cadena = "PHP es facil";
$antiga = "es facil";
$nova = "no es dificil";

echo "Ejemplo str_replace: " . str_replace($antiga, $nova, $cadena). "<br>";

// sreg_replace / eregi_replace()

// strtolower($cadena): passa la cadena a miniscules

// strtoupper($cadena): passa la cadena a majuscules

// explode: permet dividir una cadena segons un caracter o patró

echo "<br><br><br>";


// Exercici 1: busca en php.net la funcio:
//  str_word_count()y pon un ejemplo

echo "str_word_count — Cuenta el número de palabras utilizadas en un string <br><br>";


$str = "Prueba srt wordd";;

echo "Palabras utilitzades a srt: " . str_word_count($str) . "<br>";


// Exercici 2: busca en php.net la funcio:
// levenshtein() y pon un ejemplo
echo "levenshtein — Calcula la distancia Levenshtein entre dos strings <br><br>";


// Exercici 3: busca que es el operador ternario y
// pon un ejemplo

echo "El operador ternario en PHP es una forma rápida y corta de escribir una estructura condicional if-else en una sola línea";

// Exercici 4: Explicar que hace esta funcion:
function funcionMultipleReturns($v1,$v2,$v3){
  $v1 = "variable 1";
  $v2 = "variable 2";
  $v3 = "variable 3";

  return array($v1, $v2, $v3);
}

// Exercici 5: Crear una funcion comprova_email(...) que reciba una cadena decaracteres 
// como parametro que contiene un email y hace las siguientes comprobaciones:

// - Convertir  a minusculas
// - Eliminar todos los espacios en blanco
// - Comprobar si tiene el caracter @
// - Contar el numero de caracteres

// FALTA
?>