<?php
$firstVar = 100;
$secondVar = rand(1, 100);
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 3</title>
  </head>
  <body>
    <?php
    while ($firstVar >= 10) {
      ?>
      <p>
        <?php
        echo $firstVar * $secondVar;
        $firstVar--;
        ?>
      </p>
      <?php } ?>
  </body>
</html>
