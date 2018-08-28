<?php
$i = 0;
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 1</title>
  </head>
  <body>
    <?php
    while ($i <= 10) {
      ?>
      <p>
        <?php
        echo $i;
        $i++;
        ?>
      </p>
      <?php
    }
    ?>
  </body>
</html>
