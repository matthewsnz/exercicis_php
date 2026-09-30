<?php 

// Funciones prestablecidas de php
// isset() --> Permite saber si una variable existe en nuestro programa

// unset() --> liberar espacio en memoria (destruir) de una variable

$var = "10";

if(isset($var)){
  echo "La variable $var existe";
}

unset($var);
if(isset($var)){ 
  // si es true entra
  echo "La variable $var existe";
}else{ 
  // si es false entra aqui
  echo "La variable $var no existe";
}

// gettype() --> Nos retorna el tipo de variable que pasamos por parametro

// settype() --> Asignamos un tipo de dato a la variable que pasamos por parametro

// empty() --> Funcion que mira si una variable esta vacia, no existe o su valor es 0

// is_integer(var), is_double(var), is_array(var), is_string(var) --> Para saber si una variable es
// integer, double, string, array, etc



// Ex1: for para la tabla de multiplicar del 5
// var existe?
/*  
  $mult = 0;
  for ($i=0; $i <= 10 ; $i++) { 
    $resultado = $num * $mult;
    echo "<br>"; 
    echo "$num x $mult = $resultado";
    $mult++;
  }
  */
$num = 5;
if(isset($num)){
  for ($i=0; $i <=10 ; $i++) { 
    echo "$num x $i = " . $num*$i;
    echo "<br>";
  }
}

echo "<br>";
// Ex2: Mostrar los numeros pares del 1 al 1000
$n = 1;
for ($i=1; $i <=100 ; $i++) { 
    if($n%2==0){
      echo "<br>";
      echo $n;
    }
    $n++;
}
echo "<br>";

// Ex3: Dibuja una tabla html donde salgan las tablas del multiplicar del 1 al 10

echo "<table border='1'>";

for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 10; $j++) {
        echo "<td> $j  x   $i = " . $i * $j . "</td>";
    }
    echo "</tr>";
}

echo "</table>";


?>
