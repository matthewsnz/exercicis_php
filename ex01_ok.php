<?php
echo 'Hola';
echo 'Hola', ' ', 'món';
echo '<p>Text</p>';
$x = 2; 
$dades = 10;

print 'Hola'; // retorna 1
var_dump($x); // per depurar // HE DECLARADO LA VARIABLE $x
print_r($dades); // Llegible // HE DECLARADO LA VARIABLE $dades

$nom = 'Aina';
$edat = 19;
$actiu = true;

$nom = 'Bernat'; //es pot canviar
$total = $edat + 1;

echo $nom;

$x = 5; // int
$x = 'cinc'; // ara string

$a = '10' + 5; // 15 (int)
$b = '10' . 5; // '105' (string)

var_dump($a, $b);


// Simple text literal

$nom = 'Aina';
echo  'Hola $nom';

// : Hola $nom

// Dobles: s'interpreta

$nom = 'Aina';
echo  "Hola $nom";

// : Hola Aina


// CONCATENACIÓ I INTERPOLACIÓ

$nom = 'Aina'; $punts = 0;

echo 'Hola' . $nom . ', tens' . $punts . ' punts'; // concatenacio amb .
echo "Hola $nom, tens $punts punts"; // interpolacio
echo "Hola {$nom}, tens {$punts} punts"; // interpolacio amb claus

// CONSTANTS

$base = 50;
define('IVA', 0.21);
const BOTIGA = 'Ca la Web';

echo BOTIGA; // Sense $
$total = $base * (1 + IVA); // HE DECLARADO $base

// IVA = 0.10; -> error fatal

// AMBIT DE LES VARIABLES

$missatge = 'Hola'; // ambit global

function saluda(){
  $missatge = 'Hola'; // HE POSAT LA VARIABLE EN AMBIT LOCAL PER QUE LA PUGUI VEURE
  echo $missatge; //no la veu
  $intern = 'Adeu'; // ambit local
}
saluda();
$intern = 'Adeu';
// HE POSAT LA VARIABLE EN AMBIT GLOBAL PERQUE ESTABA DINS DE LA FUNCIO
echo $intern; // tampoc la veu


// declare(strict_types=1);  -- Primera linia del fitxer. PHP deixa de convertir tipus pel seu compte
// ini_set('display_errors', '1'); -- Canvia un parametre nomes per a aquesta peticio
// error_reporting(E_ALL); -- Decideix quins nivells d'errors es tenen en compte ara mateix
// setlocale() · date_default_timerone_set(); -- Idioma i zona horaria per a aquest script

?>