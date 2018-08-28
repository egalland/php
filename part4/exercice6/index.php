<?php
// Fonction qui renvoie une description avec 3 parametres
  function returnDescription($lastname, $firstname, $age){
    return 'Bonjour ' . $lastname . ' ' . $firstname . ', tu as ' . $age . 'ans';
  };
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 6</title>
  </head>
  <body>
    <p><?= returnDescription('Galland', 'Emmanuel', 24); ?></p>
  </body>
</html>
