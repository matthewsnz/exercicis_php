<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo '<p>Has d\'arribar aqui des del formulari. ';
    echo '<a href="registre.html">Torna-hi</a></p>';
    exit;
}
$usuari = [
    'nom'       => trim($_POST['nom'] ?? ''),
    'cognoms'   => trim($_POST['cognoms'] ?? ''),
    'naixement' => trim($_POST['naixement'] ?? ''),
    'correu'    => trim($_POST['correu'] ?? ''),
    'usuari'    => trim($_POST['usuari'] ?? ''),
 
    // ... continua amb la resta de camps
 
    'butlleti'  => isset($_POST['butlleti']) ? 'Si' : 'No',
];
?>