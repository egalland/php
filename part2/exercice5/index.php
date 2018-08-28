<?php
  $gender = 'Homme';
  if($gender != 'Homme'){
    $genderEcho = 'C\'est une développeuse !!!';
  }else{
    $genderEcho = 'C\'est un développeur !!!';
  };
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 5</title>
  </head>
  <body>
    <p>
      <?= $genderEcho; ?>
   </p>
  </body>
</html>
