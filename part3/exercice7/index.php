<?php
$i = 1;
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 7</title>
  </head>
  <body>
    <?php while ($i <= 100) { ?>
      <p>
        <?php
        echo 'On tient le bon bout';
        $i += 15;
        ?>
      </p>
      <?php } ?>
  </body>
</html>
