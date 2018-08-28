<?php
$actualDate = date_create();
$anotherDate = date_create('2016-05-16');
$timeBetweenDate = $actualDate->diff($anotherDate);
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 5</title>
  </head>
  <body>
    <!-- Afficher le nombre de jour qui sépare la date du jour avec le 16 mai 2016. -->
    <p><?= $timeBetweenDate->format('%a jours'); ?></p>
  </body>
</html>
