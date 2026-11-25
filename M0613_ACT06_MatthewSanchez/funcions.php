<?php

/**
 * Recull un camp de text del formulari i treu els espais.
 *
 * @param string $camp Nom del camp que arriba per POST
 * @param string $defecte Valor per defecte si no arriba
 * @return string El text net
 */
function camp(string $camp, string $defecte = ''): string
{
    if (isset($_POST[$camp]) && is_string($_POST[$camp])) {
        return trim($_POST[$camp]);
    }

    return $defecte;
}

/**
 * Converteix el nom intern d'un camp en una etiqueta llegible.
 *
 * @param string $clau Nom intern del camp
 * @return string Etiqueta per mostrar a la taula
 */
function etiqueta(string $clau): string
{
    $noms = [
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
        'butlleti' => 'Butlleti',
        'condicions' => 'Condicions del servei'
    ];

    return $noms[$clau] ?? ucfirst($clau);
}

/**
 * Comprova quins camps obligatoris estan buits.
 *
 * @param array $dades Dades del formulari
 * @return array Noms dels camps que estan buits
 */
function campsBuits(array $dades): array
{
    $buits = [];

    foreach (['nom', 'cognoms', 'correu', 'usuari', 'tipus'] as $clau) {
        if (($dades[$clau] ?? '') === '') {
            $buits[] = $clau;
        }
    }

    return $buits;
}

/**
 * Comprova que el codi postal tingui cinc xifres.
 *
 * @param string $cp Codi postal introduit
 * @return bool True si te el format correcte
 */
function esCodiPostalValid(string $cp): bool
{
    return preg_match('/^[0-9]{5}$/', $cp) === 1;
}
