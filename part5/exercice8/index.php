<?php
$months = array ('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre');
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 8</title>
  </head>
  <body>
    <?php for ($i=0; $i < 12; $i++) { ?>
    <p><?= $months[$i]; ?></p>
    <?php } ?>
  </body>
</html>
