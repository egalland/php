<?php
$departments = array(
  02 => 'Aisne',
  51 => 'Marne',
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
    <title>Exercice 10</title>
  </head>
  <body>
    <?php foreach ($departments as $key => $value){?>
    <p>Le département <?= $value; ?> a le numéro <?= $key; ?></p>
    <?php } ?>
  </body>
</html>
