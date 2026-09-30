<?php 

// Definicion de una función 
// function nomFuncion($arg1, $arg2){
        // Codigo de la funcion
        // return valor o no; 
// }

function funcionTest(){
  $var = 10;
  return $var;
}

// Como la funcion funcionTest tiene un return, tengo que igualarla a una variable para recoger el valor del retorno

$var_fun = funcionTest();
echo "La variable igualada a la funcion vale: " . $var_fun . "<br>";

// Funcion sin return 
function funcionTestSin(){
  // Esta variable es local de la funcion
  $var = 20;
  echo "la variable dentro de la funcion vale: " . $var . "<br>";
}

//Error en var
//echo "La variable var da error? $var"

// Llamada a la funcion
funcionTestSin();

// Como podemos utilizar dentro de las funciones variables globales

$var2 = 50;

function funcionConGlobal(){
  //Para poder utilizar una variable de fueradel ambito de la funcion se utiliza la palabra reservada global
  global $var2;
  echo "La variable var2 de fuera de la funcion vale: $var2 <br>";
}
funcionConGlobal();


// Recursividad --> Una funcion se puede llamar a si misma 
function factorial($numero){
  // Factorial de 5 es 5*4*3*2*1
  if ($numero== 1) {
    return $numero;
  }else{
    return $numero * factorial($numero -1);
  }
}
echo "El factorial de 7 es: " . factorial(7) . "<br>";


?>