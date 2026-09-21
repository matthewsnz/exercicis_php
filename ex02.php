<?php
// Declaramos una constante IVA (no cambia de valor) 
const IVA = 0.21;

$producte = 'Teclat';
$base  = 79.90;
$estoc = 4;
// funcion predefinida para redondear 2 decimales round
$total = round($base * (1 + IVA), 2);

$nom = 'Matthew';
$cognom = 'Sanchez';
$direccio = 'Carrer Navarra';
?>

<h2><?php echo $producte ?></h2>

<p>Preu amb IVA: <?= $total; ?> EUR</p>

<p>Disponibilitat: <?= $estoc ?></p>

<p>Nom: <?= $nom . ' ' . $cognom ?> EUR</p>

<p><?php echo $direccio ?></p>
