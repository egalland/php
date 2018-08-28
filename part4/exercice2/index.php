<?php
// Fonction qui retourne un texte en fonction du parametre
  function functionString($text){
    return $text;
  };
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 2</title>
  </head>
  <body>
    <p>
      <?= functionString('test'); ?>
    </p>
  </body>
</html>
