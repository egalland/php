<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 2</title>
  </head>
  <body>
    <p><?= $_GET['lastname']; ?><?= $_GET['firstname']; ?></p>
    <p><?= (empty($_GET['age']))? 'rien': $_GET['age']; ?></p>
  </body>
</html>
