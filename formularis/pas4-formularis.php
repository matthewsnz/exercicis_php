<?php 
/*
PAS4 - Validar control d'erros i escapar

*/


// Declaracion de variables

$nom = '';
$correu = '';
$dia = '';
$errors = [];
$inscrit = false;

// Si recibimos los datos
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $nom = trim($_POST['nom'] ?? '');
    $correu = trim($_POST['correu'] ?? '');
    $dia = trim($_POST['dia'] ?? '');
  //Validar los errores 
  if($nom === ''){
    $errors['nom'] = 'El nom es obligatori';
  }
  if($correu === ''){
    $errors['correu'] = 'El correu es obligatori';
  }
  elseif(filter_var($correu, FILTER_VALIDATE_EMAIL) === false){
    // Si han añadido un formato correcto de email
    $errors['correu'] = 'Aquest correu no te un format valid';
  }

  if($dia !== 'divendres' && $dia !== 'dissabte'){
    $errors['dia'] = 'Has de triar un dia';
  }


  // Si el count del array $error es 0 --> que no hay errores
  if(count($errors) === 0){
    $inscrit = true;
  }
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
  
  <?php if($inscrit): ?>
<!-- ESCAPAR los datos recibidos-->
 <p class="ok">Inscripcio feta, <?= htmlspecialchars($nom) ?></p>
 <p class="ok">T'esperem el <?= htmlspecialchars($dia) ?></p>

 <?php else: ?>
  <!--novalidate en el dorm para ver los errores desde el php (servidor)-->
  <form method="post" novalidate>
    <label for="nom">Nom</label>
    <input id="nom" name="nom" value="<?= htmlspecialchars($nom) ?>">
    <?php if(isset($errors['nom'])): ?>
        <p class="error"><?= $errors['nom'] ?></p>
    <?php endif; ?>

    <label for="correu">Correu</label>
    <input id="correu" name="correu" value="<?= htmlspecialchars($correu) ?>">
    <?php if(isset($errors['correu'])): ?>
        <p class="error"><?= $errors['correu'] ?></p>
    <?php endif; ?>

    <label for="dia">Dia</label>
    <select name="dia" id="dia">
      <option value="">Tria un dia</option>
      <option value="divendress" <?= $dia === 'divendres' ? 'selected' : '' ?>>divendres</option>
      <option value="dissabte" <?= $dia === 'dissabte' ? 'selected' : '' ?>>dissabte</option>
    </select>
    <?php if(isset($errors['dia'])): ?>
      <p class="error"><?= $errors['dia'] ?></p>
    <?php endif;?>

    <button>Inscriure'm</button>
    </form>
    <?php endif; ?>
</body>
</html>