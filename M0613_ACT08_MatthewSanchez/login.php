<?php
session_start();          
require_once 'config.php';
require_once 'funcions.php';

$errors = [];

if (isset($_SESSION['usuari'])) {
    header('Location: privat.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (($_SESSION['intents'] ?? 0) >= MAX_INTENTS) {
        $errors[] = 'Massa intents fallits. Accés bloquejat en aquesta sessió.';
    } else {
        $usuari = camp('usuari');
        $clau   = $_POST['clau'] ?? ''; 
        $dades = comprovaCredencials($usuari, $clau);

        if ($dades === null) {
            $errors[] = 'Usuari o contrasenya incorrectes.';
            $_SESSION['intents'] = ($_SESSION['intents'] ?? 0) + 1;
        } else {
            session_regenerate_id(true); 
            unset($_SESSION['intents']);
            $_SESSION['usuari']  = $usuari;
            $_SESSION['nom']     = $dades['nom'];
            $_SESSION['entrada'] = date('H:i:s');
            header('Location: privat.php');
            exit;
        }
    }
}

$titolPagina = 'Iniciar sessió';
require 'header.php';
?>
        <h2>Entra al teu compte</h2>
<?php if (count($errors) > 0): ?>
        <div class="errors">
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li><?= htmlspecialchars($error) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
<?php endif; ?>
        <form action="login.php" method="post">
            <label for="usuari">Nom d'usuari</label>
            <input type="text" id="usuari" name="usuari">
            <label for="clau">Contrasenya</label>
            <input type="password" id="clau" name="clau">
            <button type="submit">Entrar</button>
        </form>
<?php
require 'footer.php';
