<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo '<p>Has d\'arribar aqui des del formulari. <a href="registre.html">Torna-hi</a></p>';
    exit;
}

$usuari = [
    'nom' => trim($_POST['nom'] ?? ''),
    'cognoms' => trim($_POST['cognoms'] ?? ''),
    'naixement' => trim($_POST['naixement'] ?? ''),
    'telefon' => trim($_POST['telefon'] ?? ''),
    'correu' => trim($_POST['correu'] ?? ''),
    'usuari' => trim($_POST['usuari'] ?? ''),
    'carrer' => trim($_POST['carrer'] ?? ''),
    'poblacio' => trim($_POST['poblacio'] ?? ''),
    'cp' => trim($_POST['cp'] ?? ''),
    'tipus' => trim($_POST['tipus'] ?? ''),
    'origen' => trim($_POST['origen'] ?? ''),
    'butlleti' => isset($_POST['butlleti']) ? 'Si' : 'No',
    'condicions' => isset($_POST['condicions']) ? 'Si' : 'No'
];

$clau = $_POST['clau'] ?? '';
$clau2 = $_POST['clau2'] ?? '';
$errors = [];

if ($usuari['nom'] === '') {
    $errors[] = 'El nom es obligatori.';
}

if ($usuari['cognoms'] === '') {
    $errors[] = 'Els cognoms son obligatoris.';
}

if ($usuari['correu'] === '') {
    $errors[] = 'El correu es obligatori.';
} elseif (filter_var($usuari['correu'], FILTER_VALIDATE_EMAIL) === false) {
    $errors[] = 'El correu no te un format valid.';
}

if (strlen($usuari['usuari']) < 4) {
    $errors[] = 'El nom d\'usuari ha de tenir com a minim 4 caracters.';
}

if (strlen($clau) < 6) {
    $errors[] = 'La contrasenya ha de tenir com a minim 6 caracters.';
}

if ($clau !== $clau2) {
    $errors[] = 'Les dues contrasenyes han de ser iguals.';
}

if ($usuari['cp'] !== '' && !preg_match('/^[0-9]{5}$/', $usuari['cp'])) {
    $errors[] = 'El codi postal ha de tenir exactament 5 xifres.';
}

if ($usuari['tipus'] === '') {
    $errors[] = 'Has de triar un tipus de client.';
}

if (!isset($_POST['condicions'])) {
    $errors[] = 'Has d\'acceptar les condicions del servei.';
}

function etiqueta($camp) {
    $etiquetes = [
        'nom' => 'Nom',
        'cognoms' => 'Cognoms',
        'naixement' => 'Data de naixement',
        'telefon' => 'Telefon',
        'correu' => 'Correu electronic',
        'usuari' => 'Nom d\'usuari',
        'carrer' => 'Carrer i numero',
        'poblacio' => 'Poblacio',
        'cp' => 'Codi postal',
        'tipus' => 'Tipus de client',
        'origen' => 'Com ens has conegut',
        'butlleti' => 'Vol rebre ofertes',
        'condicions' => 'Accepta les condicions'
    ];

    if (isset($etiquetes[$camp])) {
        return $etiquetes[$camp];
    }
    return $camp;
}

function campsBuits($dades) {
    $buits = 0;
    foreach ($dades as $valor) {
        if ($valor === '') {
            $buits++;
        }
    }
    return $buits;
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BitBazar - Resultat del registre</title>
    <link rel="stylesheet" href="estils.css">
</head>
<body>
    <header>
        <p class="marca">BitBazar</p>
        <?php if (count($errors) > 0): ?>
            <h1>No s'ha pogut crear el compte</h1>
            <p>Revisa les dades del formulari.</p>
        <?php else: ?>
            <h1>Benvingut/da, <?= htmlspecialchars($usuari['nom']) ?>!</h1>
            <p>El compte s'ha creat correctament.</p>
        <?php endif; ?>
    </header>

    <main class="resultat">
        <?php if (count($errors) > 0): ?>
            <section class="avis">
                <h2>Hi ha alguns errors</h2>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li><?= htmlspecialchars($error) ?></li>
                    <?php endforeach; ?>
                </ul>
                <a class="enllac" href="registre.html">Torna al formulari</a>
            </section>
        <?php else: ?>
            <section class="targeta">
                <h2>Dades del registre</h2>
                <p>Correu: <strong><?= htmlspecialchars($usuari['correu']) ?></strong></p>
                <p>Hem rebut <?= count($usuari) ?> camps. Camps buits opcionals: <?= campsBuits($usuari) ?>.</p>

                <table>
                    <tr>
                        <th>Camp</th>
                        <th>Valor</th>
                    </tr>
                    <?php foreach ($usuari as $camp => $valor): ?>
                        <tr>
                            <th><?= htmlspecialchars(etiqueta($camp)) ?></th>
                            <td><?= htmlspecialchars($valor) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
                <a class="enllac" href="registre.html">Tornar a l'inici</a>
            </section>
        <?php endif; ?>
    </main>

    <footer>
        <p>BitBazar · Botiga de material informatic</p>
    </footer>
</body>
</html>
