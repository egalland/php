<?php
// début de la session de la page
session_start();
 ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 2</title>
  </head>
  <body>
    <a href="index.php">Vers page index</a>
    <p><?= empty($_SESSION['lastname'])? 'lastname vide': $_SESSION['lastname']; ?></p>
    <p><?= empty($_SESSION['firstname'])? 'firstname vide': $_SESSION['firstname']; ?></p>
    <p><?= empty($_SESSION['age'])? 'age vide': $_SESSION['age']; ?></p>
  </body>
</html>
