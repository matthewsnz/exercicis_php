<?php
declare(strict_types=1);

function saluda(string $nom): void {
    echo "<p>Benvingut/da, $nom!</p>";
}


function targeta(string $nom, float $preu, int $estoc): void {
    echo "<div class='targeta'>";
    echo "<h3>$nom</h3>";
    echo "<p>Preu: " . number_format($preu, 2, ',', '.') . " EUR</p>";
    echo "<p>Estoc: $estoc unitats</p>";
    echo "</div>";
}

?>