<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 3</title>
  </head>
  <body>
    <p><?= (isset($_GET['startDate']) && isset($_GET['endDate']))? $_GET['startDate'] . ' ' . $_GET['endDate']: 'ça marche po' ?></p>
  </body>
</html>
