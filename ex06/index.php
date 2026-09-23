

<?php 

$descripcioBotiga = "Esto es una tienda online de Matthew";
$nomProducte = "Camiseta";
$desProducte = "Camiseta ancha";
$preu = 99.99;
$estoc = 5;
$footer = "Footer de la tienda S.L";
$ref = "CAM-1425376";

const IVA = 0.21;
const BOTIGA = "Tienda Online";
const MONEDA = " €";
const DESCOMPTE_SOCI = 0.10;

$preuTotal = $preu + ($preu * IVA)

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tienda Online</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1><?=BOTIGA?></h1>
    <p><?= $descripcioBotiga ?></p>
  </header>
  <main>
    <article class="producte">
      <h2><?=$nomProducte?></h2>
      <p class="descripcio"><?= $desProducte?></p>
      <p class="preu">Preu sense IVA: <?= $preu . MONEDA?></p>
      <p class="preu"><?= $preu * IVA . MONEDA?></p>
      <p class="total"><?= $preuTotal . MONEDA?></p>

      <p class="estoc">Unitats disponibles: <?=$estoc?></p>
      <p class="ref"><?=$ref?></p>
    </article>
  </main>

  <footer>
    <p>Footer de la tienda S.L</p>
  </footer>

</body>
</html>

