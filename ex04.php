<?php 
/**************************************************
* Aquest fitxer te 6 errors, 3 de sintaxi (PHP no arrenca)
* i 3 de logica (funciona pero el resultat no es el correcte).
*
* Arregla'ls d'un en un, comprovant la pagina deespres de cada canvi
* Anota a error-trobats.md quin era, com te n'has adonat i com l'has resolt.
****************************************************************/ 

# Error 1: nom = 'Aina'; Faltaba el $
$nom = 'Aina';
# Error 2: $assignatura = 'Desenvolupament web'  faltan punto y coma
$assignatura = 'Desenvolupament web';

$nota1 = 7;
$nota2 = 9;
# Error 3: $mitjana = $nota1 + $nota2 / 2; La jerarquia
$mitjana = ($nota1 + $nota2) / 2;


echo '<h1>Bulleti de notes</h1>';
# Error 4: echo '<p>Alumne $nom</p>'; En vez '' tienen que ser  ""
echo "<p>Alumne: $nom</p>";
# Error 5 : echo '<p>Assignatura: ' + $assignatura + '</p>'; Para concatenar en PHP se usa . no +
echo '<p>Assignatura: ' . $assignatura . '</p>';
#Error 6 : echo "<p>Mitjana: $mitjana</p>; Le falta cerrar las comillas
echo "<p>Mitjana: $mitjana</p>";

echo '<p>Generat el ' . date('d/m/Y') . '</p>';
?>