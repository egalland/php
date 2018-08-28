<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 4</title>
  </head>
  <body>
    <p><?= (isset($_GET['language']) && isset($_GET['server']))? $_GET['language'] . ' ' . $_GET['server']: 'ça marche po' ?></p>
  </body>
</html>
