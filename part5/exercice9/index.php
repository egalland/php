<?php
$departments = array(
  02 => 'Aisne',
  51 => 'MArne',
  59 => 'Nord',
  60 => 'Oise',
  62 => 'Pas-de-Calais',
  80 => 'Somme'
  );
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 9</title>
  </head>
  <body>
    <?php foreach ($departments as $value){?>
    <p>
    <?= $value ?>
    </p>
    <?php } ?>
  </body>
</html>
