<?php
$actualDate = date_create();
$anotherDate = date_create('2016-08-02 15:00');
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 4</title>
  </head>
  <body>
    <!-- Afficher le timestamp du jour.  
Afficher le timestamp du mardi 2 août 2016 à 15h00. -->
    <p><?= date_timestamp_get($actualDate); ?></p>
    <p><?= date_timestamp_get($anotherDate); ?></p>
  </body>
</html>
