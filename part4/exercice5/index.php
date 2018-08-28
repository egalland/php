<?php
// Fonction qui renvoie un nombre et une chaine de caracteres
  function concatNumberString($number, $string){
    return $number . ' ' . $string;
  };
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 5</title>
  </head>
  <body>
    <p><?= concatNumberString(100, 'string'); ?></p>
  </body>
</html>
