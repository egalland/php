<?php
// Fonction qui compare 2 nombres
  function compareNumber($number1, $number2){
    // si le 1er nombre est plus grand que le 2eme
    if($number1 > $number2){
      $message = 'Le premier nombre est plus grand';
      // si le 2eme nombre est plus grand que le 1er
    }elseif ($number1 < $number2) {
      $message = 'Le premier nombre est plus petit';
      // si les deux nombres sont égaux
    }else{
      $message = 'Les deux nombres sont identiques';
    }
    return $message;
  };
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 4</title>
  </head>
  <body>
    <p>
      <?= compareNumber(100, 10); ?>
    </p>
  </body>
</html>
