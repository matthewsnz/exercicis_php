<?php
declare(strict_types=1);


function capcalera(): void {
    echo "<header>";
    echo "<h1>BitBazar</h1>";
    echo "<p>Botiga de material informatic</p>";
    echo "</header>";
}


function peu(): void {
    echo "<footer>";
    echo "<p>BitBazar - " . date('Y') . "</p>";
    echo "</footer>";
}


function missatge(): void {
    echo "<p>Aquesta funcio no s'executa.</p>";
}

?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Apartat 1 - Funcions</title>
    <link rel="stylesheet" href="estils.css">
</head>
<body>
<?php
capcalera();

echo "<main>";
echo "<h2>Primer apartat: les funcions</h2>";
echo "<p>Estem practicant com crear i utilitzar funcions en PHP.</p>";
echo "</main>";

peu();
peu();
peu();

?>
</body>
</html>
