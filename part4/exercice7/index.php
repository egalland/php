<?php
// Fonction qui renvoie le genre de la personne et si la personne est mineur ou majeur avec 2 parametres
  function genderAge($gender, $age){
    // ternaire pour le genre
    $genderEcho= ($gender == 'Homme') ? 'un homme' : 'une femme';
    // ternaire pour l'age
    $ageEcho= ($age >= 18) ? 'majeur' : 'mineur';
    // echo des deux 'résultats'
    echo 'Vous êtes ' . $genderEcho . ' et vous êtes ' . $ageEcho;
  };
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 7</title>
  </head>
  <body>
    <p>
      <?php genderAge('Homme', 24); ?>
    </p>
  </body>
</html>
