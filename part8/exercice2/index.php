<?php
// début de la session de la page
session_start();
// création et déclaration des variables
$_SESSION['lastname'] = 'Galland';
$_SESSION['firstname'] = 'Emmanuel';
$_SESSION['age'] = 24;
 ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 2</title>
  </head>
  <body>
    <a href="user.php">Vers page user</a>
  </body>
</html>
