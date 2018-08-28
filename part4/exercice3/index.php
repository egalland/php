<?php
// Fonction qui renvoie du texte en fonction des 2 parametres
  function functionString($text1, $text2){
    echo $text1 . $text2;
  };
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 3</title>
  </head>
  <body>
    <p>
      <?php functionString('test', 'oui'); ?>
    </p>
  </body>
</html>
