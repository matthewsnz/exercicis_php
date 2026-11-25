<?php
session_start();
require_once 'config.php';
require_once 'funcions.php';

$titolPagina = 'Inici';
require 'header.php';
?>
        <h2>Benvingut a la botiga</h2>
        <p>Entra al teu compte per accedir a l'àrea privada.</p>
<?php
require 'footer.php';
