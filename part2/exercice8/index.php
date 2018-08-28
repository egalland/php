<?php
  $isOk = false;
  if($isOk){
    $isOkEcho = 'c\'est ok !!';
  }else{
    $isOkEcho = 'c\'est pas bon !!!';
  };
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 8</title>
  </head>
  <body>
    <p>
      <?= $isOkEcho; ?>
   </p>
  </body>
</html>
