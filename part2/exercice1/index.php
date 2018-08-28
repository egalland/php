<?php
  $age = 24;
  if($age >= 18){
    $conditionAge = 'Vous êtes majeur';
  }else{
    $conditionAge = 'Vous êtes mineur';
  };
 ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 1</title>
  </head>
  <body>
    <p>
      <?= $conditionAge ?>
   </p>
  </body>
</html>
