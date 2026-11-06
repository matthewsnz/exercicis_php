<?php
// Quin faig servir?

// config.php                 | require_once  | Constants i valors fixos. Nomes una vegada
// funcions.php               | require_once  | Si es declara dues vegades, error fatal.
// capcalera.php              | require       | Sense dissent la pagina no serveix
// peu.php                    | require       | Igual que la capçalera
// Un bloc opcional           | include       | Un baner, un avis... si falta, tant se val

// El quatre fitxers

// config.php / Valors que es faran servir a mes de un lloc 
// funciones.php / Totes les funcions propies, juntes. Tampoc escriu res a la pantalla
// capcalera.php / Des del <!DOCTYPE> fins a l'obertura del <main>. El titol li arriba per $titolPagina
// peu.php / El tancament del <main>, el peu de pagina i el tancament de l'HTML

?>