<?php
session_start();
require_once 'config.php';
require_once 'funcions.php';

exigeixSessio();

$titolPagina = 'La teva àrea privada';
require 'header.php';
?>
        <h2><?= salutacioSegonsHora() ?>, <?= htmlspecialchars($_SESSION['nom']) ?></h2>
        <p>Has entrat a les <strong><?= htmlspecialchars($_SESSION['entrada']) ?></strong>.</p>

        <h3>Contingut de la sessió</h3>
        <table>
            <?php foreach ($_SESSION as $clau => $valor): ?>
                <tr>
                    <th><?= htmlspecialchars((string) $clau) ?></th>
                    <td><?= htmlspecialchars((string) $valor) ?></td>
                </tr>
            <?php endforeach; ?>
        </table>

        <a class="tornar" href="sortir.php">Tancar la sessió</a>
<?php
require 'footer.php';
