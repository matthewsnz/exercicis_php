<?php 
// Una sola pagina, fins ara teniem dos fitxers, el 
//mira com es da la peticio i aixi 
// la primera visita es com get (rellenar lo que falta con el chat porque no estaba y no se veia mas)

$nom = '';
$correu = '';
$dia = '';
$tel = '';

//var de control
$enviat = false;

// Array predefinido $_SERVER nos da informacion del servidor
// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";
// 
if($_SERVER['REQUEST_METHOD'] === 'POST'){
  $nom  = trim($_POST['nom'] ?? '');
  $correu = trim($_POST['correu'] ?? '');
  $tel = trim($_POST['tel'] ?? '');
  $dia =  trim($_POST['dia'] ?? 'sense triar');
  $enviat = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inscripcio al festival</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Inscripcio al festival</h1>

  <?php if($enviat): ?>
    <p>Inscripcio rebuda: <?= $nom; ?> (<?= $correu ?>), tel: <?= $tel ?> ,  dia <?= $dia ?>.</p>
  <?php endif; ?>

  <form method="post">

      <label for="nom">Nom</label>
      <input type="text" id="nom" name="nom">

      <label for="correu">Correu</label>
      <input type="email" id="correu" name="correu">

      <label for="tel">Telefon</label>
      <input type="text" id="tel" name="tel">

      <label for="dia">Dia</label>
      <select id="dia" name="dia">
          <option value="divendres">Divendres</option>
          <option value="dissabte">Dissabte</option>
          <option value="diumenge">Diumenge</option>
      </select>

      <button type="submit">Inscriure'm</button>

  </form>

</body>
</html>

