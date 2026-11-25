<?php
require_once 'config.php';

$titolPagina = 'Crea el teu compte';
require 'header.php';
?>

<h2>Crea el teu compte</h2>
<p class="introduccio">Omple les dades per registrar-te a BitBazar.</p>

<form action="processa.php" method="post">
    <fieldset>
        <legend>Dades personals</legend>

        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom">

        <label for="cognoms">Cognoms</label>
        <input type="text" id="cognoms" name="cognoms">

        <label for="naixement">Data de naixement</label>
        <input type="date" id="naixement" name="naixement">

        <label for="telefon">Telefon</label>
        <input type="tel" id="telefon" name="telefon">
    </fieldset>

    <fieldset>
        <legend>Dades del compte</legend>

        <label for="correu">Correu electronic</label>
        <input type="email" id="correu" name="correu">

        <label for="usuari">Nom d'usuari</label>
        <input type="text" id="usuari" name="usuari">

        <label for="clau">Contrasenya</label>
        <input type="password" id="clau" name="clau">

        <label for="clau2">Repeteix la contrasenya</label>
        <input type="password" id="clau2" name="clau2">
        <small>La contrasenya ha de tenir com a minim <?= MIN_CLAU ?> caracters.</small>
    </fieldset>

    <fieldset>
        <legend>Adreca</legend>

        <label for="carrer">Carrer i numero</label>
        <input type="text" id="carrer" name="carrer">

        <label for="poblacio">Poblacio</label>
        <input type="text" id="poblacio" name="poblacio">

        <label for="cp">Codi postal</label>
        <input type="text" id="cp" name="cp" maxlength="5">
    </fieldset>

    <fieldset>
        <legend>Preferencies</legend>

        <label for="tipus">Tipus de client</label>
        <select id="tipus" name="tipus">
            <option value="">Selecciona una opcio</option>
            <option value="Particular">Particular</option>
            <option value="Empresa">Empresa</option>
            <option value="Estudiant">Estudiant</option>
        </select>

        <p class="grup">Com ens has conegut?</p>
        <label class="linia">
            <input type="radio" name="origen" value="Xarxes socials"> Xarxes socials
        </label>
        <label class="linia">
            <input type="radio" name="origen" value="Amics o amigues"> Amics o amigues
        </label>
        <label class="linia">
            <input type="radio" name="origen" value="Internet"> Internet
        </label>

        <label class="linia">
            <input type="checkbox" name="butlleti" value="si"> Vull rebre ofertes i novetats
        </label>
        <label class="linia">
            <input type="checkbox" name="condicions" value="si"> Accepto les condicions del servei
        </label>
    </fieldset>

    <button type="submit">Crear el compte</button>
</form>

<?php
require 'footer.php';
?>
