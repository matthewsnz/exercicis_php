<?php

/**
 * Neteja un camp de $_POST: treu espais i retorna cadena buida si no existeix.
 *
 * @param string $nom Nom del camp del formulari
 * @return string     Valor net del camp
 */
function camp(string $nom): string
{
    return trim($_POST[$nom] ?? '');
}

/**
 * Comprova un usuari i una contrasenya contra la llista d'usuaris.
 *
 * @param string $usuari Nom d'usuari escrit al formulari
 * @param string $clau   Contrasenya escrita al formulari
 * @return array|null    Dades de l'usuari, o null si no són correctes
 */
function comprovaCredencials(string $usuari, string $clau): ?array
{
    if (!isset(USUARIS[$usuari])) {
        return null;
    }
    if (!password_verify($clau, USUARIS[$usuari]['hash'])) {
        return null;
    }
    return USUARIS[$usuari];
}


function exigeixSessio(): void
{
    if (!isset($_SESSION['usuari'])) {
        header('Location: login.php');
        exit; // header() no atura el codi: sense exit la pàgina s'executaria sencera
    }
}

/**
 * Torna la salutació adequada segons l'hora (ampliació).
 *
 * @return string "Bon dia", "Bona tarda" o "Bona nit"
 */
function salutacioSegonsHora(): string
{
    $hora = (int) date('G');
    if ($hora >= 6 && $hora < 14) {
        return 'Bon dia';
    }
    if ($hora >= 14 && $hora < 21) {
        return 'Bona tarda';
    }
    return 'Bona nit';
}
