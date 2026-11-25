<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($titolPagina ?? 'Botiga') ?></title>
    <link rel="stylesheet" href="estils.css">
</head>
<body>
    <header>
        <h1><a href="index.php"><?= htmlspecialchars(NOM_BOTIGA) ?></a></h1>
        <nav>
            <a href="index.php">Inici</a>
            <a href="registre.php">Registre</a>
            <a href="privat.php">Àrea privada</a>
        </nav>
        <p class="usuari">
        <?php if (isset($_SESSION['usuari'])): ?>
            Hola, <strong><?= htmlspecialchars($_SESSION['nom']) ?></strong>
            &middot; <a href="sortir.php">Sortir</a>
        <?php else: ?>
            <a href="login.php">Iniciar sessió</a>
        <?php endif; ?>
        </p>
    </header>
    <main>
