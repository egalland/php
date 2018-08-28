<?php
// déclaration des variables
  $number1 = 0;
  $number2 = 0;
  $number3 = 0;
  // fonction somme avec 3 parametres
  function sum($number1, $number2, $number3){
    echo $number1 + $number2 + $number3;
  };
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 8</title>
  </head>
  <body>
    <p>
      <?php sum(8, 65, 58); ?>
    </p>
  </body>
</html>
