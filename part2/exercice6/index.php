<?php
  $age = 24;
  if($age >= 18){
    $ageEcho = 'Tu es majeur';
  }else{
    $ageEcho = 'Tu n\'es pas majeur';
  };
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 6</title>
  </head>
  <body>
    <p>
      <?= $ageEcho; ?>
   </p>
  </body>
</html>
