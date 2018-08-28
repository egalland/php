<?php
$i = 1;
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 4</title>
  </head>
  <body>
    <?php
    while ($i <= 10) {
      ?>
      <p>
        <?php
        echo $i;
        $i += $i/2;
        ?>
      </p>
      <?php } ?>
  </body>
</html>
