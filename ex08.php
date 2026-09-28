<?php 
/*
Crear array asociativo con:
- nombre
- curso
- edat
- nota media

10 alumnos 

Mostrar en table HTML
*/
$dades = [
[ "nombre" => "Matthew","curso" => "2DAW","edat" => 20,"notaMitjana" => 7],
[ "nombre" => "Izan","curso" => "DEP","edat" => 20,"notaMitjana" => 5 ],
[ "nombre" => "Iker","curso" => "IA","edat" => 19,"notaMitjana" => 8 ],
[ "nombre" => "Albert","curso" => "DEP","edat" => 19, "notaMitjana" => 6 ],
[ "nombre" => "Iker","curso" => "2DAW","edat" => 20,"notaMitjana" => 9 ],
[ "nombre" => "Alex","curso" => "ADM","edat" => 18,"notaMitjana" => 6 ],
[ "nombre" => "Raul","curso" => "ADM","edat" => 18,"notaMitjana" => 5 ],
[ "nombre" => "Pedro","curso" => "IA","edat" => 21,"notaMitjana" => 4],
[ "nombre" => "Antonio","curso" => "2DAW","edat" => 24,"notaMitjana" => 6],
[ "nombre" => "Luis","curso" => "IA","edat" => 20,"notaMitjana" => 9]
];
 
//count — Cuenta todos los elementos de un array o en un objeto Countable

var_dump(count($dades));

// in_array — Indica si un valor pertenece a un array

if (in_array('',));
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
  table {
    border: 1px solid black;
    width: 300px;
  }
  th, td {
    border: 1px solid black;
    padding: 10px;
  }
</style>
</head>
<body>
  <table>
    <tr>
      <th>Nombre</th>
      <th>Curso</th>
      <th>Edat</th>
      <th>Nota Mitjana</th>
    </tr>
      <?php foreach ($dades as $dades) { ?>

      <tr>
        <td><?=$dades["nombre"]?></td>
        <td><?=$dades["curso"]?></td>
        <td><?=$dades["edat"]?></td>
        <td><?=$dades["notaMitjana"]?></td>
      </tr>

      <?php } ?>
    
  </table>
</body>
</html>