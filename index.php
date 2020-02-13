<?php
require_once 'model.php';
$ennemy = new Orc;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercices Poo</title>
</head>
<body>
  <h1> C'est l'heure du duel </h1>
  <?= $ennemy->health; ?>
</body>
</html>
