<?php
  $age = 24;
  $gender = 'Homme';
  $ageEcho = 'invalide';
  $genderEcho = 'invalide';
  if ($age > 0 && $gender == 'Homme' || $gender == 'Femme'){
    $genderEcho= ($gender == 'Homme') ? 'un homme' : 'une femme';
    $ageEcho= ($age >= 18) ? 'majeur' : 'mineur';
  }
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 3</title>
  </head>
  <body>
    <p>
      Vous êtes <?= $genderEcho; ?> et vous êtes <?= $ageEcho; ?>
   </p>
  </body>
</html>
