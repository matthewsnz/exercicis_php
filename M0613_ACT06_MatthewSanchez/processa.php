<?php
require_once 'config.php';
require_once 'funcions.php';

// Comprobacio de que no ens saltem com s'arriba
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    $titolPagina = 'Acces directe';
    require 'header.php';

    echo '<h2>Aqui no s\'hi arriba directament</h2>';
    echo '<p>Has d\'arribar aqui des del formulari.</p>';
    echo '<a class="tornar" href="' . PAG_FORMULARI . '">Anar al formulari</a>';

    require 'footer.php';
    exit;
}

// recollir les dades
$usuari = [
    'nom' => camp('nom'),
    'cognoms' => camp('cognoms'),
    'naixement' => camp('naixement'),
    'telefon' => camp('telefon'),
    'correu' => camp('correu'),
    'usuari' => camp('usuari'),
    'carrer' => camp('carrer'),
    'poblacio' => camp('poblacio'),
    'cp' => camp('cp'),
    'tipus' => camp('tipus'),
    'origen' => camp('origen', 'No ho ha indicat'),
    'butlleti' => isset($_POST['butlleti']) ? 'Si' : 'No',
    'condicions' => isset($_POST['condicions']) ? 'Si' : 'No'
];

//contrasenyes
$clau = camp('clau');
$clau2 = camp('clau2');

$errors = [];

// comprobacions
$buits = campsBuits($usuari);
foreach ($buits as $campBuit) {
    $errors[] = 'El camp ' . etiqueta($campBuit) . ' es obligatori.';
}

if ($usuari['correu'] !== '' && filter_var($usuari['correu'], FILTER_VALIDATE_EMAIL) === false) {
    $errors[] = 'El correu no te un format valid.';
}

if ($usuari['usuari'] !== '' && strlen($usuari['usuari']) < MIN_USUARI) {
    $errors[] = 'El nom d\'usuari ha de tenir com a minim ' . MIN_USUARI . ' caracters.';
}

if (strlen($clau) < MIN_CLAU) {
    $errors[] = 'La contrasenya ha de tenir com a minim ' . MIN_CLAU . ' caracters.';
}

if ($clau !== $clau2) {
    $errors[] = 'Les dues contrasenyes no coincideixen.';
}

if ($usuari['cp'] !== '' && !esCodiPostalValid($usuari['cp'])) {
    $errors[] = 'El codi postal ha de tenir exactament 5 xifres.';
}

if (!in_array($usuari['tipus'], ['Particular', 'Empresa', 'Estudiant'], true)) {
    $errors[] = 'Has de seleccionar un tipus de client valid.';
}

if (!isset($_POST['condicions'])) {
    $errors[] = 'Has d\'acceptar les condicions del servei.';
}

// el titol per posarlo despres
$titolPagina = count($errors) > 0
    ? 'No s\'ha creat el compte'
    : 'Compte creat';

require 'header.php';
?>

<?php if (count($errors) > 0): ?>
    <section class="resultat error">
        <h2>No s'ha pogut crear el compte</h2>
        <p>Revisa aquests errors i torna-ho a provar:</p>
        <ul>
            <?php foreach ($errors as $error): ?>
                <li><?= htmlspecialchars($error) ?></li>
            <?php endforeach; ?>
        </ul>
        <a class="tornar" href="<?= PAG_FORMULARI ?>">Tornar al formulari</a>
    </section>
<?php else: ?>
    <section class="resultat ok">
        <h2>Benvingut/da, <?= htmlspecialchars($usuari['nom']) ?>!</h2>
        <p>El registre s'ha fet correctament. Hem registrat el correu <?= htmlspecialchars($usuari['correu']) ?>.</p>

        <h3>Resum de les dades</h3>
        <table>
            <?php foreach ($usuari as $clauCamp => $valor): ?>
                <tr>
                    <th><?= htmlspecialchars(etiqueta($clauCamp)) ?></th>
                    <td><?= htmlspecialchars($valor) ?></td>
                </tr>
            <?php endforeach; ?>
        </table>

        <a class="tornar" href="gracies.php">Continuar</a>
    </section>
<?php endif; ?>

<?php
require 'footer.php';
?>
