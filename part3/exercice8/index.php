<?php
$i = 200;
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 8</title>
  </head>
  <body>
    <?php while ($i >= 0) { ?>
      <p>
        <?php
        echo 'Enfin !!!!';
        $i -= 12;
        ?>
      </p>
      <?php } ?>
  </body>
</html>
