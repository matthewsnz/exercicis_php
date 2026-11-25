<?php
session_start();
require_once 'config.php';
require_once 'funcions.php';

$nom   = camp('nom');
$email = camp('email');

$titolPagina = 'Resum del registre';
require 'header.php';
?>
        <h2>Resum</h2>
        <table>
            <tr><th>Nom</th><td><?= htmlspecialchars($nom) ?></td></tr>
            <tr><th>Correu</th><td><?= htmlspecialchars($email) ?></td></tr>
        </table>
<?php
require 'footer.php';
