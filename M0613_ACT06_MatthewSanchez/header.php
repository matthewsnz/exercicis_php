<?php
if (!isset($titolPagina)) {
    $titolPagina = 'Inici';
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($titolPagina) ?> · <?= BOTIGA_NOM ?></title>
    <link rel="stylesheet" href="<?= FULL_ESTILS ?>">
</head>
<body>
    <header class="capcalera">
        <h1><?= BOTIGA_NOM ?></h1>
        <p><?= BOTIGA_LEMA ?></p>
    </header>

    <main class="contenidor">
