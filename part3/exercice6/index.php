<?php
$i = 20;
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 6</title>
  </head>
  <body>
    <?php while ($i >= 0) { ?>
      <p>
        <?php
        echo 'C\'est presque bon';
        $i--;
        ?>
      </p>
    <?php } ?>
  </body>
</html>
