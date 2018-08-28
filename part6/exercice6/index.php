<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 6</title>
  </head>
  <body>
    <p><?= (isset($_GET['building']) && isset($_GET['room']))? $_GET['building'] . ' ' . $_GET['room']: 'ça marche po' ?></p>
  </body>
</html>
