<?php
// Teoria Funciones

// DECLARAR I CRIDAR

// DECLARAR 

function peu(): void
{
  echo "<footer>...</footer>";
}

//CRIDAR

peu();
peu();
peu();
//s'executa tres vegadas

// El tipus void vol dir que la funcio no torna res: nomes fa coses, com escriure per pantalla.

//El parametres
// la informacio que entra a la funcio

function targeta(string $nom, float $preu, int $estoc): void
{
  echo "<h3>$nom</h3><p>$preu EUR · $estoc unitats</p>";
}

targeta('Teclat mecanic', 79.90, 4);  //l'ordre importa!

// Van per ordre (El primer valor que passes va al primer parametre)
// Son variables locals (Nomes existeixen dins de la funcio)
// Tenen tipus (string, int, float, bool, array...)
// Els pots posar tant com vulguis (Pero si en necessites mes de 4 o 5, replanteja-t'ho)


// VALORES POR DEFECTO

function preuAmbIva(
  float $base,
  float $iva = 0.21 //valor per defecte
): float {
  return round($base * (1+ $iva), 2);
}

preuAmbIva(100);         // 121
preuAmbIva(100, 0.10);   // 110

// Com funciona?
// Si no passes el valor, s'usa el per defecte
// Si el passes, mana el teu
// Els opcionals van SEMPRE al final


// Posar els opcionals al mig dona un error: PHP no sabria quin valor va a quin paramentre

//ELS TIPUS I STRICT_TYPES

declare(strict_types=1); // primera linea del fitxer

//sense strict_types
area('3',4.0); 
  // PHP converteix i no es queixa

// Amb strict_types
area('3',4.0);
  // TyperError: must be of type float


// L'AMBIT: QUE VEU UNA FUNCIO

$botgia = 'BitBazar'; //Variable global

function mostrar(): string {
  return 'Som a ' . $botiga;    // NO la veu!
}

// Warning: Undefinied varaible $botiga

function mostra(string $nom):string {return "Som a $nom"; } // Be: entra per parametre



//STATIC: LA FUNCIO QUE RECORDA

//Variable local normal

function compta(): int {
  $n = 0;
  $n++;
  return $n;
}
// 1, 1, 1

//Variable static

function compta(): int {
  static $n = 0;
  $n++;
  return $n;
}
// 1, 2, 3

// Static fa que la variable sobrevisqui entre crides. Util per comptar coses, pero no n'abusis.

// FUNCIONS QUE TREBALLEN AMB ARRAY

// Rep un array, torna un valor

function valorEstoc(array $p): 
{
  $total = 0.0; 
  foreach($p as $item){
    $total += $item['preu'];
  }
  return $total;
}

// Rep un array, torna un array

function disponibles(array $p): array
{
  $res = [];
  foreach($p as $item){
    if ($item['estoc'] > 0) { $res[] =  $item; }
  }
  return $res;
}
?>