<?php
$firstVar = 0;
$secondVar = rand(0, 100);
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 2</title>
  </head>
  <body>
    <?php
    while ($firstVar < 20) {
      ?>
      <p>
        <?php
        echo $firstVar * $secondVar;
        $firstVar++;
        ?>
      </p>
      <?php
    }
    ?>
  </body>
</html>
