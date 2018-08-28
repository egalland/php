<?php
setlocale (LC_TIME, 'fr_FR.utf8')
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 3</title>
  </head>
  <body
    <!-- Afficher la date courante avec le jour de la semaine et le mois en toutes lettres *(ex : mardi 2 août 2016)*  
**Bonus** : Le faire en français. -->
    <p><?= strftime('%A %d %B %Y'); ?></p>
  </body>
</html>
