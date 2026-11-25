<?php
session_start();
require_once 'config.php';

$titolPagina = 'Registre';
require 'header.php';
?>
        <h2>Registre</h2>
        <form action="processa.php" method="post">
            <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom">
            <label for="email">Correu electrònic</label>
            <input type="email" id="email" name="email">
            <button type="submit">Registrar-me</button>
        </form>
<?php
require 'footer.php';
